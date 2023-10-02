<?php

    $hostname = "localhost";
    $bancodedados = "db_services_ti";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli ->connect_errno) {
        echo "falha ao conectar:(". $mysqli->connect_errno . ")". $mysqli->connect_errno;

    }
    else
    echo "conectado ao banco de dados";
    


?>