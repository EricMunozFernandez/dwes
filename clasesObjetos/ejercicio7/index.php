<?php


if (isset($_GET['lado']) && $_GET['lado'] != '') {
    $lado = $_GET['lado'];

    $resultado = area($lado);
    if ($resultado != '') {
        echo 'el area del cuadrado es de: ' . $resultado;
    }
}


function area($lado)
{
    try {
        if ($lado < 0) {
            throw new Exception('el lado no puede ser menor que 0');
        } else {
            return $lado * $lado;
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
<p>calcula el area del cuadrado</p>
<form method="get" action="index.php">
    <label>lado</label>
    <input type="number" name="lado">
    <input type="submit" value="area">
</form>
</body>
</html>
