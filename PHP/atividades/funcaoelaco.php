<?php
#funções e laços
# 1- While
# !!!!!!! SEMPRE CRIE UMA CONDIÇÃO DE PARADA
$num = 1;
while ($num <= 20) {
    echo $num . "<br>";
    $num++; # $num = $num + 1
}

$a = 20;
do {
    echo $a, "<br>";
    $a--; # $a = $a - 1
} while ($a > 0);


for ($x = 0; $x < 10; $x++) {
    echo "Careca<br>";
}
