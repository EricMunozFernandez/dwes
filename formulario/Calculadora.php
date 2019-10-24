<html>
<head>
    <title>Calculadora</title>
</head>
<body>
<?php
if (isset($_GET['primero']) && isset($_GET['segundo'])) {
    if ($_GET['primero'] == '' || $_GET['segundo'] == '') {
        $resultado = 'introduce un numero en las dos casillas';
    } else {
        switch ($_GET['tipo']) {
            case 'Suma':
                $resultado = sumar($_GET['primero'], $_GET['segundo']);
                break;
            case 'Resta':
                $resultado = restar($_GET['primero'], $_GET['segundo']);
                break;
            case 'Division':
                if ($_GET['segundo'] == 0) {
                    $resultado = 'no se puede dividir entre 0';
                } else {
                    $resultado = dividir($_GET['primero'], $_GET['segundo']);
                }

                break;
            case 'Multiplicacion':
                $resultado = multiplicar($_GET['primero'], $_GET['segundo']);
                break;
            default:
                break;
        }
    }
}

function sumar($numero1, $numero2)
{
    return $resultado = $numero1 + $numero2;
}

function restar($numero1, $numero2)
{
    return $resultado = $numero1 - $numero2;
}

function dividir($numero1, $numero2)
{
    return $resultado = $numero1 / $numero2;
}

function multiplicar($numero1, $numero2)
{
    return $resultado = $numero1 * $numero2;
}

?>
<form method="get" action="Calculadora.php">
    <label><strong>Calculadora</strong></label>
    <br><br>
    <label>Ultimo resultado: <?php echo $resultado; ?></label>
    <br><br>
    <label>Primer numero: <input type="number" name="primero"></label>
    <br><br>
    <label>Segundo numero: <input type="number" name="segundo"></label>
    <br><br>
    <label>Seleccione la operacion deseada:
        <select name="tipo">
            <option name="suma">Suma</option>
            <option name="resta">Resta</option>
            <option name="division">Division</option>
            <option name="multiplicacion">Multiplicacion</option>
        </select>
    </label>
    <br><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>
