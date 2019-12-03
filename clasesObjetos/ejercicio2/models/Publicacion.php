<?php

namespace ejercicio2\models;
class Publicacion
{
    private $autores, $ano, $editorial, $titulo, $texto;

    public function __construct($autores, $ano, $editorial, $titulo, $texto)
    {
        $this->autores = $autores;
        $this->ano = $ano;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer()
    {
        echo $this->texto;
    }

    public function escribir($textoEscrito)
    {
        $this->texto = $this->texto . ' ' . $textoEscrito;
    }

    /**
     * @return mixed
     */
    public function getAutores()
    {
        return $this->autores;
    }

    /**
     * @param mixed $autores
     */
    public function setAutores($autores)
    {
        $this->autores = $autores;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * @return mixed
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * @param mixed $editorial
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

}
