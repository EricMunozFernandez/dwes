<?php


namespace ejercicio5\models;


class Persona
{
    private $nombre;
    private static $personasEnElMundo=0;

    /**
     * Persona constructor.
     * @param $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        self::$personasEnElMundo++;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return int
     */
    public static function getPersonasEnElMundo()
    {
        return self::$personasEnElMundo;
    }

}