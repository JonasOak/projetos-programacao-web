<?php
$title = "CRUD - Cadastro";
include '../includes/headerjoguinho.php';
include '../includes/database.php';
#Inserir pessoa
if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $consulta = "INSERT INTO pessoa (`nome`,`telefone`,`email`,`endereco`,`pais`)
    VALUES ('{$_GET['nome']}','{$_GET['telefone']}','{$_GET['email']}','{$_GET['endereco']}','{$_GET['pais']}')";
    #echo $consulta;
    $query = mysqli_query($con, $consulta);
    #Pegar o ID da pessoa
    $id_pessoa = mysqli_insert_id($con);
    #echo $id_pessoa;
    #Sessão para inserir usuário
    $criptografia = base64_encode($_GET['senha']);
    $consulta_usuario = "INSERT INTO usuario (`email`,`senha`,`nivel`,`fk_id_pessoa`,`data`)
    VALUES ('{$_GET['login']}','{$criptografia}','{$_GET['nivel']}','{$id_pessoa}','{$_GET['data']}')";
    $query = mysqli_query($con, $consulta_usuario);
    header("location:usuario_relatorio.php?register=sucesso");
    #echo $consulta_usuario;
}
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';*/
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

                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Dados pessoais</h1>
                            <div class="form-floating" style="margin-bottom: 5mm; margin-top: 1cm;">
                                <input type="text" class="form-control" name="login">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Login</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="password" class="form-control" name="senha">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Senha</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="nivel">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Nível</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="date" class="form-control" name="data">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Data</strong></label>
                            </div>
                            <div class="row" style="margin-bottom: 1cm;">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" href="usuario_relatorio.php">Voltar</a>
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