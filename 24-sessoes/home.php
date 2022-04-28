<?php
    require_once 'db_connect.php';

    session_start();

    if(!isset($_SESSION['logado'])){
        header('Location: index.php');
    }

//capturando dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query ($connect, $sql);
$dados = mysqli_fetch_array($resultado); // aqui estão os dados do resultado do sql
mysqli_close($connect);

if(isset($_POST['btn-sair'])){
    echo 'clicou';
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chegou</title>
</head>
<body>
    <h1>LOGIN REALIZADO BRO</h1>
    <p>Salve salve <strong><em><?php echo $dados ['nome']; ?></em></strong></p>
    <a href="logout.php"><button>Sair</button></a>

    
</body>
</html>