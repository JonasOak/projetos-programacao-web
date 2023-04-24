<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

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
                        #http://localhost/curso/PHP/projetos/formologin.php
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
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
</body>

</html>