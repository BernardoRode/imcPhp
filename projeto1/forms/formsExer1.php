<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/forms/style/styleExer1.css">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="processa_formulario.php">
        <div class="input-box">
            <input type="text" name="nome" placeholder="Nome:" required maxlength="100">
        </div>
        <br>
        <div class="input-box">
            <input type="date" id="data" name="data" placeholder="Data nascimento:">
        </div>
        <br>
        <div class="input-box">
            <input type="number" name="peso" placeholder="peso:"  step="0.1">
        </div>
        <br>
        <div class="input-box">
            <input type="number" name="altura" placeholder="Altura:"  step="0.01" >
        </div>
        <br>
        <div class="input-box">
            <input type="radio" name="sexo" value="masculino" checked /> Masculino<br />
            <input type="radio" name="sexo" value="feminino" /> Feminino<br />
        </div>
        <br>
        <div class="btlogin">
            <input type="submit" name="salvar" value="Salvar" id="salvar">
            <input type="reset" name="limpar" value="Limpar" id="limpar">
        </div>
        <br>
    </form>
</body>

</html>