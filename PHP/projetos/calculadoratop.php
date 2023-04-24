<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

<body class="text-center" style="background-color: #7eb3b3">
    <h1>Calculadora da preguiça</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin-left: 10cm;">
                <main>
                    <form action="destino.php" method="get">

                        <div class="">
                            <label for="valor1"></label>
                            <input type="number" class="form-control" name="valor1" required placeholder="Digite um valor:">
                        </div>

                        <div class="">
                            <label for="valor2"></label>
                            <input type="number" class="form-control" name="valor2" required placeholder="Digite outro valor:">
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="select" class="form-label"></label>
                                <select class="form-select" name="op">
                                    <option value="adi">Adição</options>
                                    <option value="sub">Subtração</options>
                                    <option value="multi">Multiplicação</options>
                                    <option value="div">Divisão</options>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin-left: cm; margin-top: 5mm" value="Calcular">Vamos calcular</button>
                            </div>
                        </div>
                    </form>
                </main>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
            </div>
        </div>
    </div>
</body>

</html>