<?php

    $hostname = "*****";
    $dbname = "****";
    $usuario = "*****";
    $senha = "*****";

    $conexao=mysqli_connect($hostname, $usuario, $senha, $dbname);
    if(!$conexao) {
        die ("Falha: " . mysqli_connect_error());
    };
    ?>