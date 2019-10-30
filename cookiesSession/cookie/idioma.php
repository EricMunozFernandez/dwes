<html>
<head>
    <title>Cookie usuario</title>
</head>
<body>

<?php
if (isset($_GET['idioma'])) {
    if ($_GET['idioma'] == 'euskera') {
        setcookie('idioma', 'euskera', time() + 60);
    }
    if ($_GET['idioma'] == 'castellano') {
        setcookie('idioma', 'castellano', time() + 60);
    }
}
if (isset($_COOKIE['idioma'])) {
    ?>
    <p>El usuario es <?= $_COOKIE['idioma'] ?></p>
    <?php
} else {
    ?>
    <p>no hay ningun idioma seleccionado</p>
    <?php
}
?>
<form action="idioma.php" method="get">
    <label>Elige tu idioma</label>
    <select name="idioma">
        <option value="" selected></option>
        <option value="euskera">Euskera</option>
        <option value="castellano">Castellano</option>
    </select>
    <input type="submit" value="Guardar">
</form>
</body>
</html>
