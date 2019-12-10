<?php

require_once 'vendor/autoload.php';

use duncan3dc\Laravel\Blade;
use blade\ejercicio3\models\Zapatilla;

$arrayZapatillas = [];

$zapatilla1 = new Zapatilla('Adidas', 'MARQUEE BOOST', 'Zapatilla de baloncesto', '140€');
array_push($arrayZapatillas, $zapatilla1);

$zapatilla2 = new Zapatilla('Nike', 'NIKE M2', 'Zapatilla de futbol', '10€');
array_push($arrayZapatillas, $zapatilla2);

$zapatilla3 = new Zapatilla('Nike', 'NIKE M3', 'Zapatilla de tenis', '40€');
array_push($arrayZapatillas, $zapatilla3);

$zapatilla4 = new Zapatilla('Radobaan', 'razalos', 'Zapatilla de skate', '160€');
array_push($arrayZapatillas, $zapatilla4);

$zapatilla5 = new Zapatilla('Salomon', 'blade', 'Zapatilla de calle', '400€');
array_push($arrayZapatillas, $zapatilla5);

$zapatilla6 = new Zapatilla('Converse', 'convertidos', 'Zapatilla de natacion', '1270€');
array_push($arrayZapatillas, $zapatilla6);

$zapatilla7 = new Zapatilla('Buffalo', 'filete', 'Zapatilla de montaña', '300€');
array_push($arrayZapatillas, $zapatilla7);

$zapatilla8 = new Zapatilla('Jordan', 'michael', 'Zapatilla de playa', '150€');
array_push($arrayZapatillas, $zapatilla8);

$zapatilla9 = new Zapatilla('Illusive', 'dreams', 'Zapatilla de correr', '260€');
array_push($arrayZapatillas, $zapatilla9);

$zapatilla10 = new Zapatilla('Fila', 'columna', 'Zapatilla de futbol', '2990€');
array_push($arrayZapatillas, $zapatilla10);

echo Blade::render('zapatillas',[
    'zapatillas'=>$arrayZapatillas
]);

