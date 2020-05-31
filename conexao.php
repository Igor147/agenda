<?php

    $host = "localhost";
    $database = "agenda";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($host, $username, $password, $database) or die("Falha na conexão!");
    $mysqli->set_charset('utf8');
?>