<?php

include 'models/Triangulo.php';
include 'models/Cuadrado.php';

$triangulo1= new \ejercicio3\models\Triangulo('azul',20,10);
$cuadrado1= new \ejercicio3\models\Cuadrado('rojo', 20,10);

$triangulo1->area();