<html>
<head>
    <title>grupos musica foreach</title>
</head>
<body>

<?php
$grupos=['acdc','metalica','beatles','maddona','freddy','elvis','guns and roses','pantera'];
imprimir($grupos);
function imprimir($grupos){
    echo '<ul>';
    foreach ($grupos as $valor){
        echo '<li>';
        echo $valor;
        echo '</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>
