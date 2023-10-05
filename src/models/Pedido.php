<?php

declare(strict_types=1);

namespace AEV1\Models;

use AEV1\Core\DataBase;

//clase que se encargara de pedir el pedido segun el id
class Pedido
{

    //dejamos el constructor vacio
    public function __construct()
    {
    }

    //Funcion que nos devolvera el pedido del cliente según su id
    public function getPedidoById($id): array
    {
        //Hacemos la query a la BBDD
        $sql = "SELECT * FROM pedido WHERE pedido.CLIENTE_COD = $id";
        //Instanciamos la clase DataBase y a su metodo getInstance
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
}
