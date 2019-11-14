<?php
include 'Conexao.php';
class User extends Conexao{
  private $db;

  function __construct() {
    $this->db = Conexao::getInstance();
  }

  function getUsers(){
    $contas = $this->db->prepare("SELECT * FROM usuario WHERE permissao = :permissao");
    $contas->bindValue(":permissao", 'user');
    $contas->execute();

    $dados = array();
    while($ln = $contas->fetch(PDO::FETCH_ASSOC))    {
      $dados[] = array(
        'id' => $ln['id'],
        'nome' => $ln['nome'],
        'email' => $ln['email'],
        'senha' => $ln['senha'],
        'permissao' => $ln['permissao']
      );
    }

    return $dados;
  }

}
?>