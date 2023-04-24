<?php
$login = "jonasgabrielsc@gmail.com";
$senha = "amhvbnlzdGF0aW9uMTYwNDIwMDQ=";
$pass = base64_encode($_POST["senha"]);
$email = $_POST["email"];


if ($login == $email) {
    if ($senha == $pass) {
        header("location:../../HTML/projetos/Site_mangas.html");
    } else {
        header("location: formologin.php?senha=erro");
    }
} else {
    header("location: formologin.php?login=erro");
}
