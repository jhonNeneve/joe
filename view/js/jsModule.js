$(document).ready(function(){
    $('.tabs').tabs();
    setTimeout(function(){
        loginWrapper.classList.toggle('open'); 
    },800);

    $.ajax({
        url: '../controller/module.php',
        type: 'POST',
        data:{
          fun: 'getModules'
        },
        success: resp => {
          let modules = JSON.parse(resp);
          modules.forEach(iten => {
            newLine(iten.nome, iten.descricao, iten.id);
          });
        }
      });
  
      $.ajax({
        url: '../controller/module.php',
        type: 'POST',
        data:{
          fun: 'getUsers'
        },
        success: resp => {
          let users = JSON.parse(resp);
          users.forEach(iten => {
            $('#modal-permitidos').append('<option value="'+iten.id+'">'+iten.nome+'</option>');
          });
          $('#modal-permitidos').formSelect();
        }
      });
  
      $('.modal-close').click(function(event) {
        $('#modal-nome').val('');
        $('#modal-descricao').val('');
        $('#modal-permitidos').val('');
        $('#modal-permitidos').formSelect();
      });
  
      M.AutoInit();
      $('#loading').addClass('hide');
});

function newModule() {
    var nome = $('#modal-nome').val();
    var descricao = $('#modal-descricao').val();
    var permitidos = $('#modal-permitidos').val();
    $.ajax({
        url: '../controller/module.php',
        type: 'POST',
        data:{
        fun: 'addModule',
        nome: nome,
            descricao: descricao,
            permitidos: permitidos
        },
        success: resp => {
            if (resp != 'false' ? newLine(nome, descricao, parseInt(resp)) : '');
        }
    });
}

function newLine(nome, texto, id) {
    $('#tbody').append(
        '<tr id="line-' + id + '">\
        <td>' + nome + '</td>\
        <td class="truncate" style="width: 500px;">\
            ' + texto + '\
        </td>\
            <td>\
            <a class="waves-effect waves-red btn-flat tooltipped" data-position="top" data-tooltip="Excluir" onclick="deleteModule(' + id + ');">\
            <i class="material-icons red-text">delete_outline</i>\
            </a>\
        </td>\
        </tr>'
    );
}

function deleteModule(id) {
    $.ajax({
        url: '../controller/module.php',
        type: 'POST',
        data:{
        fun: 'deleteModule',
        id: id
        },
        success: resp => {
            if (resp == '1' ? $('#line-'+id).remove():'');
        }
    });
}