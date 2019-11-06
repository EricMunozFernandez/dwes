<?php

function connect()
{
    $dbname = 'alumnos';
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function consultaAssoc($dbh)
{
    $stmt = $dbh->prepare("SELECT * FROM alumno;");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "id: " . $row['id'] . "<br>";
        echo "nombre: " . $row['nombre'] . "<br>";
        echo "apellidos: " . $row['apellidos'] . "<br>";
        echo "email: " . $row['email'] . "<br>";
        echo "edad: " . $row['edad'] . "<br>";
        echo "<hr>";
    }
}

function consultaObj($dbh)
{
    $stmt = $dbh->prepare("SELECT * FROM alumno;");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "id: " . $row->id . "<br>";
        echo "nombre: " . $row->nombre . "<br>";
        echo "apellidos: " . $row->apellidos . "<br>";
        echo "email: " . $row->email . "<br>";
        echo "edad: " . $row->edad . "<br>";
        echo "<hr>";
    }
}

function insert($dbh, $data)
{
    echo '........INICIAR INSERT..........<br>';
    $stmt = $dbh->prepare("INSERT INTO alumno(nombre,apellidos,email,edad)
    VALUES(:nombre,:apellidos,:email,:edad);");
    $stmt->execute($data);
}

function delete($dbh, $id)
{
    echo '........INICIAR DELETE..........<br>';
    $data = array(
        'id' => $id,
    );
    $stmt = $dbh->prepare('DELETE FROM alumno WHERE id=:id;');
    $stmt->execute($data);
}

function update($dbh, $data)
{
    echo '........INICIAR UPDATE..........<br>';
    $stmt = $dbh->prepare
    ('UPDATE alumno SET apellidos=:apellidos WHERE nombre=:nombre AND edad=:edad;');
    $stmt->execute($data);
}

function close($dbh)
{
    $dbh = null;
}

function buscar()
{
    $dbh = connect();
    consultaAssoc($dbh);
    close($dbh);
}

function insertar()
{
    $dbh = connect();
    $data = array(
        'nombre' => 'eric',
        'apellidos' => 'munoz',
        'email' => 'eric.munoz@ikasle.egibide.org',
        'edad' => '23'
    );
    insert($dbh, $data);
    consultaObj($dbh);
    echo '..........TERMINAR INSERT............<br>';
    close($dbh);
}

function borrar()
{
    $dbh = connect();
    delete($dbh, 6);
    consultaAssoc($dbh);
    echo '..........TERMINAR DELETE............<br>';
    close($dbh);
}

function editar()
{
    $dbh = connect();
    $data = array(
        'nombre' => 'Mikel',
        'apellidos'=>'DAVINCI',
        'edad' => 25,
    );
    update($dbh, $data);
    consultaAssoc($dbh);
    echo '..........TERMINAR UPDATE............<br>';
    close($dbh);
}

buscar();
//insertar();
editar();
//borrar();
