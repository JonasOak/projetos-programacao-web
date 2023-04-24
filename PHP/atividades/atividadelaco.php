
<?php



$var = 1;
while ($var <= 5) {
    echo "*";
    $varx = $var;
    while ($varx > 1) {
        $varx--;
        echo " *";
    }
    echo "<br>";
    $var++;
}

$misto = array("pão", "queijo", "Presunto", "Manteiga", "Ketchup");
$refris = ["Coca-cola", "Pepsi", "Guaraná", "água", "suco de abóbora"];

var_dump($misto);
echo "<br>";
var_dump($refris);
echo "<br><br><br>";

echo "Eu amo comer " . $misto[0] . " junto com " . $misto[1] . " e " . $refris[3];
echo "<br><br>";



$comida = 0;
$bebida = 4;

for ($varia = 0; $varia <= 4; $varia++) {
    echo $misto[$comida];
    echo " vai bem com " . $refris[$bebida] . "<br>";
    $comida++;
    $bebida--;
}
echo "<br><br>";


$conjuntos = array(
    array("Arroz", "Feijão", "Batatas"),
    array("Leite", "Nescau", "Açúcar"),
    array("Pão", "Queijo", "Presunto")
);

echo $conjuntos[0][0] . "<br>";
echo $conjuntos[1][0] . "<br>";
echo $conjuntos[2][1];

?>
