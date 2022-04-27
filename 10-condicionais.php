<?php
echo "if - else <br>";

$num = 10;

if ($num > 10) :
    echo "Numero é maior que 10";

elseif ($num < 10) :
    echo "Numero é menor que 10";
else :
    echo "Número é 10";
endif;

echo "<hr>";

//OPERADOR ALTERNÁRO -> ? representa if e : representa else

echo "operador alternário <br>";

$media = 10;
if ($media >= 0 && $media <= 10) :
    echo ($media) ? "Aprovado" : "Reprovado";

else :
    echo $media . " é um valor inválido";
endif;

echo "<hr>";

//SWITCH - CASE
echo "Switch - Case <br>";

$cor = "cuzinho";

switch ($cor):
    case "azul":
        echo "valor da variável: " . $cor;
        break;

    case "verde":
        echo "valor da variável: " . $cor;
        break;

        default: 
        echo "a cor definida na variável não é azul nem verde";
        

endswitch;
