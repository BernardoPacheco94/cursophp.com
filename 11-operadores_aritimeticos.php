<?php
echo "Operadores aritimeticos <br>";
/* 
Operadores
Soma: +
Subtração: -
Divião: /
Resto da divisão (Módulo): %
Exponencial: **
*/

$a = 20;
$b = 3;

$soma = $a+$b;
$subtr = $a-$b;
$divisao = $a/$b;
$modulo = $a%$b;
$mult = $a*$b;
$exp = $a**$b;

echo 'a = 20 e b = 3'."<br>";
echo "soma: ".$soma."<br>";
echo "subtração: ".$subtr."<br>";
echo "divisão: ".$divisao."<br>";
echo "resto da divisão: ".$modulo."<br>";
echo "multiplicação: ".$mult."<br>";
echo "exponencial: ".$exp."<br>";