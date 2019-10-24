<html>
<head>
    <title>Array Random</title>
</head>
<body>
<?php


if (isset($_GET['numerosAleatorios'])) {
    if (isset($_GET['numeroAdivinar'])) {
        if ($_GET['numeroAdivinar'] == '') {

            echo 'inserta un numero';

        } else {
            $resultado = buscar($_GET['numerosAleatorios'], $_GET['numeroAdivinar']);
            echo '<p>El numero aparece ' . $resultado . ' veces en el array</p>';
        }
    }
} else {
    $arrayRandom = [];

    for ($x = 0; $x < 20; $x++) {
        $numeroAleatorio = random_int(1, 10);
        array_push($arrayRandom, $numeroAleatorio);
    }

    $StringNumerosAleatorios = implode(',', $arrayRandom);

}


function buscar($StringNumerosAleatorios, $numeroAdivinar)
{
    $array = explode(',', $StringNumerosAleatorios);

    $contador = 0;
    foreach ($array as $valor) {
        if ($valor == $numeroAdivinar) {
            $contador++;
        }
    }
    return $contador;
}

?>
<form method="get" action="ArrayRandom.php">
    <?php if (isset($_GET['numerosAleatorios'])) {
        echo '<input type="hidden" name="numerosAleatorios" value="' . $_GET['numerosAleatorios'] . '">';
    } else {
        echo '<input type="hidden" name="numerosAleatorios" value="' . $StringNumerosAleatorios . '">';
    }
    ?>
    <label>introduce tu numero: <input type="number" name="numeroAdivinar"></label>
    <br><br>
    <input type="submit" value="¡Probar suerte!">
</form>
</body>
</html>