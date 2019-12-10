<?php

require_once 'vendor/autoload.php';

use duncan3dc\Laravel\Blade;
use blade\ejercicio2\models\Zapatilla;

$zapatilla=new Zapatilla('Adidas','MARQUEE BOOST','Zapatilla de baloncesto','140€');

echo Blade::render('zapatilla',[
    'zapatilla'=>$zapatilla
]);