<?php
    require_once 'db_connect.php';

    session_start();
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

    <p>Seja bem vindo <?php echo $_SESSION['id_usuario']; ?></p>
</body>
</html>