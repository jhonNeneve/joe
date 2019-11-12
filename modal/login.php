<?php
	print_r($_POST['texto']);
	die;
	require '../controller/Conexao.php';
    $db = new Conexao;
    $db = $db->getInstance();
    $contas = $db->prepare("SELECT * FROM oi WHERE oioi = :num");

    $contas->bindValue(":num", '123');
    $contas->execute();

    $dados = array();
    while($ln = $contas->fetch(PDO::FETCH_ASSOC))    {
      $dados[] = array($ln['oioi']);
    }

    print_r($dados);

?>