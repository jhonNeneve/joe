<?php
  require 'Conexao.php';
  
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $db = new Conexao;
  $db = $db->getInstance();
  $stmt = $db->prepare("SELECT * FROM usuario WHERE email = :email and senha = :senha");

  $stmt->bindValue(":email", $email);
  $stmt->bindValue(":senha", /**md5($senha)**/$senha);
  $stmt->execute();

  if(!empty($stmt->fetch(PDO::FETCH_ASSOC))){
    print_r(json_encode(true));
  }else{
    print_r(json_encode(false));
  }
?>