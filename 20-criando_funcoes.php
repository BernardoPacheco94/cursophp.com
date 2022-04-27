<?php
function calcularMedia ($nome, $n1, $n2, $n3){
    $media = ($n1+$n2+$n3)/3;
    
    if ($media < 0 || $media > 10){
        echo "Valores de nota inválidos";
    }
    elseif ($media >=7){
        echo "Aluno: $nome -> Média: $media - Aprovado <br>";
    }
    else{
        echo "Aluno: $nome -> Média: $media - Reprovado <br>";
    }
}

calcularMedia("Jubileu", 1, 10, 8);
calcularMedia("Tiringa", 10, 8, 6);
