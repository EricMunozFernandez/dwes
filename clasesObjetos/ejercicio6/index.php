<?php

if (isset($_GET['numero1']) && isset($_GET['numero2']) && $_GET['numero1'] != '' && $_GET['numero2'] != '') {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $resultado = dividir($numero1, $numero2);

    if ($resultado != '') {
        echo 'la division entre ' . $numero1 . ' y ' . $numero2 . ' es de: ' . $resultado;
    }
}


function dividir($numero1, $numero2)
{
    try {
        if ($numero2 == 0) {
            throw new Exception('el numero dos no puede ser 0');
        } else {
            return $numero1 / $numero2;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Divide el numero uno entre el numero dos</p>
<form method="get" action="index.php">
    <label>numero 1</label>
    <input type="number" name="numero1">
    <label>numero 2</label>
    <input type="number" name="numero2">
    <input type="submit" value="dividir">
</form>
</body>
</html>