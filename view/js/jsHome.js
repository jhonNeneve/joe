$(document).ready(function () {
    $('#loading').addClass('hide');
    $('.sidenav').sidenav();
    $.ajax({
        url: '../controller/home.php',
        type: 'POST',
        data: {func: 'getFlow'},
        success: function (data) {
            var data =  JSON.parse(data);
            for (let i = 0; i < data.length; i++) {
                montaCards(data[i].titulo, data[i].descricao, data[i].id)             
            }
        }
      });
});

function menu(menu) {
    if (menu === 'home') {
        window.location.replace('home.php');
    } else if (menu === 'module') {
        window.location.replace('module.php');
    } else {
        window.location.replace('flow.php');
    }
}

function montaCards(title, description, id){
    var address = 'flow.php?hash='+id;
    var cardFlow = document.getElementById("cardFlow");
    cardFlow.innerHTML += '<div class="col s12 m3">'+
                            '<div class="card">'+
                            '<div class="card-image waves-effect waves-block waves-light">'+
                                '<img class="activator" src="images/f.png">'+
                            '</div>'+
                            '<div class="card-content">'+
                                '<span class="card-title activator grey-text text-darken-4">'+ 
                                title +'<i class="material-icons right">more_vert</i></span>'+
                                '<p><a href="'+address+'">Acessar Fluxo</a></p>'+
                                '<div class="col s8 p-0">'+
                                        '<a id="deletarOperador"'+
                                        'class="btn-floating btn-large waves-effect waves-light red btn-small tooltipped scale-transition scale-in"'+
                                        'data-position="left"'+
                                        'data-tooltip="Deletar"'+
                                        'style="position: absolute; right: 10px; top: 10px;">'+
                                            '<i class="material-icons deleteHome right" onclick="deleteFlow('+id+');">delete_outline</i>'+
                                        '</a>'+
                                    '</div>'+
                            '</div>'+
                            '<div class="card-reveal">'+
                                '<span class="card-title grey-text text-darken-4">'+ title +
                                    '<i class="material-icons right">close</i>'+
                                    '</span>'+
                                '<p>'+ description +'</p>'+
                            '</div>'+
                            '</div>'+
                        '</div>';
}

function deleteFlow(fluxoId){
    $.ajax({
        url: '../controller/home.php',
        type: 'POST',
        data: {fluxoId,
            func: 'deleteFlow'},
        success: function (data) {
            if(data == 'true'){
                M.toast({html: 'Deletado com sucesso!'})
                setTimeout(function(){ 
                    window.location.replace('home.html');
                }, 3000);
            }
        }
    });
};