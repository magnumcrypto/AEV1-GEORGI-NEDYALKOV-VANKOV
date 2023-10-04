<?php

declare(strict_types=1);

namespace AEV1\Models;

use AEV1\Core\DataBase;

//Clase que se encargara de modelar los datos
class Productos
{
    //Dejamos el constructor vacio, no nos hace falta en este momento
    public function __construct()
    {
    }

    public function getAllProducts(): array
    {
        //Hacemos la query a la BDD
        $sql = "SELECT * FROM producto";

        //Instanciamos a la clase DataBase y a su metodo getInstance
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
}
