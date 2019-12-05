<?php


namespace gestionDependencias\ejercicio3\models;
require_once 'User.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class Admin extends User
{
    private $admin_level;

    public function __construct($username, $nombre, $apellidos, $email, $password, $ultimo_acceso, $loger, $admin_level)
    {
        parent::__construct($username, $nombre, $apellidos, $email, $password, $ultimo_acceso, $loger);
        $this->admin_level = $admin_level;
    }

    public function showActions()
    {


    }
}