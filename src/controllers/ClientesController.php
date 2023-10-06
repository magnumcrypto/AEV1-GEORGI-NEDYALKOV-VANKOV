<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;
use AEV1\Models\Clientes;
use AEV1\Models\Pedido;

//Clase que se encargara de obtener la lista de los clientes
class ClientesController extends AbstractController
{
    //En este caso vamos a querer todos los datos
    public function listadoClientes(): void
    {
        //Instanciamos al modelo para poder gestionar datos
        $clientes = new Clientes();
        //Para este controller utilizaremos la plantilla clientes.html.twig
        $this->render(
            'clientes.html.twig',
            [
                'title_first_page' => 'GEORGI PACKAGES',
                'title' => 'Lista de todos los CLIENTES',
                'clientes' => $clientes->getAllClients()
            ]
        );
    }

    //En este caso vamos a querer solamente los datos según el id del cliente recibido
    public function detalleClientes(): void
    {
        //cogemos lo recibido por GET
<<<<<<< HEAD
        $id = (int) $_GET["id"];
        //Instanciamos al modelo para gestionar los datos
        $clientes = new Clientes();
=======
        $id = $_GET["id"];
        //Instanciamos al modelo para gestionar los datos
        $pedido = new Pedido();
>>>>>>> 8b8824eb6a0d191579b9433526a7fe4aba5b2c47
        //Para este controller utilizaremos otra plantilla detallecliente.html.twig
        $this->render(
            'detallecliente.html.twig',
            [
<<<<<<< HEAD
                'title' => 'Detalles del cliente',
                'title_first_page' => 'GEORGI PACKAGES',
                'clientes' => $clientes->getClienteById($id)
=======
                'title' => 'Detalles del pedido',
                'title_first_page' => 'GEORGI PACKAGES',
                'pedidos' => $pedido->getPedidoById($id)
>>>>>>> 8b8824eb6a0d191579b9433526a7fe4aba5b2c47
            ]
        );
    }
}
