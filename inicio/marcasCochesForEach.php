<html>
<head>
    <title>marcas coches foreach</title>
</head>
<body>

<?php
$coches=['audi','seat','mercedes','volkswagen','bmw','fiat'];
imprimir($coches);
function imprimir($coches){
    echo '<ul>';
    foreach ($coches as $valor){
        echo '<li>';
        echo $valor;
        echo '</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>
