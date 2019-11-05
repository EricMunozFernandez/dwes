<?php


function connect()
{
    $dbname = 'alumnos';
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    try {
        $dbh = new PDO("mysql:host=host=$host;dbname=$dbname", $user, $pass);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
