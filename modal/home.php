<?php
include 'Conexao.php';
class home extends Conexao{
    private $db;

    function __construct() {
        $this->db = Conexao::getInstance();
    }

    function getFlow(){
        $flow = $this->db->prepare("SELECT id, titulo, descricao FROM fluxo");
        $flow->execute();

        $dados = array();
        while($ln = $flow->fetch(PDO::FETCH_ASSOC)) {
            array_push($dados,$ln);
        }
        return $dados;
    }
        
    function deleteFlow($id){
        $flow = $this->db->prepare("DELETE FROM fluxo where id = :id");
        $id = $flow->bindValue(":id", $id);
        return $flow->execute();
    }
}
?>