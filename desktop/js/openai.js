/* global jeedom */

$("#table_cmd").sortable({axis: "y", cursor: "move", items: ".cmd", placeholder: "ui-state-highlight", tolerance: "intersect", forcePlaceholderSize: true});

// Function to update the model select based on the selected implementation
function updateModelSelect() {
    const apiUrlInput = document.querySelector('input[data-l2key="api_url"]');
    const modelSelect = document.querySelector('#model-select');
    var selectedImpl = $('.eqLogicAttr[data-l1key=configuration][data-l2key=implementation]').value();
    var selectedModel = $('.eqLogicAttr[data-l1key=configuration][data-l2key=model]').value();
    console.debug('Selected Configuration:', selectedImpl, selectedModel);
    // Clear existing options
    modelSelect.innerHTML = '';
    apiUrlInput.value = 'No URL available';

    if (typeof jsonConfig !== 'undefined' && jsonConfig.openapis) {
        // Populate the "Model" select with available models
        Object.entries(jsonConfig.openapis).forEach(([modelId, modelData]) => {
            if(modelId == selectedImpl) {
                // Set the API URL input value based on the selected implementation
                apiUrlInput.value = modelData.url;
                if (modelData.models) {
                    modelData.models.forEach((model) => {
                        const option = document.createElement('option');
                        option.value = model;
                        option.textContent = model;
                        modelSelect.appendChild(option);
                    });
                    modelSelect.value = selectedModel; // Set the selected model if available
                } else {
                    // add a placeholder option if no models are available
                    const option = document.createElement('option');
                    option.value = 0;
                    option.textContent = 'No model available for ' + modelId;
                    modelSelect.appendChild(option);
                }
            }
        });
    } else {
        // If jsonConfig is not defined, add a placeholder option
        const option = document.createElement('option');
        option.value = 0;
        option.textContent = 'No model available, check the openai_models.json file';
        modelSelect.appendChild(option);
    }
}

// update model select when the implementation changes
$('.eqLogicAttr[data-l1key=configuration][data-l2key=implementation]').on('change', updateModelSelect);

// update model configuration when model select changes
$('#model-select').on('change', function() {
    var selectedModel = $(this).value();
    console.debug('Selected model:', selectedModel);
    $('.eqLogicAttr[data-l1key=configuration][data-l2key=model]').val(selectedModel);
});

// Add system prompt button click event
$('#bt_addSystemPrompt').on('click', function() {
    addSystemPrompt();
});

// Create a new input group for the system prompt
function addSystemPrompt(value = '') {
    console.debug('Adding system prompt:', value);
    /*
    // create div element with input and span
    var div = document.createElement('div');
    div.className = 'input-group';
    div.style.marginBottom = '5px';
    // create input element
    var input = document.createElement('input');
    input.type = 'text';
    input.className = 'eqLogicAttr form-control roundedLeft systemPrompt';
    input.value = value;
    // create span element
    var span = document.createElement('span');
    span.className = 'input-group-btn';
    // create button element
    var button = document.createElement('a');
    button.className = 'btn btn-danger btn-sm roundedRight bt_removeSystemPrompt';
    button.innerHTML = '<i class="fas fa-minus-circle"></i>';
    // append button to span
    span.appendChild(button);
    // append input and span to div
    div.appendChild(input);
    div.appendChild(span);
    // append div to the container
    $('#div_systemPrompts').append(div);
    */

    var div = '<div class="input-group" style="margin-bottom:5px;">';
    div += '<input type="text" class="eqLogicAttr form-control roundedLeft systemPrompt" value="' + value + '" />';
    div += '<span class="input-group-btn">';
    div += '<a class="btn btn-danger btn-sm roundedRight bt_removeSystemPrompt"><i class="fas fa-minus-circle"></i></a>';
    div += '</span>';
    div += '</div>';
    $('#div_systemPrompts').append(div);
}

$('body').on('click', '.bt_removeSystemPrompt', function() {
    $(this).closest('.input-group').remove();
});

$('body').on('click', '.bt_reloadSystemPrompt', function() {
    reloadSystemPrompt();
});

function reloadSystemPrompt() {
    var systemPrompts = $('.eqLogicAttr[data-l1key=configuration][data-l2key=system_prompts]').val();
    $('#div_systemPrompts').empty();
    if (systemPrompts) {
        console.debug('Loading system prompts:', systemPrompts);
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
        console.debug('No system prompts found, adding default prompt');
        addSystemPrompt();
    }
}

// Save system prompts when the save button is clicked
$('.eqLogicAction[data-action=save]').on('click', function() {
    var systemPrompts = [];
    $('.systemPrompt').each(function() {
        var value = $(this).val();
        if (value !== '') {
            systemPrompts.push(value);
        }
    });
    $('.eqLogicAttr[data-l1key=configuration][data-l2key=system_prompts]').val(JSON.stringify(systemPrompts));
    console.debug('System prompts saved:', systemPrompts);
});

// Load system prompts when loading equipment
$('.eqLogicDisplayCard').on('click', function() {
    reloadSystemPrompt();
    // Update model list when loading equipment
    updateModelSelect();
});

$('.eqLogicAttr[data-l1key=configuration][data-l2key=api_key]').on('change', function () {
    if ($(this).value() === '') {
        $('#div_alert').showAlert({message: '{{La clé API est obligatoire}}', level: 'danger'});
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