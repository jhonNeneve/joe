<?php
    // define('testes', __DIR__);

    // $funcao = $_GET['funcao'];
//     var_dump($_POST);
//     var_dump( $valor);
//     function funcao($oi){
        
//         $verifica = mysqli_query($connect,"SELECT * FROM oi where oioi = 123"); 
//         var_dump(mysqli_fetch_array($verifica));
// }

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