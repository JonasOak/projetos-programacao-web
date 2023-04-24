<?php
$title = "CRUD - Deletar";
include '../includes/headerjoguinho.php';
include '../includes/database.php'; #$con
$id_pessoa = $_GET['var'];

if (isset($_GET['del']) and $_GET['del'] == '1') {
    $consulta = "DELETE FROM pessoa WHERE pessoa_id = {$id_pessoa}";
    $query = mysqli_query($con, $consulta);
    header("location: usuario_relatorio.php?delete=sucesso");
    /*echo '<pre>';
    var_dump($consulta);
    echo '</pre>';*/
}

$consulta2 = "SELECT *, pessoa.email, usuario.email as login FROM pessoa join usuario
ON pessoa.pessoa_id = usuario.fk_id_pessoa WHERE pessoa.pessoa_id = {$id_pessoa}";
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

                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Dados pessoais</h1>
                            <div class="form-floating" style="margin-bottom: 5mm; margin-top: 1cm;">
                                <input type="text" class="form-control" name="login" value="<?php echo $result['login'] ?>" disabled>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Login</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="password" class="form-control" name="senha" value="<?php echo $result['senha']
                                                                                                ?>" disabled>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Senha</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="nivel" value="<?php echo $result['nivel'] ?>" disabled>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Nível</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="date" class="form-control" name="data" value="<?php echo $result['data'] ?>" disabled>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Data</strong></label>
                            </div>
                            <input type="hidden" name="var" value="<?php echo $_GET['var']; ?>">
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" href="usuario_relatorio.php">Voltar</a>
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