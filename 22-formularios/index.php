<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <title>Formularios</title>
</head>
<body>
     <form action="dados_post.php" method="POST">
         Nome: <input type="text" name="nome">
         <br>

         Email:
         <input type="email" name="email">
         <br>
         <button type="submit" >Enviar</button>
     </form>

     <hr>

     <!-- GET Pode ser como mostrado a cima apenas trocando o post por get ou assim: -->
     <a href="dados_get.php?nome=pessoalment&email=susbarfernandolivera@pessualment.com">Enviar Dados</a>

     <hr>
     
         <a href="validacoes.php" target="_blank">
             <button>Validações</button>
        </a>
     

</body>
</html>
