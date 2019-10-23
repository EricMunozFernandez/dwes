<html>
<head>
    <title>suma primos</title>
</head>
<body>

<?php
include_once 'funciones.php';

$numero = 15;

$suma = sumar($numero);

echo 'la  suma de los numeros primos es de ' . $suma;


function sumar($numero)
{
    $suma = 0;
    for ($x = $numero; $x > 0; $x--) {
        if (primo($x)) {
            $suma = $suma + $x;
        }
    }
    return $suma;
}


?>
</body>
</html>

