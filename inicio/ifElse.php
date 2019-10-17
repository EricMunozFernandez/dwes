<html>
<head>
    <title>if Else</title>
</head>
<body>

<?php
$numeros=[5,2,9,-10,24];
$posicion=2;
$numero=9;

comparar($numeros,$posicion,$numero);



function comparar($array,$posicion,$valor){
    $numArray=$array[$posicion];
    if($valor>$numArray){
        echo 'el numero '.$valor.' es mayor que '.$numArray;
    }
    elseif($valor<$numArray){
        echo 'el numero '.$valor.' es menor que '.$numArray;
    }
    else{
        echo 'el numero '.$valor.' y '.$numArray.' son identicos';
    }
}
?>
</body>
</html>
