<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Deixe seu Feedback</h1>

    <!-- Começo do formulario -->
    <form method="POST" action="#">
        <label for="mensagem">Sua Mensagem: </label><br>
        <textarea name="mensagem" id="mensagem" rows="4" cols="50" placeholder="Escreva algo: "></textarea>
        <br>
        <input type="submit" value="enviar">
    </form>
    <h2>Seu Feedback</h2>
    <!-- Começo do PHP -->
    <?php
    // Verificar se o form foi enviado e se o campo "Mensagem não esta vazio"
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["mensagem"])) {
        //exibe a mesagem enviada
        $mensagem = htmlspecialchars($_POST["mensagem"]);
        echo "<p><strong> Voce escreveu: </strong> $mensagem </p>";
    } else {
        echo "<p>Enviar uma mensagem usando formulario acima!</p>";
    } ?>
</body>

</html>