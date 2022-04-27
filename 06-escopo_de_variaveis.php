<?php

$nome = "Jubileu";
$a = 1;
$b = 5;
$c = 7;

function exibeNome() {
    /*sem o comando 'global $nome' nao funcionaria, pois a variavel deve ser de escopo globar para ser usada dentro de uma função*/
    global $nome;
    echo $nome;
}

exibeNome();

echo "<hr>";

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();