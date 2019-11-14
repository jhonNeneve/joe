$(document).ready(function () {
    $('.sidenav').sidenav();
    $.ajax({
        url: '../modal/home.php',
        type: 'POST',
        data: {},
        success: function (data) {
           var data =  JSON.parse(data);

           for (let i = 0; i < data.length; i++) {
            montaCards(data[i].titulo, data[i].descricao)             
           }
        }
      });
});



function menu(menu) {
    if (menu === 'home') {
        window.location.replace('home.html');
    } else if (menu === 'module') {
        window.location.replace('module.html');
    } else {
        window.location.replace('flow.html');
    }
}

function montaCards(title, description){
var address = 'blablabla ';
var cardFlow = document.getElementById("cardFlow");
cardFlow.innerHTML += '<div class="col s12 m3">'+
                        '<div class="card">'+
                           '<div class="card-image waves-effect waves-block waves-light">'+
                              '<img class="activator" src="images/fluxo.png">'+
                           '</div>'+
                           '<div class="card-content">'+
                              '<span class="card-title activator grey-text text-darken-4">'+ 
                              title +'<i class="material-icons right">more_vert</i></span>'+
                              '<p><a href="'+address+'">Acessar Fluxo</a></p>'+
                           '</div>'+
                           '<div class="card-reveal">'+
                              '<span class="card-title grey-text text-darken-4">'+ title +'<i class="material-icons right">close</i></span>'+
                              '<p>'+ description +'</p>'+
                           '</div>'+
                        '</div>'+
                      '</div>';
                    }