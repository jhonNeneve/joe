<?php
    define('testes', __DIR__);

    // $funcao = $_GET['funcao'];
    var_dump($_POST);
    var_dump( $valor);
    function funcao($oi){
        
        $verifica = mysqli_query($connect,"SELECT * FROM oi where oioi = 123"); 
        var_dump(mysqli_fetch_array($verifica));
}
?>