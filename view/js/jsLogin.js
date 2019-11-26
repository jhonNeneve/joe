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
        if(valor.name ==='email' ? email = valor.value : '');        
        senha = (valor.name == 'senha') && valor.value;
    }

<<<<<<< HEAD
 $.ajax({
    method: "POST",
    url: "../controller/login.php",
    data: {
      fun: 'login',
      email: email,
      senha: senha
    },
    success: function(result){
      if(result != 'false'){
        window.location.replace(result);
      }       
    }
  });  
=======
    $.ajax({
        method: "POST",
        url: "../controller/login.php",
        data: {
            fun: 'login',
            email: email,
            senha: senha
        },
        success: function(result){
            return; 
            if(result != 'false' ? window.location.replace(result) : '');   
        }
    });  
>>>>>>> 3a1fe22648d0eda93f252e6e17b5f0205fdf0b32
});