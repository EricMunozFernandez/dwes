<html>
<head>
    <title>Cookie usuario</title>
</head>
<body>

<?php
if (isset($_GET['guardar']) && isset($_GET['usuario'])) {
    setcookie('usuario', $_GET['usuario']);
}
if (isset($_GET['borrar'])) {
    setcookie('usuario', null, -1);
}
if (isset($_COOKIE['usuario'])) {
    ?>
    <p>El usuario es <?= $_COOKIE['usuario'] ?></p>
    <?php
} else {
    ?>
    <p>no hay ningun usuario almacenado</p>
    <?php
}
?>
<form action="usuario.php" method="get">
    <label>Introduce el texto que deseas almacenar:<input type="text" name="usuario"></label>
    <input type="submit" name="guardar" value="Guardar">
    <input type="submit" name="borrar" value="borrar">
</form>
</body>
</html>
