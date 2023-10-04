<?php

declare(strict_types=1);

namespace AEV1\Models;

use AEV1\Core\DataBase;

//Clase que se encargara de devolver los datos de la BBDD
class Clientes
{
    //Dejamos el constructor vacío
    public function __construct()
    {
    }

    public function getAllClients(): array
    {
        //Hacemos la query a la BBDD
        $sql = "SELECT * FROM cliente";

        //Instanciamos la clase DataBase y a su metodo getInstance
        $db = DataBase::getInstance();
        //Lanzamos la query
        return $db->executeSQL($sql);
    }
}
