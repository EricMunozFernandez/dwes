<html>
<head>
    <title>array</title>
</head>
<body>

<?php
    $animales=['gato','perro','caballo','cerdo'];
    $colores=['rojo','azul','negro','blanco'];
    echo 'hay '.count($animales).' animales'.'<br>';
    echo 'hay '.count($colores).' colores'.'<br>';

    $valor='elefante';
    $animales=añadirAlFinal($animales,$valor);
    echo'<pre>';
    print_r($animales);
    echo '</pre>';

    $color='gris';
    $colores=añadirAlPrincipio($colores,$color);
    echo'<pre>';
    print_r($colores);
    echo '</pre>';

    $fusion=fusionar($animales,$colores);
    echo'<pre>';
    print_r($fusion);
    echo '</pre>';



    function añadirAlFinal($array,$valor){
        array_push($array,$valor);
        return $array;
    }
    function añadirAlPrincipio($array,$valor){
        array_unshift($array,$valor);
        return $array;
    }
    function fusionar($arr1,$arr2){
        return array_merge($arr1,$arr2);
    }

?>
</body>
</html>