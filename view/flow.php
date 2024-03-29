<?php include '../controller/core.php'; ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/lib/materialize/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery/jquery.flowchart.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/cssBasic.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/lib/jquery.flowchart/jquery.flowchart.min.css"></link> -->
  <title>Chat Joe</title>
  </head>

  <body class="p-b-50 p-relative">
    <div id="loading">
      <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="header"></div>
    <div id="menu"></div>
    <section class="grey lighten-4" style="margin-left: 207px;min-height: calc(100vh - 114px);">
      <nav>
        <div class="nav-wrapper deep-purple lighten-1">
          <div class="col s12 p-l-15">
            <a href="home.html" class="breadcrumb">Home</a>
            <a href="flow.html" class="breadcrumb">Fluxograma</a>
          </div>
        </div>
      </nav>
      <div class="row m-b-0">
        <div class="col s12">
          <div class="card m-t-15">
            <div class="row m-0" style="height: 500px;">
              <div class="col s8 p-0" style="position: relative;">
                <a id="deletarOperador"
                class="btn-floating btn-large waves-effect waves-light red btn-small tooltipped scale-transition scale-out"
                data-position="left" data-tooltip="Deletar" style="position: absolute; right: 10px; top: 10px;">
                <i class="material-icons">delete_outline</i>
              </a>
              <a id="editarOperador" class="btn-floating btn-large waves-effect waves-light orange btn-small tooltipped scale-transition scale-out" data-position="left" data-tooltip="Editar" style="position: absolute; right: 10px; top: 50px;">
                <i class="material-icons">edit</i>
              </a>
              <a id="saveOperador" class="btn-floating btn-large waves-effect waves-light green btn-small tooltipped scale-transition scale-out" data-position="left" data-tooltip="Salvar" style="position: absolute; right: 10px; top: 90px;">
                <i class="material-icons">save</i>
              </a>
              <div id="chart_container">
                <div id="example_9" style="width: 2000px; height: 2000px; background: white;"></div>
              </div>
            </div>
            <div class="col s4 p-0" style="height: 100%; border-left: 1px solid #ddd;">
              <div class="row m-0" style="height: calc(100% - 52px);border-bottom: 1px solid #ddd;">
                <div class="col s12 p-0" style="height: 100%;">
                  <ul class="collapsible z-depth-0 m-0" style="border: 0; height: 100%;">
                    <li>
                      <div class="collapsible-header p-10"><i class="material-icons">chrome_reader_mode</i>Informações
                      gerais</div>
                      <div class="collapsible-body p-10" style="max-height: 358px;">
                        <div class="row m-0">
                          <div class="input-field col s12 m-0 m-t-10">
                            <input id="inTitulo" type="text">
                            <label for="inTitulo">Título</label>
                          </div>
                          <div class="input-field col s12 m-0 m-t-10">
                            <input id="inDescricao" type="text">
                            <label for="inDescricao">Descrição</label>
                          </div>
                          <div class="input-field col s12">
                            <select id="seModulo">
                              <option value="" disabled selected>Selecione</option>
                            </select>
                            <label>Módulo</label>
                          </div>
                          <div class="input-field col s12 m-0 m-t-10">
                            <input id="inLargura" type="number" minlength="500" value="2000">
                            <label for="inLargura">Largura</label>
                          </div>
                          <div class="input-field col s12 m-0 m-t-10">
                            <input id="inAltura" type="number" minlength="500" value="2000">
                            <label for="inAltura">Altura</label>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li style="max-height: calc(100% - 110px);">
                      <div class="collapsible-header p-10"><i class="material-icons">question_answer</i>Novo operador
                      </div>
                      <div class="collapsible-body p-10" style="max-height: 358px;">
                        <div class="row m-0">
                          <div class="input-field col s12 m-0 m-t-10">
                            <select id="seTipo">
                              <option value="1">Pergunta</option>
                              <option value="2">Afirmação</option>
                            </select>
                            <label>Tipo</label>
                          </div>
                          <div class="input-field col s12 m-0 m-t-10">
                            <input id="inFrase" type="text">
                            <label for="inFrase">Frase</label>
                          </div>
                          <div id="divInput" class="scale-transition">
                            <div class="input-field col s12 m-0 m-t-10">
                              <a class="waves-effect waves-teal btn-flat right" id="newInSaida">
                                <i class="material-icons">add</i>
                              </a>
                              <h6 class="deep-purple-text">Respostas</h6>
                              <hr style="border-color: #673ab7;">
                            </div>
                            <div id="inSaida"></div>
                          </div>
                          <div class="col s12 m-0 m-t-10 p-t-10" style="border-top: 1px solid #ddd;">
                            <div id="divOperador" class="draggable_operator ui-draggable ui-draggable-handle"
                            style="height: 32.4px; line-height: 23px; text-align: center;width: 100%;">
                            Operador
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row m-0">
              <div class="col s12 p-0">
                <a id="btnSalvar" class="btn btn-small waves-effect waves-light d-block m-10">Salvar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <div id="footer"></div>
  </body>
  <script type="text/javascript" src="js/lib/jquery/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery/jquery.panzoom.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery.flowchart/jquery.flowchart.min.js"></script>
  <script type="text/javascript" src="js/lib/materialize/materialize.min.js"></script>
  <script type="text/javascript" src="js/trataObjeto.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/jsBasic.js"></script>
<script type="text/javascript">
	function menu(menu) {
    if (menu === 'home') {
        window.location.replace('home.html');
    } else if (menu === 'module') {
        window.location.replace('module.html');
    } else {
        window.location.replace('flow.php');
    }
  }
  $flowchart = $('#example_9');
  hash = <?php echo isset($_GET['hash']) ? $_GET['hash'] : 0; ?>;

  $(document).ready(function () {
    M.AutoInit();
    calcSaidas = 0;
    var outputTrash = false;

    $('#seTipo').change(function () {
      if ($(this).val() == 1) {
        $('#divInput').fadeIn();
      } else {
        $('#divInput').hide();
        restOperador();
      }
    });

    $('#inLargura').keyup(function () {
      let largura = parseInt($(this).val());
      if (largura > 499) {
        $('#example_9').css('width', largura);
        $flowchart.panzoom('pan', 5, 5);
      }
    });

    $('#inAltura').keyup(function () {
      let altura = parseInt($(this).val());
      if (altura > 499) {
        $('#example_9').css('height', altura);
        $flowchart.panzoom('pan', 5, 5);
      }
    });

    $('#inLargura').click(function () {
      let largura = parseInt($(this).val());
      if (largura > 499) {
        $('#example_9').css('width', largura);
        $flowchart.panzoom('pan', 5, 5);
      }
    });

    $('#inAltura').click(function () {
      let altura = parseInt($(this).val());
      if (altura > 499) {
        $('#example_9').css('height', altura);
        $flowchart.panzoom('pan', 5, 5);
      }
    });

    $('#newInSaida').click(function () {
      $('#inSaida').append('\
        <div id="div_output_'+ calcSaidas + '" class="input-field col s12 m-0 m-t-10">\
        <a class="waves-effect waves-teal btn-flat right m-t-10" onclick="deletarOperador('+ calcSaidas + ')">\
        <i class="material-icons">delete</i>\
        </a>\
        <input id="output_'+ calcSaidas + '" type="text" style="width: calc(100% - 55px);">\
        <label id="label_'+ calcSaidas + '" for="output_' + calcSaidas + '">Resposta ' + calcSaidas + '</label>\
        </div>\
        ');
      calcSaidas++;
    });

    $('#deletarOperador').click(function () {
      if (setTrash == 'operator') {
        $flowchart.flowchart('deleteSelected');
        $('#seTipo').val('1');
        $('#inFrase').val('');
        $('#inSaida').html('');
        calcSaidas = 0;
        outputTrash = false;
      } else if (setTrash == 'link') {
        $flowchart.flowchart('deleteSelected');
      }
    });

    $('#editarOperador').click(function () {
      if (setTrash == 'operator') {
        restOperador();
        idOp = $flowchart.flowchart('getSelectedOperatorId');
        dataOp = $flowchart.flowchart('getOperatorData', idOp);
        $('#inFrase').val(dataOp.properties.title);
        if (typeof dataOp.properties.outputs !== 'undefined') {
          Object.entries(dataOp.properties.outputs).forEach(iten => {
            $('#inSaida').append('\
              <div id="div_output_'+ calcSaidas + '" class="input-field col s12 m-0 m-t-10">\
              <a class="waves-effect waves-teal btn-flat right m-t-10" onclick="deletarOperador('+ calcSaidas + ')">\
              <i class="material-icons">delete</i>\
              </a>\
              <input id="output_'+ calcSaidas + '" type="text" style="width: calc(100% - 55px);" value="'+iten[1].label+'">\
              <label id="label_'+ calcSaidas + '" for="output_' + calcSaidas + '">Resposta ' + calcSaidas + '</label>\
              </div>\
              ');
            calcSaidas++;
          });
        } else {
          $('#seTipo').val(2);
        }
      }
    });

    $('#saveOperador').click(function () {
      idOp = $flowchart.flowchart('getSelectedOperatorId');
      dataOp = $flowchart.flowchart('getOperatorData', idOp);
      dataOp.properties.title = $('#inFrase').val();
      var outputs = [];
      if ($('#inSaida').html() != '') {
        for (var i = 0; i < calcSaidas; i++) {
          outputs.push($('#output_' + i).val());
        }
      }
      dataOp.properties.outputs = {};
      for (i = 0; i < calcSaidas; i++) {
        dataOp.properties.outputs['output_' + i] = {
          label: outputs[i]
        };
      }
      $flowchart.flowchart('setOperatorData', idOp, dataOp);
    });

    $('#btnSalvar').click(function () {
      var fluxo = $flowchart.flowchart('getData');
      $.ajax({
        url: '../controller/flow.php',
        type: 'POST',
        data:{
          fun: 'saveFlow',
          hash: hash,
          titulo: $('#inTitulo').val(),
          descricao: $('#inDescricao').val(),
          largura: $('#inLargura').val(),
          altura: $('#inAltura').val(),
          fluxo: JSON.stringify(fluxo),
          modulo: $('#seModulo').val()
        },
        success: resp => {
          var arrayTeste = [];
          Object.entries(fluxo.operators).forEach((item) => {
            if (!isEmpty(item[1].properties.outputs)) {
              var newAttr = {
                index: item[0],
                question: '',
                answers: []
              };
              newAttr.question = item[1].properties.title;
              Object.entries(item[1].properties.outputs).forEach((element) => {
                newAttr.answers.push({
                  question: element[1].label,
                  priority: "1"
                });
              });
              arrayTeste.push(newAttr);
            }
          });
          Object.entries(fluxo.links).forEach((item) => {
            for (var i = 0; i < arrayTeste.length; i++) {
              if (arrayTeste[i].index == item[1].fromOperator) {
                arrayTeste[i].answers.push({
                  question: fluxo.operators[item[1].toOperator].properties.title,
                  priority: "1"
                });
                break;
              }
            }
          });

          // TRATAMENTO DE OBJETO
          let trataObj = new TrataObjeto(arrayTeste, $('#inTitulo').val());
          trataObj.start();
        }
      });
    });

    $.ajax({
      url: '../controller/module.php',
      type: 'POST',
      data:{
        fun: 'getModules'
      },
      success: resp => {
        let modules = JSON.parse(resp);
        modules.forEach(iten => {
          $('#seModulo').append('<option value="'+iten.id+'">'+iten.nome+'</option>');
        });
        $('#seModulo').formSelect();
      }
    });

    var $container = $flowchart.parent();

    // Panzoom initialization...
    $flowchart.panzoom();

    // Centering panzoom
    $flowchart.panzoom('pan', 5, 5);

    // Panzoom zoom handling...
    var possibleZooms = [0, 0.5, 0.75, 1, 1.5, 1.75, 2];
    var currentZoom = 2;
    $container.on('mousewheel.focal', function (e) {
      e.preventDefault();
      var delta = (e.delta || e.originalEvent.wheelDelta) || e.originalEvent.detail;
      var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
      currentZoom = Math.max(0, Math.min(possibleZooms.length - 1, (currentZoom + (zoomOut * 2 - 1))));
      $flowchart.flowchart('setPositionRatio', possibleZooms[currentZoom]);
      $flowchart.panzoom('zoom', possibleZooms[currentZoom], {
        animate: true,
        focal: e
      });
    });

    // Apply the plugin on a standard, empty div...
    $flowchart.flowchart({
      multipleLinksOnInput: true,
      multipleLinksOnOutput: true,
      onOperatorSelect: function (operatorId) {
        if ($('#deletarOperador').hasClass('scale-out')) {
          $('#deletarOperador').removeClass('scale-out');
          $('#deletarOperador').addClass('scale-in');
        }
        if ($('#editarOperador').hasClass('scale-out')) {
          $('#editarOperador').removeClass('scale-out');
          $('#editarOperador').addClass('scale-in');
          $('#saveOperador').removeClass('scale-out');
          $('#saveOperador').addClass('scale-in');
        }
        setTrash = 'operator';
        return true;
      },
      onOperatorUnselect: function () {
        if (setTrash == 'operator') {
          if ($('#deletarOperador').hasClass('scale-in')) {
            $('#deletarOperador').removeClass('scale-in');
            $('#deletarOperador').addClass('scale-out');
          }
          if ($('#editarOperador').hasClass('scale-in')) {
            $('#editarOperador').removeClass('scale-in');
            $('#editarOperador').addClass('scale-out');
            $('#saveOperador').removeClass('scale-in');
            $('#saveOperador').addClass('scale-out');
          }
        }
        return true;
      },
      onLinkSelect: function (linkId) {
        $('#deletarOperador').removeClass('scale-out');
        $('#deletarOperador').addClass('scale-in');
        if (setTrash == 'operator' && $('#editarOperador').hasClass('scale-in')) {
          $('#editarOperador').removeClass('scale-in');
          $('#editarOperador').addClass('scale-out');
          $('#saveOperador').removeClass('scale-in');
          $('#saveOperador').addClass('scale-out');
        }
        setTrash = 'link';
        return true;
      },
      onLinkUnselect: function () {
        if (setTrash == 'link') {
          if ($('#deletarOperador').hasClass('scale-in')) {
            $('#deletarOperador').removeClass('scale-in');
            $('#deletarOperador').addClass('scale-out');
          }
        }
        return true;
      }
    });

    $flowchart.parent().siblings('.delete_selected_button').click(function () {
      $flowchart.flowchart('deleteSelected');
    });


    var $draggableOperators = $('.draggable_operator');

    var operatorId = 0;

    $draggableOperators.draggable({
      cursor: "move",
      opacity: 0.7,
      helper: 'clone',
      appendTo: 'body',
      zIndex: 1000,
      helper: function (e) {
        var $this = $(this);
        var data = getOperatorData($this);
        return $flowchart.flowchart('getOperatorElement', data);
      },
      stop: function (e, ui) {
        var $this = $(this);
        var elOffset = ui.offset;
        var containerOffset = $container.offset();
        if (elOffset.left > containerOffset.left &&
          elOffset.top > containerOffset.top &&
          elOffset.left < containerOffset.left + $container.width() &&
          elOffset.top < containerOffset.top + $container.height()) {
          var flowchartOffset = $flowchart.offset();
        var relativeLeft = elOffset.left - flowchartOffset.left;
        var relativeTop = elOffset.top - flowchartOffset.top;

        var positionRatio = $flowchart.flowchart('getPositionRatio');
        relativeLeft /= positionRatio;
        relativeTop /= positionRatio;

        var data = getOperatorData($this);
        data.left = relativeLeft;
        data.top = relativeTop;

        $flowchart.flowchart('addOperator', data);
      }
    }
  });

  <?php if (isset($_GET['hash'])) { ?>
  $.ajax({
    url: '../controller/flow.php',
    type: 'POST',
    data:{
      fun: 'getFlow',
      hash: <?php echo $_GET['hash']; ?>
    },
    success: resp => {
      resp = JSON.parse(resp);
      console.log(JSON.parse(resp.fluxo));
      $('#inTitulo').val(resp.titulo);
      $('#inDescricao').val(resp.descricao);
      $('#inLargura').val(resp.largura);
      $('#inAltura').val(resp.altura);
      $('#seModulo').val(resp.modulo);
      $flowchart.flowchart('setData', JSON.parse(resp.fluxo));
    }
  });
  <?php } ?>

  function getOperatorData($element) {
    var data = {
      properties: {
        title: $('#inFrase').val(),
        inputs: {},
        outputs: {}
      }
    };


    var outputs = [];
    if ($('#inSaida').html() != '') {
      for (var i = 0; i < calcSaidas; i++) {
        outputs.push($('#output_' + i).val());
      }
    }

    //Entradas
    data.properties.inputs['input'] = {
      label: 'Entrada'
    };
    //Saidas
    for (i = 0; i < calcSaidas; i++) {
      data.properties.outputs['output_' + i] = {
        label: outputs[i]
      };
    }
    return data;
  }

  function restOperador() {
    outputs = [];
    calcSaidas = 0;
    $('#inSaida').html('');
  }

  $('#loading').addClass('hide');
});

function deletarOperador(num) {
  $('#div_output_' + num).remove();
  for (var i = (num + 1); i < calcSaidas; i++) {
    $('#label_' + i).html('Resposta ' + (i - 1));
    $('#label_' + i).attr('for', 'output_' + (i - 1));
    $('#div_output_' + i + ' a').attr('onclick', 'deletarOperador(' + (i - 1) + ');');
    $('#div_output_' + i).attr('id', 'div_output_' + (i - 1));
    $('#output_' + i).attr('id', 'output_' + (i - 1));
    $('#label_' + i).attr('id', 'label_' + (i - 1));
  }
  calcSaidas--;
}

function isEmpty(obj) {
  for (var prop in obj) {
    if (obj.hasOwnProperty(prop))
      return false;
  }

  return true;
}
</script>

</html>