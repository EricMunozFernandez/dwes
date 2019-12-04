<?php


namespace ejercicio3\models;

require_once 'Poligono.php';
class Cuadrado extends Poligono
{
    public function area()
    {
        $area = $this->getAltura() * $this->getAnchura();
        echo 'El area del cuadrado es de: '.$area.'<br>';
    }
}