<?php

require_once 'vendor/autoload.php';

use duncan3dc\Laravel\Blade;

echo Blade::render("bienvenida",[
    "nombre"=>"Juan"
]);
