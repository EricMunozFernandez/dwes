<html>
<head>
    <title>Conversor temperatura</title>
</head>
<body>
<?php
isset($_GET["nombre"]) ?
    print '<p><strong>Resultado de la conversion ('
        .$_GET["temperatura"].$_GET['tipo'].'): '.'</strong></p>' : "";

function elegir(){
    $nuevaTemperatura=0;
    if ($_GET['tipo']=='celsius'){
        $nuevaTemperatura=celsiusToFahrenheit($_GET['temperatura']);
    }
    else{
        $nuevaTemperatura=fahrenheitToCelsius($_GET['temperatura']);
    }
    return $nuevaTemperatura;
}

function celsiusToFahrenheit(float $celsius) : float
{
    return $celsius * 1.8 + 32;
}

function fahrenheitToCelsius(float $fahrenheit) : float
{
    return ($fahrenheit - 32) / 1.8;
}
?>
<form method="get" action="ConversorTemperatura.php" onsubmit="elegir()">
    <label>Introduce la temperatura:
        <input type="number" name="temperatura">
    </label>
    <br>
    <label>Introduce la unidad de temperatura introducida:
        <select name="tipo">
            <option name="celsius">Celsius</option>
            <option name="farenheit">Farenheit</option>
        </select>
    </label>
    <br>
    <input type="submit" value="enviar">
</form>
</body>
</html>