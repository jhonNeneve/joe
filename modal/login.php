<?php
    include("connect.php");

    $email = $_GET["email"];
    $password = $_GET["password"];
    $name = 'Amanda';

mysql_query($connect, "insert into users (name, email, password) values ('$name','$email', '$password')");

>