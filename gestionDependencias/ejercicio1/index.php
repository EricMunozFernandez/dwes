<?php

require 'vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

Timer::start();

$lista='';
$x=0;
for($x;$x<100;$x++){
    $numero=random_int(1,10);
    $lista=$lista.$numero;
    sleep(0.5);
}
$time=Timer::stop();
echo $lista;
echo '<br>';

print Timer::secondsToTimeString($time);

