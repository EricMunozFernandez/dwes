<?php

require_once 'vendor/autoload.php';

use duncan3dc\Laravel\Blade;
use blade\ejercicio5\models\Zapatilla;

$arrayZapatillas = [];

$zapatilla1 = new Zapatilla('Adidas', 'MARQUEE BOOST', 'Zapato de baloncesto', '140€');
array_push($arrayZapatillas, $zapatilla1);

$zapatilla2 = new Zapatilla('Nike', 'NIKE M2', 'Zapato de futbol', '10€');
array_push($arrayZapatillas, $zapatilla2);

$zapatilla3 = new Zapatilla('Nike', 'NIKE M3', 'Zapato de tenis', '40€');
array_push($arrayZapatillas, $zapatilla3);

$zapatilla4 = new Zapatilla('Radobaan', 'razalos', 'Zapato de skate', '160€');
array_push($arrayZapatillas, $zapatilla4);

$zapatilla5 = new Zapatilla('Salomon', 'blade', 'Zapato de calle', '400€');
array_push($arrayZapatillas, $zapatilla5);

$zapatilla6 = new Zapatilla('Converse', 'convertidos', 'Zapato de natacion', '1270€');
array_push($arrayZapatillas, $zapatilla6);

$zapatilla7 = new Zapatilla('Buffalo', 'filete', 'Zapato de montaña', '300€');
array_push($arrayZapatillas, $zapatilla7);

$zapatilla8 = new Zapatilla('Jordan', 'michael', 'Zapato de playa', '150€');
array_push($arrayZapatillas, $zapatilla8);

$zapatilla9 = new Zapatilla('Illusive', 'dreams', 'Zapato de correr', '260€');
array_push($arrayZapatillas, $zapatilla9);

$zapatilla10 = new Zapatilla('Fila', 'columna', 'Zapato de futbol', '2990€');
array_push($arrayZapatillas, $zapatilla10);

echo Blade::render('zapatillas',[
    'zapatillas'=>$arrayZapatillas,
    'nombreTienda'=>'supertienda'
]);

