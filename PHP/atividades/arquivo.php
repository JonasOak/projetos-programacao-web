<?php

    $mespassado = 2549.23;
    $essemes = 1233.98;
    $soma = $mespassado + $essemes;
    $parcela = 11;
    $porcent = 3/100;
    $juros = $soma*$porcent*$parcela;
    $somajuros = $juros/$parcela;
    $parcela2 = $soma/$parcela;
    $num = $somajuros+$parcela2;

    echo "Você tem R$".($mespassado+$essemes). " de dívidas.";
    echo "<br>Parcelando em 11 vezes, você irá pagar R$".($soma/$parcela). " mensalmente.";
    echo "<br>Com juros de R$".$somajuros+$parcela2." ao mês! ";
    var_dump(round($num, 0));
    
?>