<?php
/*
Operadores Lógicos
e - && ou and 
ou - || ou or
xor - xor (apenas um pode ser verdadeiro)
negação - ! (Inverte o resultado, declarado no começo da expressão)
*/

$nome = "Jubileu";
$idade = 602;

if (!($nome == "Jubileu") xor ($idade = 602)):
    echo "Verdadeiro";
else:
    echo "Falso";
endif;