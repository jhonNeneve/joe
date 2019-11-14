<?php
  require '../controller/Conexao.php';
  //deixar só conexao
    $db = new Conexao;
    $db = $db->getInstance();
    $card = $db->prepare("SELECT id, titulo, descricao FROM fluxo");

    $card->execute();

    $dados = array();
    while($ln = $card->fetch(PDO::FETCH_ASSOC)) {
      array_push($dados,$ln);
    }
    print_r(json_encode($dados));

?>