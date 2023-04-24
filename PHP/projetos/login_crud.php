<?php
$title = "Página de login";
include '../includes/headerjoguinho.php';
include '../includes/database.php';
session_start();
$login = "SELECT * FROM usuario";
$query = mysqli_query($con, $login);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body style="background-color: #FF7B7B;">
    <div class="container">
        <form action="validar.php" method="post">
            <div class="mb-3 col-md-6" style="margin-left: 1cm; margin-top: 3cm;">
                <div class="row">
                    <div class="col-md-6">
                        <h2><strong>Login</strong></h2>
                        <?php
                        if (isset($_GET['login']) and $_GET['login'] == 'erro') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-top: 5mm; margin-bottom: 1mm;" role="alert">
                                                Email incorreto.
                                            </div>';
                        }
                        if (isset($_GET['senha']) and $_GET['senha'] == 'erro') {
                            echo '<div class="alert alert-dark" role="alert">
                                                Senha incorreta.
                                            </div>';
                        }

                        ?>

                        <h6><strong>________________________________________________________________</strong></h6>
                        <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6" style="margin-left: 1cm;">
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Senha</strong></label>
                        <input type="password" class="form-control" name="senha" rows="3"></input>
                        <button class="w-75 btn btn-primary btn-lg" name="envia" type="submit" style="margin-top: 3mm; margin-left: 9mm;
                             background-color: #B10900; border-color: #000000;">Log-in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
    include '../includes/footer.php'
    ?>