<html>
<head>
    <title>suma 100 numeros</title>
</head>
<body>

<?php
$numero = 15;
$resultado = suma($numero);
echo 'la suma del numero ' . $numero . ' hasta 100 es de ' . $resultado;


function suma($numero)
{
    $resultado = 0;
    $x = $numero;
    $final = $numero + 100;
    for ($x; $x <= $final; $x++) {
        $resultado = $resultado + $x;
    }
    return $resultado;
}

?>
</body>
</html>
