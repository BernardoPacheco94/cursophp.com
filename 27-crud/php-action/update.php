<?php
session_start();

//Página para criar cliente
require_once 'db_connect.php';//conecta com o banco

if (isset($_POST['btn-editar'])){//verifica se o botao de cadastro foi clicado e envia pelo mysqli_escape_string os parametros
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION ['mensagem']= "Cadastro Atualizado!";
        header('Location: ../index.php');
    }else{
        $_SESSION ['mensagem'] = "Erro ao atualizar cadstro do cliente";
        header('Location: ../index.php');
    }
}