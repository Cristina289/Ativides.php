<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular_imc</title>
</head>
<body>
     <h1>Calculadora de IMC</h1>
    <form action="calcular_imc.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="text" name="peso" id="peso" required>
        <br>
        <label for="altura">Altura (m):</label>
        <input type="text" name="altura" id="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>