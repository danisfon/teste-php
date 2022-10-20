<?php

//trim — Retira espaço no início e final de uma string
@$login = trim($_POST["login"]);
@$senha = trim($_POST["senha"]);


//strlen - Retorna o tamanho de uma string
//header — Envia um cabeçalho HTTP bruto
if (strlen($login) == 0 || strlen($senha) == 0) {
    header("Location: erro.php");
    exit(0);
}

$con = new mysqli("localhost", "root", "", "vendas");
$sql = "SELECT * FROM clientes WHERE username='$login' AND password='$senha'";

$result = $con->query($sql);

if ($result->num_rows == 1) {
    setcookie("usuario", "$login"); //guardou no nagevegador o que ele idigtou
    setcookie("senha", "$senha");
    header("Location: primeira.php"); //direcionou para pagina restrita
    exit(0);
} else {
    header("Location: erro.php");
    exit(0);
}

?>