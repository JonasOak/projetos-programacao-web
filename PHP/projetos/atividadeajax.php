<?php
# BY - JONAS
$title = "Cadastro - Alimento";
include "../includes/headerjoguinho.php";
include '../includes/database_projeto.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf_a = "INSERT INTO info_alimento (`estoque`,`preco`,`embalagem`,`peso`,`sabor`,`fk_id_alimento`)
    VALUES ('{$_GET['estoque']}','{$_GET['preco']}','{$_GET['embalagem']}', 
    '{$_GET['peso']}','{$_GET['sabor']}',{$_GET['id_produto']})";
    #echo $inf;
    $query = mysqli_query($con, $inf_a);
    header("location: info_produto.php?cadastrar=sucesso");
}
$inf_a2 = "SELECT DISTINCT categoria FROM `produto`";
$query = mysqli_query($con, $inf_a2);
$resultado2 = mysqli_fetch_all($query, MYSQLI_ASSOC)
?>

<body class="tabela text-center">
    <main class="form-signin">
        <form action="" method="get">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Informações</h1>
                            <div class="form-floating" style="margin-top: 1cm;">
                                <label for="select" class="form-label"></label>
                                <select id="option" class="form-select" name="id_produto" required="">
                                    <option>Escolha a categoria...</option>
                                    <?php
                                    foreach ($resultado2 as $categoria) {
                                        echo "
                                                <option value='{$categoria['categoria']}'>{$categoria['categoria']}</option>
                                                ";
                                    }
                                    ?>
                                    <div class="invalid-feedback">
                                        Por favor, selecione um produto válido.
                                    </div>
                                </select>
                            </div>
                            <div class="form-floating">
                                <p type="text" class="form-control" id="texto" style="margin-bottom:0px;"></p>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong></strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="estoque">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Estoque</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="preco">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Preço</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="embalagem">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Embalagem</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="peso">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Peso</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="sabor">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Sabor</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" href="info_produto.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" type="submit" value="send" name="cadastrar">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </main>
    <script type="text/javascript">
        let option = document.getElementById('option')
        let texto = document.getElementById('texto')
        option.onchange = function() {
            console.log(option.value)
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let jonas = JSON.parse(this.responseText)
                    console.log(jonas)
                    console.log(jonas[0].nome_produto)
                    texto.innerHTML += "<div class='form-floating'>" + jonas[0].nome_produto + "</div>";
                }
            };
            xmlhttp.open("GET", "getcategoria.php?jonas=" + option.value);
            xmlhttp.send();
        }
    </script>
    <?php
    include "../includes/footer.php";
    ?>