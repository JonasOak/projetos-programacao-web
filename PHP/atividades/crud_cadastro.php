<?php
$title = "CRUD - Relatório";
include '../includes/headerjoguinho.php';
include '../includes/database.php'; #$con
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';*/
if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $consulta = "INSERT INTO pessoa (`nome`, `telefone`, `email`, `endereco`, `pais`) VALUES ('
    {$_GET['nome']}','{$_GET['telefone']}','{$_GET['email']}','{$_GET['endereco']}','{$_GET['pais']}')";
    # Testes antes de enviar a consulta
    $query = mysqli_query($con, $consulta);
    header("location: crud.php?cadastrar=sucesso");
}
?>

<body class="text-center">

    <main class="form-signin">
        <form action="" method="get">
            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Cadastro de pessoas</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="nome">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="form-control" name="telefone">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Telefone</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="endereco">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Endereço</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="pais">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>País</strong></label>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" href="crud.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" type="submit" value="send" name="cadastrar">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </main>

    <?php
    include '../includes/footer.php'
    ?>