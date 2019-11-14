<?php
  require 'Conexao.php';

    $db = new Conexao;
    $db = $db->getInstance();
    $stmt = $db->prepare("SELECT id, titulo, descricao FROM fluxo");

    $stmt->execute();

    $dados = array();
    while($ln = $stmt->fetch(PDO::FETCH_ASSOC)) {
      array_push($dados,$ln);
    }
    print_r(json_encode($dados));

?>