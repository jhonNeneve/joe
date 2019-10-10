$(document).ready(function(){

  $('.carousel').carousel();
  $('.tabs').tabs();
});
    
var openLoginRight = document.querySelector('.h1');
var oi = document.getElementById('cadastroTab');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});
