$(document).ready(function(){
    $('.sidenav').sidenav();
  });
// var menu = document.getElementById("menu");
// menu.innerHTML += '<ul id="slide-out" class="sidenav sidenav-fixed">'+
//                         '<li>'+
//                             '<div class="user-view">'+
//                                 '<div class="background">'+
//                                     '<img src="images/office.jpg">'+
//                                 '</div>'+
//                             '</div>'+
//                         '</li>'+
//                         '<li><a onclick="menu("home")"><i class="material-icons">home</i>Home</a></li>'+
//                         '<li><a onclick="menu("module")">Módulo</a></li>'+
//                         '<li><a onclick="menu("flow")">Fluxograma</a></li>'+
//                     '</ul>'+
//                     '<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>';

var header = document.getElementById("header");
header.innerHTML +=   '<div class="navbar-fixed">' +
                        '<nav>' +
                          '<div class="nav-wrapper white">' +
                            '<a href="#" class="brand-logo center colorText ">Joe</a>' +
                            '<ul class="right hide-on-med-and-down">' +
                              '<li><a href="login.html" class="colorText">Sair</a></li>' +
                            '</ul>' +
                          '</div>' +
                        '</nav>' +
                      '</div>';

var footer = document.getElementById("footer");
footer.innerHTML += '<footer class="page-footer white" style="padding: 0;">'+
                        '<div class="footer-copyright">'+
                            '<div class="container colorText">© 2015 Copyright</div>'+
                        '</div>'+
                    '</footer>';