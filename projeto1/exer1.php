<?php
$nome = "Bernardo";
$peso = "100";
$altura = "1.80";
$imc = $peso / pow($altura,2);
echo "Nome: ".$nome."<br>Peso: ".$peso."<br>Altura: ".number_format($altura)."<br>IMC: ".number_format($imc,2);