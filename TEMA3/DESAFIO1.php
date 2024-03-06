<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<body>
    <h2>Soma de Três Valores</h2>
    <form method="post" action="">
        <input type="number" name="v1" placeholder="Digite o primeiro valor" required><br>
        <input type="number" name="v2" placeholder="Digite o segundo valor" required><br>
        <input type="number" name="v3" placeholder="Digite o terceiro valor" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
	//Código aqui !!!
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];
    $v3 = $_POST["v3"];

    $resultado_adicao = $v1 + $v2 +$v3;

    echo "<br>Resultado da Adição: $v1 + $v2 + $v3 = $resultado_adicao <br>";
    
    }
    ?>
</body>
</html>

