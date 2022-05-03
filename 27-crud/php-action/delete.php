<?php
session_start();

//Página para criar cliente
require_once 'db_connect.php';//conecta com o banco

if (isset($_POST['btn-deletar'])){//verifica se o botao de deletar foi clicado e envia pelo mysqli_escape_string os parametros
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id='$id";

    if(mysqli_query($connect, $sql)){
        $_SESSION ['mensagem']= "Cliente Excluído!";
        header('Location: ../index.php');
    }else{
        $_SESSION ['mensagem'] = "Erro Excluir Cliente";
        header('Location: ../index.php');
    }
}