<?php
$title = "Joguinho";
include '../includes/headerjoguinho.php';
//http://localhost/curso/php/projetos/jokenpo1.php
?>

<body class="pedrapapeltesoura text-center">
    <h1 style="margin-bottom: 15mm; margin-top: 1cm;">Resultado do jogo</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
                <?php
                $escolha_um = ($_POST["escolha1"]);
                $escolhadois = ($_POST["escolhadois"]);


                if ($escolha_um == $escolhadois) {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h4> O jogador 1 escolheu {$escolha_um} <h4>
                           <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                           <h1> Empate <h1>
                           </div>";
                }
                if ($escolha_um == 'pedra' and $escolhadois == 'papel') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h4> O jogador 1 escolheu {$escolha_um} <h4>
                           <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                           <h1> O jogador 2 venceu! <h1>
                           </div>";
                }
                if ($escolha_um == 'pedra' and $escolhadois == 'tesoura') {
                    echo "<div class='alert alert-dark' role='alert'>
                            <h4> O jogador 1 escolheu {$escolha_um} <h4>
                            <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                            <h1> O jogador 1 venceu! <h1>
                           </div>";
                }
                if ($escolha_um == 'papel' and $escolhadois == 'pedra') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h4> O jogador 1 escolheu {$escolha_um} <h4>
                           <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                           <h1> O jogador 1 venceu! <h1>
                           </div>";
                }
                if ($escolha_um == 'papel' and $escolhadois == 'tesoura') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h4> O jogador 1 escolheu {$escolha_um} <h4>
                           <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                           <h1> O jogador 2 venceu! <h1>
                           </div>";
                }
                if ($escolha_um == 'tesoura' and $escolhadois == 'pedra') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h4> O jogador 1 escolheu {$escolha_um} <h4>
                           <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                           <h1> O jogador 2 venceu! <h1>
                           </div>";
                }
                if ($escolha_um == 'tesoura' and $escolhadois == 'papel') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h4> O jogador 1 escolheu {$escolha_um} <h4>
                           <h4> e o jogador 2 escolheu {$escolhadois} <h4>
                           <h1> O jogador 1 venceu! <h1>
                           </div>";
                }
                echo "<br><a class='btn btn-primary' href='jokenpo1.php' role='button'>Jogar novamente</a>";
                ?>
            </div>
        </div>
    </div>
    <?php
    include '../includes/footer.php'
    ?>