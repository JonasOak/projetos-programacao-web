<?php
$title = "CRUD - Relatório";
include "../includes/headerjoguinho.php";
include "../includes/database.php"; #$con
$id = $_GET['var'];
/*echo "<pre>";
var_dump($_GET);
echo "</pre>";*/

if (isset($_GET["submit"]) and $_GET["submit"] == "send") {
    $consulta = "UPDATE pessoa SET nome = '{$_GET["nome"]}', telefone = '{$_GET["telefone"]}', email = '{$_GET["email"]}', 
    endereco = '{$_GET["endereco"]}', pais = '{$_GET["pais"]}' WHERE pessoa_id = {$id}";

    $query = mysqli_query($con, $consulta);
    #echo $consulta;
    header("location: crud.php?submit=sucesso");
}
$consulta2 = 'SELECT * FROM pessoa WHERE pessoa_id = ' . $id;
$query = mysqli_query($con, $consulta2);
$result = mysqli_fetch_assoc( # Imprime apenas uma pessoa.
    $query
);
#echo $consulta2;
?>


<body class='text-center'>
    <main class='form-signin'>
        <form action='' method='get'>
            <h1 class='h3 mb-3 fw-normal' style='margin-top: 1cm;'>Atualizar dados</h1>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-6'>
                        <div class='col-12'>
                            <div class='form-floating' style='margin-top: 1cm;'>
                                <input type='text' class='form-control' name='nome' value='<?php echo $result["nome"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Nome</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='telefone' value='<?php echo $result["telefone"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Telefone</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='email' class='form-control' name='email' value='<?php echo $result["email"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Email</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='endereco' value='<?php echo $result["endereco"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Endereço</strong></label>
                            </div>
                            <div class='form-floating' style='margin-bottom: 5mm;'>
                                <input type='text' class='form-control' name='pais' value='<?php echo $result["pais"]; ?>'>
                                <label for='exampleFormControlTextarea1' class='form-label'><strong>País</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class='row'>
                                <div class='col-6'>
                                    <a class='w-100 btn btn-lg btn-primary' href='crud.php'>Voltar</a>
                                </div>
                                <div class='col-6'>
                                    <button class='w-100 btn btn-lg btn-primary' type='submit' value='send' name='submit'>Enviar</button>
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