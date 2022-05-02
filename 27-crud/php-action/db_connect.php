<?php
//Realiza a conexão com o banco
$server = 'localhost';
$usuario = 'root';
$senha = '';
$db_name = 'crud';

$connect = mysqli_connect($server, $usuario, $senha, $db_name);
mysqli_set_charset($connect, 'utf-8');

if(mysqli_connect_error()){//verifica se há erros na conexão
    echo "Sem conexão ao banco de dados: ".mysqli_connect_error();
}