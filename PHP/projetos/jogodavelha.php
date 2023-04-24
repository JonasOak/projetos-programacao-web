<?php
$title = "Jogo da velha";
include '../includes/headerjoguinho.php';
foreach ($_GET as $chave => $valor) {
    echo $chave . " " . $valor;

    if ($valor != '') {
        echo "Quadradinho preenchido.";
    }
}
$matriz = [
    1 => [1 => '', 2 => '', 3 => ''],
    2 => [1 => '', 2 => '', 3 => ''],
    3 => [1 => '', 2 => '', 3 => ''],
];
?>

<div class="container">
    <h1 style="margin-top: 1cm;">Bora jogar jogo da velha, minha gente!</h1>
    <div class="row" style="margin-top: 25mm;">
        <div class="col-12">
            <form action="">
                <div class="col-4">
                    <input type="text" name="1-1" style="width: 20px">
                    <input type="text" name="1-2" style="width: 20px">
                    <input type="text" name="1-3" style="width: 20px">
                </div>
                <div class="col-4">
                    <input type="text" name="2-1" style="width: 20px">
                    <input type="text" name="2-2" style="width: 20px">
                    <input type="text" name="2-3" style="width: 20px">
                </div>
                <div class="col-4">
                    <input type="text" name="3-1" style="width: 20px">
                    <input type="text" name="3-2" style="width: 20px">
                    <input type="text" name="3-3" style="width: 20px">
                </div>
                <div class="col-6" style="margin-left: 1mm; margin-top: 3mm;">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php'
?>