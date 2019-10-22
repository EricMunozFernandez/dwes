<html>
<head>
    <title>marcas coches do while</title>
</head>
<body>

<?php
    $coches=['audi','seat','mercedes','volkswagen','bmw','fiat'];
    imprimir($coches);
    function imprimir($coches){
        echo '<ul>';
        $x=0;
        do{
            echo '<li>';
            echo $coches[$x];
            echo '</li>';
            $x++;
        }
        while($x<count($coches));
        echo '</ul>';
    }
?>
</body>
</html>
