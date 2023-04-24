<?php
$title = "Padrão";
include '../includes/header.php';
?>

<?php
$vetor = [
    "Ciara Marks" => [
        "telefone" => "1-528-794-2434",
        "email" => "metus@aol.com",
        "address" => "673 Dui. Rd.",
        "country" => "France"
    ],
    "Hilda Nash" => [
        "telefone" => "1-447-365-6860",
        "email" => "turpis.aliquam.adipiscing@google.net",
        "address" => "Ap #446-9446 Pharetra, St.",
        "country" => "United States"
    ],
    "Hilda Rowe" => [
        "telefone" => "1-417-831-6857",
        "email" => "tincidunt.congue.turpis@protonmail.couk",
        "address" => "2359 Ornare Av.",
        "country" => "France"
    ],
    "Cooper Soto" => [
        "telefone" => "(486) 551-8263",
        "email" => "nunc.ut@google.org",
        "address" => "673 In Rd.",
        "country" => "Colombia"
    ],
    "Alexander Conley" => [
        "telefone" => "1-172-568-2251",
        "email" => "a.odio.semper@outlook.net",
        "address" => "P.O. Box 776, 4882 Hendrerit Av.",
        "country" => "Belgium"
    ],
    "Quon Olson" => [
        "telefone" => "(798) 313-6546",
        "email" => "dolor.vitae@protonmail.net",
        "address" => "871-1507 Donec Road",
        "country" => "Pakistan"
    ],
    "Burke Villarreal" => [
        "telefone" => "(999) 715-2557",
        "email" => "eget.nisi.dictum@aol.ca",
        "address" => "1139 Euismod St.",
        "country" => "Chile"
    ],
    "Adena Johns" => [
        "telefone" => "(464) 394-8748",
        "email" => "hendrerit.consectetuer@hotmail.org",
        "address" => "Ap #641-677 Auctor Ave",
        "country" => "Canada"
    ],
    "Linda Gordon" => [
        "telefone" => "(863) 147-3846",
        "email" => "malesuada@outlook.com",
        "address" => "5813 Quam St.",
        "country" => "Norway"
    ],
    "Hedwig Cline" => [
        "telefone" => "(284) 318-2575",
        "email" => "luctus.felis@outlook.net",
        "address" => "6893 Proin Ave",
        "country" => "South Africa"
    ]

];

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="margin-bottom: 1cm; margin-top: 1cm;">Death Note</h1>
            <table class="table table-striped" style="box-shadow: 10px 10px 50px #D30000, 10px 10px 10px #9644C2;">
                <thead class="table table-dark table-striped">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">End.</th>
                        <th scope="col">País</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($vetor as $person => $value) {
                        echo "
                        <tr>
                            <td>{$person}</td>
                            <td>{$value['telefone']}</td>
                            <td>{$value['email']}</td>
                            <td>{$value['address']}</td>
                            <td>{$value['country']}</td>
                        </try>";
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