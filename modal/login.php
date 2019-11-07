<?php
    define('testes', __DIR__);
    function oi($oi){
        
        $verifica = mysqli_query($connect,"SELECT * FROM oi where oioi = 123"); 
        var_dump(mysqli_fetch_array($verifica));
}
?>