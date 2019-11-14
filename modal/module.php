<?php
include 'Conexao.php';
class Module extends Conexao{
	private $db;

	function __construct() {
		$this->db = Conexao::getInstance();
	}

	function getModules(){
		$contas = $this->db->prepare("SELECT * FROM modulo");
		$contas->execute();

		$dados = array();
		while($ln = $contas->fetch(PDO::FETCH_ASSOC))    {
			$dados[] = array(
				'id' => $ln['id'],
				'nome' => $ln['nome'],
				'descricao' => $ln['descricao'],
				'usuarios' => $ln['usuarios']
			);
		}

		return $dados;
	}

	function newModule($nome, $descricao, $permitidos){
		$contas = $this->db->prepare("INSERT INTO modulo (nome, descricao, usuarios) VALUES (:nome, :descricao, :usuarios)");
		$contas->bindValue(":nome", $nome);
		$contas->bindValue(":descricao", $descricao);
		$contas->bindValue(":usuarios", $permitidos);
		return $contas->execute();
	}
}

?>