$(document).ready(function(){
    $('.sidenav').sidenav();
  });
var header = document.getElementById("header");
header.innerHTML += '<nav>'+
                        '<div class="nav-wrapper white">'+
                            '<a href="#" class="brand-logo right colorText"></a>'+
                            '<ul class="left hide-on-med-and-down">'+
                            '<li><a href="login.html" class="colorText">Sair</a></li>'+
                            '</ul>'+
                        '</div>'+
                    '</nav>';

var footer = document.getElementById("footer")
footer.innerHTML += '<footer class="page-footer white">'+
                        '<div class="footer-copyright">'+
                            '<div class="container colorText">© 2015 Copyright</div>'+
                        '</div>'+
                    '</footer>';

