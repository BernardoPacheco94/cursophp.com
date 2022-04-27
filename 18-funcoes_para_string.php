<?php
/*
strtoupper - tudo maiusculo
subtstr - configura exibição de valores
strpad - define uma quantidade de caracteres e/ou implementa valores na string
str_repeat - repetir string
str_len - informa o comprimento de uma string

*/

$nome = "roDriGo oliVeiRa";
$novoNomeUp = strtoupper ($nome);
$novoNomeLow = strtolower($nome);
echo $novoNomeUp."<br>";
echo $novoNomeLow;

echo "<hr>";

$mensagem = "Busquem conhecimentooooo";

echo substr($mensagem, 7,13);

echo "<hr>";

$var = "bagulho";
$novaVar = str_pad($var, 12, "#");
echo $novaVar."<br>";

echo "<hr>";

echo $str = str_repeat("Gremio ", 3);

echo "<hr>";

echo strlen($nome);

echo "<hr>";

