<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

<body style="background-color: #7eb3b3" class="text-center">
    <h1 style="margin-bottom: 15mm; margin-top: 1cm;">Bola mágica</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
                <?php
                $numero = (rand(1, 20));

                if ($numero == 1) {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h3>Com certeza<h3> </div>";
                } elseif ($numero == 2) {
                    echo "<div class='alert alert-dark' role='alert'>
                        <h3>É decididamente isso</h3> </div>";
                } elseif ($numero == 3) {
                    echo "<div class='alert alert-dark' role='alert'>
                     <h3>Sem dúvidas</h3> </div>";
                } elseif ($numero == 4) {
                    echo "<div class='alert alert-dark' role='alert'>
                     <h3>Sim, definitivamente!</h3> </div>";
                } elseif ($numero == 5) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Você pode contar com isso</h3> </div>";
                } elseif ($numero == 6) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Isso parece bom!</h3> </div>";
                } elseif ($numero == 7) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Sim</h3> </div>";
                } elseif ($numero == 8) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>É uma boa perspectiva.</h3> </div>";
                } elseif ($numero == 9) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Não entendi. Pergunte novamente.</h3> </div>";
                } elseif ($numero == 10) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Pergunte sobre isso mais tarde.</h3> </div>";
                } elseif ($numero == 11) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Melhor eu não te contar...</h3> </div>";
                } elseif ($numero == 12) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Não é possível prever agora.</h3> </div>";
                } elseif ($numero == 13) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Concentre-se e pergunte novamente.</h3> </div>";
                } elseif ($numero == 14) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Não vai nessa não fiote.</h3> </div>";
                } elseif ($numero == 15) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Minha resposta é NÃO!</h3> </div>";
                } elseif ($numero == 16) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Cai fora cleitim, isso não é ideia não.</h3> </div>";
                } elseif ($numero == 17) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3> Muito duvidoso.</h3> </div>";
                } elseif ($numero == 18) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Minhas fontes dizem que não.</h3> </div>";
                } elseif ($numero == 19) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Desiste disso mano.</h3> </div>";
                } elseif ($numero == 20) {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3>Só Deus sabe.</h3> </div>";
                }

                echo "<br><a class='btn btn-primary' href='atividade.php' role='button'>Perguntar</a>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>