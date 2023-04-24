<?php
$title = "Joguinho";
include '../includes/headerjoguinho.php';
?>

<body class="pedrapapeltesoura text-center">
    <h1 style="margin-bottom: 1cm; margin-top: 2cm;">Pedra-Papel-Tesoura</h1>
    <h5>Jogador 1</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin-left: 10cm;">
                <main>
                    <form action="jokenpo2.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="select" class="form-label"></label>
                                <select class="form-select" name="escolha_um">
                                    <option value="pedra">Pedra</options>
                                    <option value="papel">Papel</options>
                                    <option value="tesoura">Tesoura</options>
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