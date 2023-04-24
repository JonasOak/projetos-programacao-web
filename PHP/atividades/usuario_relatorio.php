<?php
$title = "CRUD - Relatório";
include '../includes/headerjoguinho.php';
include '../includes/database.php';
$pesquisa = '';
if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
    $pesquisa = $_GET['buscar'];
}
$consulta = "SELECT pessoa_id, nome, pessoa.email, endereco, usuario.email as login, nivel, telefone, pais, senha, data
FROM pessoa JOIN usuario ON pessoa_id = fk_id_pessoa WHERE (pessoa.nome) LIKE '%{$pesquisa}%' OR (pessoa.email) LIKE '%{$pesquisa}%'
OR (pessoa.endereco) LIKE '%{$pesquisa}%'
";
$query = mysqli_query($con, $consulta);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

/*echo '<pre>';
var_dump($result);
echo '</pre>';*/
#echo $consulta;
?>

<body class="tabela">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h1 style="margin-bottom: 1cm; margin-top: 1cm;" class="text-center">Informações dos usuários</h1>
                    <form action="">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="buscar" class="form-control" style="margin-bottom: 1cm;">
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="submit" value="buscar" class="btn btn-dark">
                                </div>
                                <div class="col-5">
                                    <?php
                                    if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
                                        echo '<div class="alert alert-dark" style="padding-top: 5px;
                                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                                    <strong>A pesquisa foi realizada com sucesso!</strong>
                                            </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-2">
                        <a class="btn mb-3 btn-success float-start" href="usuario_cadastro.php">Cadastrar</a>
                    </div>
                    <div class="col-4">
                        <a class="btn mb-3 btn-success float-start" href="crud.php">Acessar banco de dados</a>
                    </div>
                    <div class="col-6">
                        <?php
                        if (isset($_GET['delete']) and $_GET['delete'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>Os dados foram deletados com sucesso!</strong>
                                    </div>';
                        }
                        if (isset($_GET['update']) and $_GET['update'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>Os dados foram atualizados com sucesso!</strong>
                                </div>';
                        }
                        if (isset($_GET['register']) and $_GET['register'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>O cadastro foi realizado com sucesso!</strong>
                                    </div>';
                        }
                        #echo var_dump((isset($_GET["submit == sucesso"])));
                        ?>
                    </div>
                </div>
                <table class="table table-dark table-hover" style="box-shadow: 10px 10px 50px #D30000, 10px 10px 10px #9644C2;">
                    <thead class="table table-dark table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Login</th>
                            <th scope="col">Nível</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Data</th>
                            <th scope="col">Atualizar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $dados) {
                            echo "<tr>
                            <th scope='row'>{$dados['pessoa_id']}</th>
                            <td>{$dados['nome']}</td>
                            <td>{$dados['login']}</td>
                            <td>{$dados['nivel']}</td>
                            <td>{$dados['senha']}</td>
                            <td>{$dados['data']}</td>
                            <td><a class='btn btn-warning' href='usuario_update.php?var={$dados['pessoa_id']}'>Atualizar</a></td>
                            <td><a class='btn btn-danger' href='usuario_delete.php?var={$dados['pessoa_id']}'>Deletar</a></td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include '../includes/footer.php'
    ?>