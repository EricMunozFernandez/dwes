<?php
include_once 'models/Publicacion.php';
$primeraPublicacion = new ejercicio2\models\Publicacion('Juanmari y Pedro', '1945', 'Planeta', 'Las mil maravillas', 'las mil maravillas que el mundo ha conocido');
$segundaPublicacion = new ejercicio2\models\Publicacion('Jaime y Jon', '1364', 'JUMP', 'PHP para maestros', 'cosas y tal sobre php y mas');

$segundaPublicacion->setAutores('pedro');
$segundaPublicacion->setAno('1732');
$segundaPublicacion->setEditorial('Deagostin');
$segundaPublicacion->setTitulo('html wapo');
$segundaPublicacion->setTexto('html thml html html y mas cosas');

if (isset($_GET['escritura']) && isset($_GET['objeto']) && $_GET['escritura'] != '') {
    switch ($_GET['objeto']) {
        case 1:
            $primeraPublicacion->escribir($_GET['escritura']);
            $primeraPublicacion->leer();
            break;
        case 2:
            $segundaPublicacion->escribir($_GET['escritura']);
            $segundaPublicacion->leer();
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="get">
    <label for="texto">Texto a escribir</label>
    <input type="text" for="texto" name="escritura" placeholder="inserta texto"><br>
    <input type="radio" name="objeto" value="1"><label>primeraPublicacion</label><br>
    <input type="radio" name="objeto" value="2"><label>segundaPublicacion</label><br>
    <input type="submit" value="Escribir">
</form>
</body>
</html>
