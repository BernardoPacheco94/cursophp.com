<?php
 include 'header.php';
?>

<?php
   echo " <h1>Include e Require</h1>
    <p>Servem para inserir o conteúdo de um arquivo php em outro arquivo pho em execução</p>
    <p> O <strong>include</strong> não interrompe o script caso não localize o arquivo desejado. Já o <strong>require</strong> interrmpe a execução caso o arquivo não seja localizado </p>
    <p> O include/require<strong>_once</strong> serve para que o arquivo seja incluído apenas uma vez, ou seja, ele verifica se o arquivo já foi incluido anteriormente, caso tenha sido, não incluirá novamente</p>.";

?>

<?php
 require 'footer.php';
?>