<?php

declare(strict_types=1);

namespace AEV1\Models;

use AEV1\Core\DataBase;

class Empleados
{

    //Dejamos el constructor vacio
    public function __construct()
    {
    }

    public function getEmpleados(int $id): array
    {
        //Hacemos la query a la BBDD, hacemos una para cada situación
        $withId = "SELECT * FROM emp WHERE emp.DEPT_NO = $id";
        $withOutId = "SELECT * FROM emp";
        //Instanciamos la clase DataBase y a su metodo getInstance()
        $db = DataBase::getInstance();
        //Pedimos los datos segun la situació
        return ($id === 40) ? $db->executeSQL($withOutId) : $db->executeSQL($withId);
    }
}
