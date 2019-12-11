<?php

require_once 'vendor/autoload.php';

use duncan3dc\Laravel\Blade;
use blade\ejercicio6\models\Zapato;

$arrayZapatos = [];

$zapato1 = new Zapato(1,'Adidas', 'MARQUEE BOOST', 'Zapato de baloncesto', '140€');
array_push($arrayZapatos, $zapato1);

$zapato2 = new Zapato(2,'Nike', 'NIKE M2', 'Zapato de futbol', '10€');
array_push($arrayZapatos, $zapato2);

$zapato3 = new Zapato(3,'Nike', 'NIKE M3', 'Zapato de tenis', '40€');
array_push($arrayZapatos, $zapato3);

$zapato4 = new Zapato(4,'Radobaan', 'razalos', 'Zapato de skate', '160€');
array_push($arrayZapatos, $zapato4);

$zapato5 = new Zapato(5,'Salomon', 'blade', 'Zapato de calle', '400€');
array_push($arrayZapatos, $zapato5);

$zapato6 = new Zapato(6,'Converse', 'convertidos', 'Zapato de natacion', '1270€');
array_push($arrayZapatos, $zapato6);

$zapato7 = new Zapato(7,'Buffalo', 'filete', 'Zapato de montaña', '300€');
array_push($arrayZapatos, $zapato7);

$zapato8 = new Zapato(8,'Jordan', 'michael', 'Zapato de playa', '150€');
array_push($arrayZapatos, $zapato8);

$zapato9 = new Zapato(9,'Illusive', 'dreams', 'Zapato de correr', '260€');
array_push($arrayZapatos, $zapato9);

$zapato10 = new Zapato(10,'Fila', 'columna', 'Zapato de futbol', '2990€');
array_push($arrayZapatos, $zapato10);

if (isset($_GET['id'])){
    foreach ($arrayZapatos as $zapato){
        if (strval($zapato->getId())==$_GET['id']){
            /*echo "<pre>";
            print_r($zapato);
            echo"</pre>";*/
            echo Blade::render('zapato',[
                'zapato'=>$zapato,
                'nombreTienda'=>'supertienda'
            ]);
        }
    }

}
else{
    echo Blade::render('zapatos',[
        'zapatos'=>$arrayZapatos,
        'nombreTienda'=>'supertienda'
    ]);
}
