<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = str_replace(",", ".", $_POST["peso"]);
        $altura = str_replace(",", ".", $_POST["altura"]);
        
        $imc = $peso / ($altura * $altura);
        
        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
        
        if ($imc < 18.5) {
            echo "Situação: Abaixo do peso";
        } elseif ($imc < 24.9) {
            echo "Situação: Peso normal";
        } elseif ($imc < 29.9) {
            echo "Situação: Sobrepeso";
        } elseif ($imc < 34.9) {
            echo "Situação: Obesidade grau I";
        } elseif ($imc < 39.9) {
            echo "Situação: Obesidade grau II";
        } else {
            echo "Situação: Obesidade grau III";
        }
    }
    ?>
</body>
</html>