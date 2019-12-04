<?php
require_once 'models/Persona.php';

$persona1= new \ejercicio5\models\Persona('juan');
$persona2= new \ejercicio5\models\Persona('pedro');
$persona3= new \ejercicio5\models\Persona('jaime');
$persona4= new \ejercicio5\models\Persona('jon');
$persona5= new \ejercicio5\models\Persona('adrian');

echo 'hay '.\ejercicio5\models\Persona::getPersonasEnElMundo().' personas en el mundo';