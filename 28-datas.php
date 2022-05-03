<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('d');
echo "<br>";
echo date('D');
echo "<br>";
echo date('m');
echo "<br>";
echo date ('M');
echo "<br>";
echo date('l');
echo "<br>";
echo date('y');
echo "<br>";
echo date('Y');
echo "<br>";
echo date('d/m/y');
echo date('d/m/y h:i:s');
echo "<br>";
echo date('d/m/y H');
echo "<hr>";

//armazenar data no banco

$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');
echo $datetime.'- datetime';
echo "<hr>";
