<?php


namespace ejercicio3\models;

require_once 'Poligono.php';
class Triangulo extends Poligono
{
    public function area()
    {
        $area = ($this->getAltura() * $this->getAnchura()) / 2;
        echo 'El area del triangulo es de: '.$area.'<br>';
    }
}