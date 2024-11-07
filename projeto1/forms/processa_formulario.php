<?php
if (
    isset($_POST["nome"]) &&
    isset($_POST["data"]) &&
    isset($_POST["peso"]) &&
    isset($_POST["altura"]) &&
    isset($_POST["sexo"])
) {
    $nome = ucfirst($_POST["nome"]);
    $data = date($_POST["data"]);
    $peso = $_POST["peso"];
    $ano = date("Y", strtotime($data));
    $altura = $_POST["altura"];
    $sexo = $_POST["sexo"];
    $imc = $peso / pow($altura, 2);
    $idade = 2024 - $ano;
    if ($sexo == "masculino") {
       // echo "Sr. $nome, sua data de nascimento é " . $data . " seu peso é $peso e sua altura é $altura";
       echo "<form>  
       <label for='nome'>Senhor:</label> <br>
       <input type='text' value = '$nome' readonly> <br>
       <label for='idade'>Idade:</label> <br>
       <input type='text' value = '$idade' readonly> <br>
       <label for='peso'> Peso: </label><br>
       <input type='text' value='$peso' readonly> <br>
       <label for='altura'> Altura:</label><br>
       <input type='number' value='$altura' readonly> <br>
       <label for='sexo'> Sexo:</label> <br>
       <input type='text' value='$sexo' readonly> 
       
       </form>";
    } else {
        //echo "Sra. $nome, sua data de nascimento é" . $data . " seu peso é $peso e sua altura é $altura";
        echo "<form>  
       <label for='nome'>Senhora:</label>  <br>
       <input type='text' value = '$nome' readonly> <br>
       <label for='idade'>Idade:</label> <br>
       <input type='text' value = '$idade' readonly> <br>
       <label for='peso'> Peso: </label><br>
       <input type='text' value='$peso' readonly> <br>
       <label for='altura'> Altura:</label><br>
       <input type='number' value='$altura' readonly> <br>
       <label for='sexo'> Sexo:</label> <br>
       <input type='text' value='$sexo' readonly> 
       </form>";
    }
   
}
