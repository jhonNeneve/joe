$(document).ready(function(){
  $('.tabs').tabs();
  setTimeout(function(){
    loginWrapper.classList.toggle('open'); 
  },800);

});
    
var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});

$("form").submit(function(e) {
  e.preventDefault();
  var email;
  var senha;

  for(var valor of $(this).serializeArray()){

    if(valor.name ==='email'){
      email = valor.value;
    }
    senha = (valor.name == 'senha') && valor.value;
 }

 $.ajax({
    method: "POST",
    url: "/joe/modal/login.php",
    data: {email,senha},
    success: function(result){
      if(result == 'true'){
        window.location.replace('home.html');
      }       
    }
  });  
});