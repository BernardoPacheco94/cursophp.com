<?php
//Arrays
$carros  = array ("Porsche", "Mustang", "Camarro");

print_r($carros);

echo "<hr>";

print_r($carros['1']);
echo "<hr>";


$times = array (1=>"GREMIO", 2=>"Palmeiras", 3=>"Corinthians", 10=>"Vasco");

print_r($times[1]."<br>");
print_r($times[10]."<br>");
echo 'Total de elementos do array: '.count($times);
echo "<hr>";

foreach($times as $time){  // paracada ('variavel times' recebe 'time'. a variavel time receve os valores a cada laço)
    echo $time."<br>";
}
echo"<hr>";

//Array associativo (que nao tem id inteiro)
$cliente = array ("Nome" => "Jubileu", "Idade" => 412, "Altura" => 2.63);

foreach($cliente as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

//Arrays multidimencionais

$times = array(
    "gauchos"=> array("GREMIO", "inter", "Juventude", "Ypiranga"),
    "cariocas" => array("Vasco", "Flamengo", "Fluminense", "Madureira"),
    "mineiros" => array ("Atlético", "Cruzeiro", "América")
);

// print_r($times);



foreach($times as  $indice => $valor){
    
    echo "<br>".$indice."<br>";
    print_r($valor)."<br>";    
}

echo "<hr>";