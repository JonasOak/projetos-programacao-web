<?php
$title = "CRUD - Deletar";
include '../includes/headerjoguinho.php';
include '../includes/database.php'; #$con
$id = $_GET['var'];

if (isset($_GET['del']) and $_GET['del'] == '1') {
    $consulta = "DELETE FROM pessoa WHERE pessoa_id = {$id}";
    $query = mysqli_query($con, $consulta);
    header("location: crud.php?del=sucesso");
}
$consulta2 = "SELECT * FROM pessoa WHERE pessoa_id = {$id}";
$query = mysqli_query($con, $consulta2);
$result = mysqli_fetch_assoc(
    $query
);
?>


<body class="text-center">
    <main class="form-signin">
        <form action="" method="get">
            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Você realmente quer deletar estes dados?</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="nome" value="<?php echo $result['nome']; ?>" disabled>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telefone" value="<?php echo $result['telefone']; ?>" disabled>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Telefone</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>" disabled>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="endereco" value="<?php echo $result['endereco']; ?>" disabled>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Endereço</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="pais" value="<?php echo $result['pais']; ?>" disabled>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>País</strong></label>
                            </div>
                            <input type="hidden" name="var" value="<?php echo $_GET['var']; ?>">
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" href="crud.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" type="submit" value="1" name="del">Deletar</button>
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