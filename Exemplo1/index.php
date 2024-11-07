<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <form method="post" action="./script.php">
            <label for="produto">Informar o nome: </label><br>
            <input type="text" name="produto"><br>
            <label for="quantidade">Informe a quantidade</label><br>
            <input type="number" name="quantidade"><br>
            <label for="valorunit">Informe o valor unitario? </label><br>
            <input type="number" name="valorunit"><br>
            <input type="submit" value="calcular">
        </form>
    </h1>
</body>

</html>