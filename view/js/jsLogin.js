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