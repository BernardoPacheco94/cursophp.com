<?php
//Constante, identifica um valor unico, não pode ser alterado

define ("NOME", "Jublieu"); // padrão em letra maiuscula
define ("IDADE", 239); // padrão em letra maiuscula


echo 'Nome: '.NOME."<br>".'Idade: '.IDADE;

echo "<hr>";

function exibeNome(){
    echo NOME;
}

exibeNome();


