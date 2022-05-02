<?php
//Página para criar cliente
require_once 'db_connect.php';//conecta com o banco

if (isset($_POST['btn-cadastrar'])){//verifica se o botao de cadastro foi clicado e envia pelo mysqli_escape_string os parametros
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')" ;

    if(mysqli_query($connect, $sql)){
        header('Location: ../index.php?sucesso');
    }else{
        header('Location ../index.php?erro');
    }
}