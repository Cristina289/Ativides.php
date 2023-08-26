<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Notas</title>
</head>
<body>

<h2>Informe as notas do aluno</h2>

<form action="form_notas.php" method="post">
    Nome do Aluno: <input type="text" name="nome"><br><br>
    Nota 1: <input type="number" name="nota1"><br><br>
    Nota 2: <input type="number" name="nota2"><br><br>
    <input type="submit" value="Calcular Média">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $nota1 = floatval($_POST["nota1"]);
    $nota2 = floatval($_POST["nota2"]);
    
    $media = ($nota1 + $nota2) / 2;
    
    echo "<h2>Resultado:</h2>";
    echo "Aluno: $nome<br>";
    echo "Média: $media<br>";
    
    if ($media >= 7) {
        echo "Situação: Aprovado";
    } elseif ($media >= 4) {
        echo "Situação: Recuperação";
    } else {
        echo "Situação: Reprovado";
    }
}
?>

</body>
</html>