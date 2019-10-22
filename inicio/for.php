<html>
<head>
    <title>for</title>
</head>
<body>

<?php
    $paises=['brasil','portugal','islandia','mexico','filipinas','marruecos'];
    $pais='brasil';
    $posicion=buscarPais($paises,$pais);
    echo 'la posicion de '.$pais.' es '.$posicion;

    function buscarPais($paises,$pais){

        $posicion=array_search($pais,$paises);
        if ($posicion===false){
            $posicion=-1;
        }
        return $posicion;
    }
?>
</body>
</html>

