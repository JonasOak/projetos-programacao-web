<?php
$title = "Joguinho";
include '../includes/headerjoguinho.php';
?>

<h1 style="margin-bottom: 1cm; margin-top: 2cm;">Pedra-Papel-Tesoura</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-left: 10cm;">
            <main>
                <form action="jogoresultado.php" method="get">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="select" class="form-label"></label>
                            <select class="form-select" name="escolha">
                                <option value="rock">Pedra</options>
                                <option value="paper">Papel</options>
                                <option value="sciss">Tesoura</options>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin-left: cm; margin-top: 5mm" value="Calcular">Jogar</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php'
?>