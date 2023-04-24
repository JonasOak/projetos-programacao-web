<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

<body style="background-color: #7eb3b3" class="text-center">
    <h1 style="margin-bottom: 15mm; margin-top: 1cm;">Resultado</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
                <?php
                #var_dump($_GET);

                $valor1 = $_GET["valor1"];
                $valor2 = $_GET["valor2"];
                $op = $_GET["op"];

                if ($op == 'adi') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h3> Resultado da adição: <h3>" . ($valor1 + $valor2) . "</div>";
                } else {
                    echo "";
                }
                if ($op == 'sub') {
                    echo "<div class='alert alert-dark' role='alert'>
                    <h3> Resultado da subtração: <h3>" . ($valor1 - $valor2) . "</div>";
                } else {
                    echo "";
                }
                if ($op == 'multi') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h3> Resultado da multiplicação: <h3>" . ($valor1 * $valor2) . "</div>";
                } else {
                    echo "";
                }
                if ($op == 'div') {
                    echo "<div class='alert alert-dark' role='alert'>
                           <h3> Resultado da divisão: <h3>" . ($valor1 / $valor2) . "</div>";
                } else {
                    echo "";
                }

                echo "<br><a class='btn btn-primary' href='calculadoratop.php' role='button'>Calcular novamente</a>";
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>