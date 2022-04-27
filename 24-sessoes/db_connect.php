<?php

$server = "localhost";
$usuario = "root";
$senha = "";
$db_name = "sistemalogin";

$conn = mysqli_connect($server, $usuario, $senha, $db_name);

if(mysqli_connect_error()){
    echo "Falha na conexão: ".mysqli_connect_error();
}