
<?php
$cont = 1;

while ($cont <= 10){
    echo "Contador é: $cont <br>";
    $cont++;
}
echo "<hr>";


do{
    echo "Contador é: $cont<br>";
    $cont++;
} while($cont <=20);

echo "<hr>";

// For é usado quando já sabemos quantas repetições vamos precisar
for ($i = 1; $i<=10; $i++){
    echo "O contador é: $i <br>";
}

echo "<hr>";

for ($i = 0; $i <= 10; $i++){
    echo "7 x $i = ".($i*7)."<br>";
}

echo "<hr>";

//foreach (para cada) é usado para percorrer arrays.

$estados = array ("RS", "MG", "SC", "SP");

foreach ($estados as $i => $valor):
    echo $i." - ".$valor."<br>";
endforeach;

echo "<hr>";
echo "Fibonacci <br>";

$pft =0;
$f1 =0;
$f2=1;

for ($i=0; $i<=10; $i++){
    $pft = $f1+$f2;
    echo $pft."<br>";

    $f1 = $f2;
    $f2 = $pft;
}

echo "<hr>";
