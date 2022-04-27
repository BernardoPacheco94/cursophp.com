<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
/*
Utilizados para sistemas de login ou carrinhos de compra, etc
*/

if(isset($_POST['entrar'])){
    
}
?>
</head>
<body>
    <h1>LOGIN</h1>
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
        Usuário: <input type="text" name="usuario"><br>
        Senha: <input type="password" name="senha"><br>
        <button name="entrar">Entrar</button>
    </form>
</body>
</html>




