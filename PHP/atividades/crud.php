<?php
session_start();
if (isset($_SESSION['nivel']) and $_SESSION['nivel'] > 1) {
} else {
    echo "Você não tem acesso.";
    die();
}
$title = "CRUD - Relatório";
include '../includes/headerjoguinho.php';
include '../includes/database.php';
$pesquisa = '';
if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
    $pesquisa = $_GET['buscar'];
}
$consulta = "SELECT * FROM pessoa WHERE (pessoa.endereco) LIKE '%{$pesquisa}%' 
OR (pessoa.nome) LIKE '%{$pesquisa}%' OR (pessoa.email) LIKE '%{$pesquisa}%'
OR (pessoa.pais) LIKE '%{$pesquisa}%'
";
$query = mysqli_query($con, $consulta);
$result = mysqli_fetch_all(
    $query,
    MYSQLI_ASSOC
);
/*echo '<pre>';
var_dump($result);
echo '</pre>';*/
?>

<body class="tabela">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h1 style="margin-bottom: 1cm; margin-top: 1cm;" class="text-center">Tabela informações pessoais</h1>
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
                        <a class="btn mb-3 btn-success float-start" href="crud_cadastro.php">Cadastrar</a>
                    </div>
                    <div class="col-4">
                        <a class="btn mb-3 btn-success float-start" href="usuario_relatorio.php">Acessar informações do usuário</a>
                    </div>
                    <div class="col-6">
                        <?php
                        if (isset($_GET['del']) and $_GET['del'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>Os dados foram deletados com sucesso!</strong>
                                    </div>';
                        }
                        if (isset($_GET['submit']) and $_GET['submit'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>Os dados foram atualizados com sucesso!</strong>
                                </div>';
                        }
                        if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'sucesso') {
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
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">País</th>
                            <th scope="col">Atualizar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $pessoa) {
                            echo "<tr>
                            <th scope='row'>{$pessoa['pessoa_id']}</th>
                            <td>{$pessoa['nome']}</td>
                            <td>{$pessoa['telefone']}</td>
                            <td>{$pessoa['email']}</td>
                            <td>{$pessoa['endereco']}</td>
                            <td>{$pessoa['pais']}</td>
                            <td><a class='btn btn-warning' href='crud_update.php?var={$pessoa['pessoa_id']}'>Atualizar</a></td>
                            <td><a class='btn btn-danger' href='crud_delete.php?var={$pessoa['pessoa_id']}'>Deletar</a></td>
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