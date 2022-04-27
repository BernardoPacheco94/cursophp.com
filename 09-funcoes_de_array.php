<?php
// in_array = verifica se existe o valor dentro do array

$nomes = array("Jubileu", "Galo Cego", "Ronaldo", "Lorrany Dekanani");

echo in_array("Jubileu", $nomes); //verifica se o conteúdo está no array
echo "<br>";

if (in_array("Ronaldo", $nomes)):
    echo 'Conteúdo está no array';

else:
    echo 'Conteúdo não está no array';
endif;

echo "<br>";