<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validações</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            width: 240px;
            margin: auto;
            border-style: 1px solid;
            border: solid 1px;
            padding: 5px;
            border-radius: 5px;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        input {
            margin: 5px;
        }

        button{
            margin: auto;
            padding: 0px 10px;
            font-weight: bold;
        }

        li{
            list-style: inside;
        }



    </style>
</head>

<body>
    <?php
    // VALIDAÇÕES
    //Funções (filter_input - Filter_var)
    //FILTER_VALIDATE_INT
    //FILTER_VALIDATE_EMAIL
    //FILTER_VALIDATE_FLOAT
    //FILTER_VALIDATE_IP
    //FILTER_VALIDATE_URL
        if(isset($_POST['enviar'])){
            $erros = array();
            
            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT) ){
                $erros[]="Idade deve ser um inteiro"; // se a idade não estiver válida, salvo ela no array erros
            }
            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ){
                $erros[]="email incorreto"; 
            }
            if ($nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_INT) ){
                $erros[]="nome inválido"; 
            }
            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP) ){
                $erros[]="ip incorreto"; 
            }
            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL) ){
                $erros[]="não é um link"; 
            }


            if(!empty($erros)){ //se meu array $erros não estiver vazio, faço uma lista com o conteúdo de cada campo que teve erro.
                foreach ($erros as $erro){
                    echo "<li> $erro </li>";
                }
            }else{
                echo "Formulário validado";
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="text" name="email"><br>
        Idade: <input type="text" name="idade"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
<hr/>
    


</body>

</html>