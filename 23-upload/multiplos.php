<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<?php
if (isset($_POST['enviar'])) {
    $formatos = array("png", "jpeg", "gif", "jpg");
    $contador = 0;
    $qtdArquivos = count($_FILES['arquivo']['name']);

    while ($contador < $qtdArquivos) {
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);/*['arquivo'] ['name'] são  indices passados no array do form */

        if (in_array($extensao, $formatos)) {
            $pasta = "arquivos/";
            $temp = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid() . ".$extensao";

            if (move_uploaded_file($temp, $pasta . $novoNome)) {
                echo "Upload Realizado em $pasta$novoNome <br>";
            } else {
                echo "Erro no upload <br>";
            }
        } else {
            echo "Formato $extensao não pode ser salvo <br>";
        }

        $contador++;
    }
}
?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <!-- necessario o enctype para trabalhar com arquivo -->
        <input type="file" name="arquivo[]" multiple>
        <input type="submit" name="enviar">
    </form>

</body>

</html>