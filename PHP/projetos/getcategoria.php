<?php
include "../includes/database_projeto.php";
$jhon = $_GET['jonas'];
$consulta = "SELECT * FROM produto WHERE categoria = '{$jhon}'";
$query = mysqli_query($con, $consulta);
$fetch = mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($fetch);
