<?php
session_start();

//Página para criar cliente
require_once 'db_connect.php';//conecta com o banco

function clear ($input){//função para evitar input de códigos
    global $connect;//torna o $connect global
    $var = mysqli_escape_string($connect, $input); //passa pelo escape string p evitar sql
    $var = htmlspecialchars($var);//passa pelo specialchats p evitar xss
    return $var;
}

if (isset($_POST['btn-cadastrar'])){//verifica se o botao de cadastro foi clicado e envia pelo mysqli_escape_string os parametros
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear ($_POST['email']);
    $idade = clear ($_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')" ;

    if(mysqli_query($connect, $sql)){
        $_SESSION ['mensagem']= "Cliente cadastrado!";
        header('Location: ../index.php');
    }else{
        $_SESSION ['mensagem'] = "Erro ao cadastrar cliente";
        header('Location: ../index.php');
    }
}