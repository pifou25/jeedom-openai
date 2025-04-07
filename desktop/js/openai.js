/* global jeedom */

$("#table_cmd").sortable({axis: "y", cursor: "move", items: ".cmd", placeholder: "ui-state-highlight", tolerance: "intersect", forcePlaceholderSize: true});

$('.eqLogicAttr[data-l1key=configuration][data-l2key=api_key]').on('change', function () {
    if ($(this).value() === '') {
        $('#div_alert').showAlert({message: '{{La clé API est obligatoire}}', level: 'danger'});
    }
});

$('.eqLogicAttr[data-l1key=configuration][data-l2key=api_url]').on('change', function () {
    if ($(this).value() === '') {
        $('#div_alert').showAlert({message: '{{L\'URL de l\'API est obligatoire}}', level: 'danger'});
    }
});

$('.eqLogicAttr[data-l1key=configuration][data-l2key=model]').on('change', function () {
    if ($(this).value() === '') {
        $('#div_alert').showAlert({message: '{{Le modèle est obligatoire}}', level: 'danger'});
    }
});

$('#bt_addSystemPrompt').on('click', function() {
    addSystemPrompt();
});

function addSystemPrompt(value = '') {
    var div = '<div class="input-group" style="margin-bottom:5px;">';
    div += '<input class="form-control roundedLeft systemPrompt" value="' + value + '" />';
    div += '<span class="input-group-btn">';
    div += '<a class="btn btn-danger btn-sm roundedRight bt_removeSystemPrompt"><i class="fas fa-minus-circle"></i></a>';
    div += '</span>';
    div += '</div>';
    $('#div_systemPrompts').append(div);
}

$('body').on('click', '.bt_removeSystemPrompt', function() {
    $(this).closest('.input-group').remove();
});

// Save system prompts to configuration when saving equipment
$('.eqLogicAction[data-action=save]').on('click', function() {
    var systemPrompts = [];
    $('.systemPrompt').each(function() {
        var value = $(this).val();
        if (value !== '') {
            systemPrompts.push(value);
        }
    });
    $('.eqLogicAttr[data-l1key=configuration][data-l2key=system_prompts]').val(JSON.stringify(systemPrompts));
});

// Load system prompts when loading equipment
$('.eqLogicDisplayCard').on('click', function() {
    var systemPrompts = $('.eqLogicAttr[data-l1key=configuration][data-l2key=system_prompts]').val();
    $('#div_systemPrompts').empty();
    if (systemPrompts) {
        try {
            var prompts = JSON.parse(systemPrompts);
            prompts.forEach(function(prompt) {
                addSystemPrompt(prompt);
            });
        } catch (e) {
            console.error('Error parsing system prompts:', e);
            addSystemPrompt();
        }
    } else {
        addSystemPrompt();
    }
});

function addCmdToTable(_cmd) {
    if (!isset(_cmd)) {
        var _cmd = {configuration: {}};
    }
    if (!isset(_cmd.configuration)) {
        _cmd.configuration = {};
    }

    var tr = '<tr class="cmd" data-cmd_id="' + init(_cmd.id) + '">';
    tr += '<td>';
    tr += '<span class="cmdAttr" data-l1key="id" style="display:none;"></span>';
    tr += '<input class="cmdAttr form-control input-sm" data-l1key="name" style="width : 140px;" placeholder="{{Nom}}">';
    tr += '</td>';
    tr += '<td>';
    tr += '<span class="type" type="' + init(_cmd.type) + '">' + jeedom.cmd.availableType() + '</span>';
    tr += '<span class="subType" subType="' + init(_cmd.subType) + '"></span>';
    tr += '</td>';
    tr += '<td>';
    if (is_numeric(_cmd.id)) {
        tr += '<a class="btn btn-default btn-xs cmdAction" data-action="configure"><i class="fa fa-cogs"></i></a> ';
        tr += '<a class="btn btn-default btn-xs cmdAction" data-action="test"><i class="fa fa-rss"></i> {{Tester}}</a>';
    }
    tr += '<i class="fa fa-minus-circle pull-right cmdAction cursor" data-action="remove"></i>';
    tr += '</td>';
    tr += '</tr>';
    $('#table_cmd tbody').append(tr);
    $('#table_cmd tbody tr:last').setValues(_cmd, '.cmdAttr');
    if (isset(_cmd.type)) {
        $('#table_cmd tbody tr:last .cmdAttr[data-l1key=type]').value(init(_cmd.type));
    }
    jeedom.cmd.changeType($('#table_cmd tbody tr:last'), init(_cmd.subType));
}