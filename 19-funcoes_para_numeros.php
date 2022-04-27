<?php

$i = 1234.56;

$valor = number_format($i, 2, ",", ".");//Define o formato da variável(valor, casas decimais, separador de unidade, separador de milhar)

echo "O valor em reais é: R$ $valor";
echo "<hr>";

echo round($i);

echo "<hr>";

echo ceil(5.11)."<br>"; // Arredonda os numeros para cima
echo floor (5.9); //Arredonda para baixo
echo "<hr>";

echo rand (1, 98); // números randomicos