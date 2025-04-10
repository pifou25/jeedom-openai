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
        ajax::success($openai->getAvailableModels());
    }

    throw new Exception(__('Aucune méthode correspondante à', __FILE__) . ' : ' . init('action'));
} catch (Exception $e) {
    ajax::error(displayException($e), $e->getCode());
}