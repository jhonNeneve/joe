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
    url: "../controller/login.php",
    data: {
      fun: 'login',
      email: email,
      senha: senha
    },
    success: function(result){
      console.log(result);
      return;
      if(result != 'false'){
        window.location.replace(result);
      }       
    }
  });  
});