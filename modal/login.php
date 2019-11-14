<?php
  $email = $_POST['email'];
  $senha = $_POST['senha'];
//deixar só conexao
	require '../controller/Conexao.php';
    $db = new Conexao;
    $db = $db->getInstance();
    $acesso = $db->prepare("SELECT * FROM usuario WHERE email = :email and senha = :senha");

    $acesso->bindValue(":email", $email);
    $acesso->bindValue(":senha", $senha);
    $acesso->execute();

    if(!empty($acesso->fetch(PDO::FETCH_ASSOC))){
      print_r(json_encode(true));
    }else{
      print_r(json_encode(false));
    }
?>