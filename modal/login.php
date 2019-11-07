<?php
    include("connect.php");
    function oi(){
    $oioi = $_POST['oi'];
    $verifica = mysqli_query($connect,"SELECT * FROM oi where oioi = 123"); 
    var_dump(mysqli_fetch_array($verifica));
}
?>