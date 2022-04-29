<?php

$server = 'localhost';
$usuario = 'root';
$senha = '';
$db_name = 'crud';

$connect = mysqli_connect($server, $usuario, $senha, $db_name);

if(mysqli_connect_error()){
    echo "Sem conexão ao banco de dados: ".mysqli_connect_error();
}