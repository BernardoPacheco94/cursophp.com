<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            width: 250px;
            margin: auto;
            border: solid 1px darkgray;
            padding: 10px;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        input {
            margin: 5px auto;
        }

        button {
            display: block;
            margin: auto;
            width: 100px;
        }

    </style>
    <title>Login</title>
    <?php
    /*
Utilizados para sistemas de login ou carrinhos de compra, etc
*/

    require_once 'db_connect.php'; //realiza conexão ao banco

    session_start();


    if (isset($_POST['btn-entrar'])) {
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($login) || empty($senha)){ //se login estiver vazio, vai um erro para o array $erros
            $erros []= "<li>Login ou senha não foi preenchido </li>";
        }else{
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0){
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1){
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION ['logado'] = true;
                    $_SESSION ['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                }else{
                    $erros[]="<li> usuário/senha inválido </li>";
                }
            }else{
                $erros[] = "<li> Usuário inexistente </li>";
            }
        }
    }
    ?>
</head>

<body>
    <h1>LOGIN</h1>

    <?php
        if (!empty($erros)){
            foreach ($erros as $erro){
                echo $erro;
            }
        }
    ?>
    
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
        Usuário: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button name="btn-entrar">Entrar</button>
    </form>
</body>

</html>