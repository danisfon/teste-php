<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Vendas</title>
    <style>
        input {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Faça seu login</h1>
    <form action="acesso.php" method="post">
        <label for="username">Usário:</label>
        <input type="text" name="login" id="usarname" />
        <label for="password">Senhas:</label>
        <input type="password" name="senha" id="password" />
        <input type="submit" value="Acessar" />
    </form>
</body>

</html>