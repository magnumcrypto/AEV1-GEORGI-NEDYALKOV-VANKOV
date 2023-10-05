<?php

declare(strict_types=1);

namespace AEV1\Models;

use AEV1\Core\DataBase;

class Departamentos
{
    //En este caso dejaremos el constructor vacío
    public function __construct()
    {
    }

    public function getAllDepartamentos(): array
    {
        //Hacemos la query a la BBDD
        $sql = "SELECT * FROM dept";
        //Instanciamos la clase DataBase y a su metodo getInstance()
        $db = DataBase::getInstance();
        //Pedimos los datos
        return $db->executeSQL($sql);
    }
}
