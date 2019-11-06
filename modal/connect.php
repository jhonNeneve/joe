<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'joe';

    $connect = mysql_connect($host, $user, $pass, $database) or die('Não foi possível conectar');
>