$(document).ready(function(){
  $('.sidenav').sidenav();
});

var menu = document.getElementById("menu");
if(menu != null){
    menu.innerHTML += '<ul id="slide-out" class="sidenav sidenav-fixed deep-purple lighten-5">'+
                          '<li><a onclick="menu(\'home\');" href="javascript:void(0)"><i class="material-icons">home</i>Home</a></li>'+
                          '<li><a onclick="menu(\'module\');" href="javascript:void(0)"><i class="material-icons">dns</i>Módulo</a></li>'+
                          '<li><a onclick="menu(\'flow\');" href="javascript:void(0)"><i class="material-icons">account_tree</i>Fluxograma</a></li>'+
                      '</ul>';
}

var header = document.getElementById("header");
header.innerHTML += '<div class="navbar-fixed">' +
                      '<nav>' +
                        '<div class="nav-wrapper deep-purple">' +
                          '<a href="#" class="brand-logo center white-text ">Joe</a>' +
                          '<ul class="right hide-on-med-and-down">' +
                            '<li><a href="javascript:void(0);" onclick="logoff();" class="white-text">Sair</a></li>' +
                          '</ul>' +
                        '</div>' +
                      '</nav>' +
                    '</div>';

var footer = document.getElementById("footer");
if(footer != null){
    footer.innerHTML += '<footer class="page-footer deep-purple" style="padding: 0;padding-left: 207px !important;">'+
                            '<div class="footer-copyright">'+
                                '<div class="container white-text">© 2019 Copyright</div>'+
                            '</div>'+
                        '</footer>';
}



// var loading = document.getElementById("loading");
// loading.innerHTML += '<div class="preloader-wrapper big active">' +
//                         '<div class="spinner-layer spinner-blue-only">' +
//                           '<div class="circle-clipper left">' +
//                             '<div class="circle"></div>' +
//                           '</div><div class="gap-patch">' +
//                             '<div class="circle"></div>' +
//                           '</div><div class="circle-clipper right">' +
//                             '<div class="circle"></div>' +
//                           '</div>' +
//                         '</div>' +
//                       '</div>';
function logoff() {
  $.ajax({
    url: '../controller/login.php',
    type: 'POST',
    data: {fun: 'logoff'},
    success: function(result){
      if(result != 'false'){
        window.location.replace(result);
      }       
    }
  });
}