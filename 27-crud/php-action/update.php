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

if (isset($_POST['btn-editar'])){//verifica se o botao de cadastro foi clicado e envia pelo mysqli_escape_string os parametros
    $nome = clear ($_POST['nome']);
    $sobrenome = clear ($_POST['sobrenome']);
    $email = clear ($_POST['email']);
    $idade = clear ($_POST['idade']);
    $id = clear ($_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION ['mensagem']= "Cadastro Atualizado!";
        header('Location: ../index.php');
    }else{
        $_SESSION ['mensagem'] = "Erro ao atualizar cadstro do cliente";
        header('Location: ../index.php');
    }
}