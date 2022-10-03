<?php

    $servername     = "localhost";
    $username       = "root";
    $password       = "root";
    $database       = "lojainformatica";

    $conexao = mysqli_connect($servername,$username,$password,$database);
    mysqli_set_charset($conexao,"utf8");

?>