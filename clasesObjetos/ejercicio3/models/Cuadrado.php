<?php


namespace ejercicio3\models;


class Cuadrado extends Poligono
{
    public function area()
    {
        $area = $this->getAltura() * $this->getAnchura();
        echo $area;
    }
}