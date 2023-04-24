<?php
$title = "Teste - Ajax";
include '../includes/headerjoguinho.php';
?>

<body class="jogodavelha text-center" style="margin-top: 5cm;">
    <div class="container">
        <div class="row justify-content-center">
            <h2 id="clique">Boa tarde.</h2>
            <div class="col-6">
                <button class="w-100 btn btn-lg btn-primary" style="margin-top: 1cm;" onclick="clock()">Não clique em mim</button>
            </div>
        </div>
    </div>
    <script>
        setInterval(tempo, 1000)
        let segundo = 0
        let minuto = 0
        let hora = 0
        let time = ""

        function tempo() {
            if (time != "") {
                let segment = time.split(':')
                segundo = segment[2]
                minuto = segment[1]
                hora = segment[0]
            }
            segundo++
            if (segundo == 60) {
                segundo = 0
                minuto++
            }
            if (minuto == 60) {
                minuto = 0
                hora++
            }
            if (hora == 24) {
                segundo = 0
                minuto = 0
                hora = 0
            }
            document.getElementById("clique").innerHTML = ("0" + hora).slice(-2) + ":" + ("0" + minuto).slice(-2) + ":" +
                ("0" + segundo).slice(-2);
        }

        function clock() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("clique").innerHTML = this.responseText
                time = this.responseText
            }
            xhttp.open("GET", "back.php");
            xhttp.send();
        }
    </script>

    <?php
    include '../includes/footer.php'
    ?>