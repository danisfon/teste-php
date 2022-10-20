<?php

$usuario = $_COOKIE["usuario"];
$senha = $_COOKIE["senha"];

$con = new mysqli("localhost", "root", "", "vendas");
$sql = "SELECT * FROM clientes WHERE username='$usuario' AND password='$senha'";

$result = $con->query($sql);

if ($result->num_rows != 1) {
    header("Location: erro.php");
    exit(0);
} 
?>