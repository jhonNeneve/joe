<?php
include 'Conexao.php';
class Flow extends Conexao{
	private $db;

	function __construct() {
		$this->db = Conexao::getInstance();
	}

	function getTitulos(){
		$contas = $this->db->prepare("SELECT titulo FROM fluxo");
		$contas->execute();
		$titulo = array();
		while($ln = $contas->fetch(PDO::FETCH_ASSOC)) {
			$titulo[] = $ln['titulo'];
		}

		return $titulo;
	}

	function newFlow($titulo, $descricao, $modulo, $largura, $altura, $fluxo){
		$contas = $this->db->prepare("INSERT INTO fluxo (titulo, descricao, modulo, largura, altura, fluxo) VALUES (:titulo, :descricao, :modulo, :largura, :altura, :fluxo)");
		$contas->bindValue(":titulo", $titulo);
		$contas->bindValue(":descricao", $descricao);
		$contas->bindValue(":modulo", $modulo);
		$contas->bindValue(":largura", $largura);
		$contas->bindValue(":altura", $altura);
		$contas->bindValue(":fluxo", $fluxo);
		return $contas->execute();
	}

  function editFlow($id, $titulo, $descricao, $modulo, $largura, $altura, $fluxo){
    $contas = $this->db->prepare("UPDATE fluxo SET titulo=:titulo, descricao=:descricao, largura=:largura, altura=:altura, fluxo=:fluxo, modulo=:modulo WHERE id=:id");
    $contas->bindValue(":titulo", $titulo);
    $contas->bindValue(":descricao", $descricao);
    $contas->bindValue(":modulo", $modulo);
    $contas->bindValue(":largura", $largura);
    $contas->bindValue(":altura", $altura);
    $contas->bindValue(":fluxo", $fluxo);
    $contas->bindValue(":id", $id);
    return $contas->execute();
  }

	function getFlow($id){
		$contas = $this->db->prepare("SELECT * FROM fluxo WHERE id = :id");
		$contas->bindValue(":id", $id);
		$contas->execute();

		$fluxo = false;
		while($ln = $contas->fetch(PDO::FETCH_ASSOC))    {
			$fluxo = $ln;
		}

		return $fluxo;
	}

	function deleteModule($id){
	}
}
?>