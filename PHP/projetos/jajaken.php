<?php
$title = "Pedra-Papel-Tesoura";
include '../includes/headerjoguinho.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center" style="margin-bottom: 2cm;">Pedra-Papel-Tesoura</h1>
        <button id="rock" class="btn btn-outline-primary" onclick="jajaken('pedra')">PEDRA</button>
        <button id="paper" class="btn btn-outline-primary" onclick="jajaken('papel')">PAPEL</button>
        <button id="sciss" class="btn btn-outline-primary" onclick="jajaken('tesoura')">TESOURA</button>
    </div>
</div>
<script>
    function jajaken(gon) {
        console.log(gon)
        let neferpitou = Math.floor(Math.random() * 3 + 1)
        console.log(neferpitou)
    }

    let valor1 = document.getElementById('pedra')
    let valor2 = document.getElementById('papel')
    let valor3 = document.getElementById('tesoura')

    /*
    1 - Pedra
    2 - Papel
    3 - Tesoura
    */

    if (gon == 'pedra' && neferpitou == 1) {

    }
    if ($gon == 'pedra' && neferpitou == 2) {

    }
    if ($gon == 'pedra' && neferpitou == 3) {

    }
    if ($gon == 'papel' && neferpitou == 1) {

    }
    if ($gon == 'papel' && neferpitou == 2) {

    }
    if ($gon == 'papel' && neferpitou == 3) {

    }
    if ($gon == 'tesoura' && neferpitou == 1) {

    }
    if ($gon == 'tesoura' && neferpitou == 2) {

    }
    if ($gon == 'tesoura' && neferpitou == 3) {

    }
</script>

<?php
include '../includes/footer.php'
?>