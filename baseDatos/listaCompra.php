<html>
<head>
    <title>compra</title>
</head>
<body>
<?php

function connect($dbname, $host, $user, $pass)
{
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function consultaTodos($dbh)
{
    $stmt = $dbh->prepare("select * from lista;");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
}

function insert($dbh, $data)
{
    $stmt = $dbh->prepare('INSERT INTO lista(nombre) VALUES(:nombre);');
    $stmt->execute($data);

}

function delete($dbh, $data)
{
    $stmt = $dbh->prepare('DELETE FROM lista WHERE id=:id;');
    $stmt->execute($data);
}

function close($dbh)
{
    $dbh = null;
}

function buscar()
{
    $dbh = connect('listaCompra', 'localhost', 'root', '');
    $resultado = consultaTodos($dbh);
    return $resultado;
    close($dbh);
}


function insertar($data)
{
    $dbh = connect('listaCompra', 'localhost', 'root', '');
    insert($dbh, $data);
    close($dbh);
}

function eliminar($data)
{
    $dbh = connect('listaCompra', 'localhost', 'root', '');
    delete($dbh, $data);
    close($dbh);
}

$resultado = buscar();

foreach ($resultado as $row) {
    echo 'nombre: ' . $row->nombre . '<br>';
    echo '<a href="http://localhost:8765/baseDatos/listaCompra.php?action=delete&id=' . $row->id . '">eliminar</a>';
    echo '<hr>';
}

if (isset($_GET['nombre']) && $_GET['nombre'] != '') {
    $data = array(
        'nombre' => $_GET['nombre'],
    );
    insertar($data);
}
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $data = array(
        'id' => $_GET['id'],
    );
    eliminar($data);
}
?>
<form action="listaCompra.php" method="get">
    <p><label>Añadir producto: <input type="text" name="nombre"></label></p>
    <input type="submit" value="enviar">
</form>
</body>
</html>
