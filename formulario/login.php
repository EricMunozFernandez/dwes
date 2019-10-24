<head>
    <title>login</title>
</head>
<body>
<?php

$usuarios=array(
    'user1'=> array(
        'nombre'=>'Ane',
        'apellidos'=>'Lopez',
        'password'=>'123Abcd',
    ),
    'user2'=> array(
        'nombre'=>'Amaia',
        'apellidos'=>'Otsoa',
        'password'=>'456Xyz',
    ),
);
if(isset($_GET['usuario'])&&isset($_GET['password'])){
    $clavesArray=array_keys($usuarios[0]);
    $usuario=false;
    foreach ($clavesArray as $value){
        if ($value==$_GET['usuario']){
            $usuario=true;
        }
    }
    if ($usuario){
        $password=false;
        foreach ($usuarios[0] as $key=>$value){
            if ($key=='password'){
                if ($value==$_GET['password']){
                    $password=true;
                }
            }
        }
        if ($password){
            echo '<p>Bienvenido</p>';
        }else{
                echo '<p>Contraseña erronea</p>';
        }
    }
    else{
        echo '<p>El ususario no existe</p>';
    }
}
?>
<form method="get" action="login.php">
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
