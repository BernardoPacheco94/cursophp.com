<?php 
/* Dados Escalares */

//String

$nome= false;
var_dump($nome);

if(is_string($nome)):
    echo "É uma string";

else:
    echo "Não é uma String";
endif;

echo "<br>";
echo "<hr>";

/* Dados Compostos */

$carros = array("Gol", 1, "monza");
var_dump($carros);


/* Object */

