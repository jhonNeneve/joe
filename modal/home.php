<?php
  require '../controller/Conexao.php';
  
    $db = new Conexao;
    $db = $db->getInstance();
    $contas = $db->prepare("SELECT id, titulo, descricao FROM fluxo");

    $contas->execute();

    $dados = array();
    while($ln = $contas->fetch(PDO::FETCH_ASSOC))    {
      $dados[] = array($ln);
    }

    print_r(json_encode($dados));

?>