<?php
/*
$GLOBALS -> Usado quando preciso pegar variávei fora de uma função por exemplo.  Transforma as váriaveis locais em globais
$_SERVER -> Informações sobre cabeçalhos, indices, servidor, endereços, portas...
$_REQUEST
$_POST -> Coleta dados de formularios
$_GET -> Coleta dados de fomulários
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

$x = 10;
$y = 5;

function soma (){
    echo $GLOBALS['x'] + $GLOBALS ['y'];  //sem usar o globals não seria possivel acessar as variaveis.
}

soma ();

echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";

echo "<hr>";
