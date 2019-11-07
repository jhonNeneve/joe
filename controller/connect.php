<?php
    $server = 'localhost';
    $database = 'test';
    $user = 'root';
    $pass = '';

    $connect = mysqli_connect($server, $user, '', $database);
    $db = mysqli_select_db($connect, $database);
?>
