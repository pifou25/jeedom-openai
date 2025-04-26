<?php

try {
    require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';
    include_file('core', 'authentification', 'php');

    if (!isConnect('admin')) {
        throw new Exception(__('401 - Accès non autorisé', __FILE__));
    }

    ajax::init();

    if (init('action') == 'getModels') {
        $openai = openai::byId(init('id'));
        if (!is_object($openai)) {
            throw new Exception(__('OpenAI eqLogic non trouvé : ', __FILE__) . init('id'));
        }
        $result = $openai->getModelsConfig();
        try {
            $models = $openai->getModels();
        } catch (Exception $e) {
            log::add('openai', 'info', 'Erreur lors de la récupération des modèles : ' . $e->getMessage());
            $models = [];
        }
        $result['models'] = array_merge($result['models'], $models);
        ajax::success( $result);
    }

    throw new Exception(__('Aucune méthode correspondante à', __FILE__) . ' : ' . init('action'));
} catch (Exception $e) {
    ajax::error(displayException($e), $e->getCode());
}