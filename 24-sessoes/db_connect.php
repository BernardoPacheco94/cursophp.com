<?php

$server = "localhost";
$usuario = "root";
$senha = "";
$db_name = "sistemalogin";

$conn = mysqli_connect($server, $usuario, $senha, $db_name);

if(mysqli_connect_error()){
    echo "Falha na conexão com o banco de dados: ".mysqli_connect_error();
}