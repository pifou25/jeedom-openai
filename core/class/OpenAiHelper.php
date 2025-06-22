<?php

/**
 * class Helper pour méthodes statiques d'aide
 * @package OpenAI
 * 
 */
class OpenAiHelper {

    /**
     * Get compatible message commands for OpenAI response
     * @return eqLogic[] Array of compatible message commands
     */
    public static function getMessageCommands( $eqLogicId) {
        return cmd::byTypeSubType('action', 'message');
    }
    
    
    /**
     * Get translated Jeedom context:
     * read every object and its equipments, then read every info command
     * and return an array with object name (location), equipment name, and the list of commands names, values and units
     * @param array $includedObjects List of object IDs to include in the context
     * @return array
     */
    public function getJeedomContext( $includedObjects =[]) {
        $context = array();
        
        foreach ($includedObjects as $objectId) {
            $msg = '';
            $object = jeeObject::byId($objectId);
            if (!is_object($object)) continue;
            if (!$object->isVisible()) continue; // Skip invisible objects

            $msg = OpenAiHelper::getTranslations( "location") .": " . $object->getName() . ";";

            foreach ($object->getEqLogic() as $eqLogic) {
                $msg .= OpenAiHelper::getTranslations( "equipement") .": " . $eqLogic->getName() . "";

                $values = '';
                foreach ($eqLogic->getCmd('info') as $cmd) {
                    if (!$cmd->isVisible()) continue; // Skip invisible commands
                    if (!$cmd->execCmd()) continue; // Skip commands with no value
                    $unit = !empty($cmd->getUnite()) ? ' ' . $cmd->getUnite() : '';
                    $values .= $cmd->getName() . ": " . $cmd->execCmd() . $unit . ";";
                }

                if (!empty($values)) {
                    $msg .= OpenAiHelper::getTranslations( "commands") .":[" . $values . "]";
                }
            }

            if (!empty($msg)) {
                $context[] = $msg;
            }
        }

        return $context;
    }

    /**
     * get models configuration from JSON file
     * @return array
     */
    public static function getModelsConfig( $modelId = null ) {
        $jsonFile = dirname(__FILE__) . '/../../plugin_info/openai_models.json';
        if (!file_exists($jsonFile)) {
            throw new Exception(__('Configuration file not found', __FILE__));
        }
        $config = json_decode(file_get_contents($jsonFile), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception(__('Invalid JSON configuration file', __FILE__));
        }
        
        if ($modelId !== null) {
            if(!isset($config['openapis'][$modelId])) {
                throw new Exception(__("Model configuration not found: $modelId", __FILE__));
            } else {
                return $config['openapis'][$modelId];
            }
        }
        return $config;
    }

    /**
     * get plugin translations
     * @return array
     */
    public static function getTranslations($key = '') {
        static $translations = null;
        if ($translations == null) {
            $language = translate::getLanguage();
            $translations = json_decode(file_get_contents(dirname(__FILE__) . "/../../core/i18n/{$language}.json"), true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception(__('Invalid JSON translation file', __FILE__));
            }
        }
        if (!empty($key)) {
            return isset($translations[$key]) ? $translations[$key] : $key;
        }
        return $translations;
    }
    
    /**
     * Build the system prompt for OpenAI
     * 
     * @param array $systemPrompt User-defined system prompts
     * @param string $role The role of the system prompt (default: 'system')
     * @param array $systemMessages Existing system messages to which the prompt will be added
     * @return array [role => $role, content => system prompt]
     * @throws InvalidArgumentException If the system prompt is not an array
     */
    public function buildSystemPrompt($systemPrompt, $role = 'system', $systemMessages = array()) {
        if (!is_array($systemPrompt)) {
            throw new InvalidArgumentException(__('System prompt must be an array', __FILE__));
        }

        foreach ($systemPrompt as $message) {
            $systemMessages[] = array(
                'role' => $role,
                'content' => $message
            );
        }
      
        return $systemMessages;
    }
    /**
     * add a system prompt to the existing messages
     * @param string $systemPrompt The system prompt to add
     * @param string $role The role of the system prompt (default: 'system')
     * @param array $messages The existing messages to which the system prompt will be added
     * @return array The updated messages array with the system prompt added
     * @throws InvalidArgumentException If the system prompt is not a string
     */
    public function addSystemPrompt($systemPrompt, $role = 'system', $messages) {
        if (!is_string($systemPrompt)) {
            throw new InvalidArgumentException(__('System prompt must be an array', __FILE__));
        }

        $messages[] = array(
            'role' => $role,
            'content' => $systemPrompt
        );
        return $messages;
    }

}