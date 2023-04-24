<?php
$title = "CRUD - Relatório";
include "../includes/headerjoguinho.php";
include "../includes/database.php"; #$con
$id_pessoa = $_GET['var'];
if (isset($_GET["update"]) and $_GET["update"] == "send") {
    $cript = base64_encode($_GET['senha']);
    $consultar_update = "UPDATE pessoa JOIN usuario ON pessoa.pessoa_id = usuario.fk_id_pessoa SET 
    nome = '{$_GET['nome']}', telefone = '{$_GET['telefone']}', pessoa.email = '{$_GET['email']}', endereco = '{$_GET['endereco']}',
    pais = '{$_GET['pais']}', usuario.email = '{$_GET['login']}', nivel = '{$_GET['nivel']}', senha = '{$cript}',
    data = '{$_GET['data']}' WHERE pessoa_id = {$id_pessoa}";
    $query = mysqli_query($con, $consultar_update);
    header("location: usuario_relatorio.php?update=sucesso");
    /*echo '<pre>';
    var_dump($consultar_update);
    echo '</pre>';*/
}
$consultar = "SELECT *, pessoa.email, usuario.email as login FROM pessoa JOIN usuario 
ON pessoa.pessoa_id = usuario.fk_id_pessoa WHERE pessoa.pessoa_id = {$id_pessoa};";
$query = mysqli_query($con, $consultar);
$resultado = mysqli_fetch_assoc($query);
$cript =  base64_decode($resultado['senha']);
?>

<body class="">
    <main class="form-signin">
        <form action="" method="get">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Cadastro de pessoas</h1>
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome'] ?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telefone" value="<?php echo $resultado['telefone'] ?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Telefone</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" value="<?php echo $resultado['email'] ?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="endereco" value="<?php echo $resultado['endereco'] ?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Endereço</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="pais" value="<?php echo $resultado['pais'] ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>País</strong></label>
                            </div>

                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Dados pessoais</h1>
                            <div class="form-floating" style="margin-bottom: 5mm; margin-top: 1cm;">
                                <input type="text" class="form-control" name="login" value="<?php echo $resultado['login'] ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Login</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="nivel" value="<?php echo $resultado['nivel'] ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Nível</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="password" class="form-control" name="senha" value="<?php echo $cript;
                                                                                                ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Senha</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="date" class="form-control" name="data" value="<?php echo $resultado['data'] ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Data</strong></label>
                            </div>

                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class="row" style="margin-bottom: 1cm;">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" href="usuario_relatorio.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" type="submit" value="send" name="update">Enviar</button>
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