<?php
$title = "Joguinho";
include '../includes/headerjoguinho.php';
?>

<h1 style="margin-bottom: 1cm; margin-top: 2cm;">Pedra-Papel-Tesoura</h1>
<h5>Jogador 2</h5>
<?php
$escolha_um = ($_POST["escolha_um"]);
?>

<body class="pedrapapeltesoura text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin-left: 10cm;">
                <main>
                    <form action="jokenpodestino.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="select" class="form-label"></label>
                                <select class="form-select" name="escolhadois">
                                    <option value="pedra">Pedra</options>
                                    <option value="papel">Papel</options>
                                    <option value="tesoura">Tesoura</options>
                                </select>
                                <input type="hidden" value="<?php echo $escolha_um; ?>" name="escolha1">
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