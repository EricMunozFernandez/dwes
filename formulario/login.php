<head>
    <title>login</title>
</head>
<body>
<?php

$usuarios = array(
    'user1' => array(
        'nombre' => 'Ane',
        'apellidos' => 'Lopez',
        'password' => '123Abcd',
    ),
    'user2' => array(
        'nombre' => 'Amaia',
        'apellidos' => 'Otsoa',
        'password' => '456Xyz',
    ),
);
if (isset($_GET['usuario']) && isset($_GET['password'])) {
    $clavesArray = array_keys($usuarios);
    $isUsuario = false;
    foreach ($clavesArray as $value) {
        if ($value == $_GET['usuario']) {
            $isUsuario = true;
        }
    }
    if ($isUsuario) {
        $isPassword = false;
        foreach ($usuarios[$_GET['usuario']] as $key => $value) {
            if ($key == 'password') {
                if ($value == $_GET['password']) {
                    $isPassword = true;
                }
            }
        }
        if ($isPassword) {
            $nombre = $usuarios[$_GET['usuario']]['nombre'];
            $apellido = $usuarios[$_GET['usuario']]['apellidos'];
            echo '<p>Bienvenid@ ' . $nombre . ' ' . $apellido . '</p>';
            echo '<style>#formulario{display:none;}</style>';
        } else {
            echo '<p>Contraseña erronea</p>';
        }
    } else {
        echo '<p>El ususario no existe</p>';
    }
}
?>
<form method="get" action="login.php" id="formulario">
    <label>introduce tu usuario:
        <input type="text" name="usuario" required></label>
    <br><br>
    <label>introduce tu contraseña:
        <input type="password" name="password" required></label>
    <br><br>
    <input type="submit" value="¡Probar suerte!">
</form>
</body>
</html>
