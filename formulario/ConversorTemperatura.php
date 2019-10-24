<html>
<head>
    <title>Conversor temperatura</title>
</head>
<body>
<?php
if(isset($_GET["temperatura"])) {
    if($_GET["temperatura"] != "") {
        $nuevaTemperatura=elegir($_GET['tipo'],$_GET["temperatura"]);
        print '<p><strong>Resultado de la conversion ('.$_GET["temperatura"].' '.$_GET['tipo'].'): '.$nuevaTemperatura.'</strong></p>';
    }
    else {
        print '<p><strong>El campo temperatura está vacío</strong></p>';
    }

}


function elegir($tipo,$temperatura){
    if ($tipo=='celsius'){
        $nuevaTemperatura=celsiusToFahrenheit($temperatura);
    }
    else{
        $nuevaTemperatura=fahrenheitToCelsius($temperatura);
    }
    return $nuevaTemperatura;
}

function celsiusToFahrenheit($celsius)
{
    return $celsius * 1.8 + 32;
}

function fahrenheitToCelsius($fahrenheit)
{
    return ($fahrenheit - 32) / 1.8;
}
?>


<form method="get" action="ConversorTemperatura.php" >
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