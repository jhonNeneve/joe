<?php
include 'Conexao.php';
class Login extends Conexao{
  private $db;

  function __construct() {
    $this->db = Conexao::getInstance();
  }

  function login($email, $senha){
    $stmt = $this->db->prepare("SELECT * FROM usuario WHERE email = :email and senha = :senha");

    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":senha", md5($senha)/*$senha*/);
    $stmt->execute();

    $dados = false;
    while($ln = $stmt->fetch(PDO::FETCH_ASSOC))    {
      $dados = $ln;
    }
    return $dados;
  }
}

?>