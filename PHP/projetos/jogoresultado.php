<?php
$title = "Joguinho";
include '../includes/headerjoguinho.php';
//http://localhost/curso/php/projetos/jogo.php
?>
<h1 style="margin-bottom: 15mm; margin-top: 1cm;">Resultado do jogo</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
            <?php
            $computador = (rand(1, 3)); # 1 = pedra, 2 = papel, 3 = tesoura.
            $escolha = $_GET["escolha"];

            if ($escolha == 'rock' and $computador == 1) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu pedra <h4>
                           <h1> Empate <h1>
                           </div>";
            }
            if ($escolha == 'rock' and $computador == 2) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu papel <h4>
                           <h1> Você perdeu! <h1>
                           </div>";
            }
            if ($escolha == 'rock' and $computador == 3) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu tesoura <h4>
                           <h1> Você ganhou! <h1>
                           </div>";
            }
            if ($escolha == 'paper' and $computador == 1) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu pedra <h4>
                           <h1> Você ganhou! <h1>
                           </div>";
            }
            if ($escolha == 'paper' and $computador == 2) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu papel <h4>
                           <h1> Empate <h1>
                           </div>";
            }
            if ($escolha == 'paper' and $computador == 3) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu tesoura <h4>
                           <h1> Você perdeu! <h1>
                           </div>";
            }
            if ($escolha == 'sciss' and $computador == 1) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu pedra <h4>
                           <h1> Você perdeu! <h1>
                           </div>";
            }
            if ($escolha == 'sciss' and $computador == 2) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu papel <h4>
                           <h1> Você ganhou! <h1>
                           </div>";
            }
            if ($escolha == 'sciss' and $computador == 3) {
                echo "<div class='alert alert-dark' role='alert'>
                           <h4> O computador escolheu tesoura <h4>
                           <h1> Empate <h1>
                           </div>";
            }
            echo "<br><a class='btn btn-primary' href='jogo.php' role='button'>Jogar novamente</a>";
            ?>
        </div>
    </div>
</div>
<?php
include '../includes/footer.php'
?>