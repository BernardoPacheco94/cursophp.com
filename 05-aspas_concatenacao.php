<?php

/* Aspas simples não interpretam as variaveis que estão dentro delas */
$nome = 'Jubileu';

echo 'Meu nome é '.$nome;

echo "<hr>";

/* Aspas duplas interpretam o conteúdo */
echo "Meu nome é $nome";