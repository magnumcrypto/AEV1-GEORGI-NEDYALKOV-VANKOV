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
                'title' => 'Lista de todos los clientes',
                'clientes' => $clientes->getAllClients()
            ]
        );
    }

    //En este caso vamos a querer solamente los datos según el id del cliente recibido
    public function detalleClientes(): void
    {
        //cogemos lo recibido por GET
        $id = $_GET["id"];
        //Instanciamos al modelo para gestionar los datos
        $pedido = new Pedido();
        //Para este controller utilizaremos otra plantilla detallecliente.html.twig
        $this->render(
            'detallecliente.html.twig',
            [
                'title' => 'Detalles del pedido',
                'title_first_page' => 'GEORGI PACKAGES',
                'pedidos' => $pedido->getPedidoById($id)
            ]
        );
    }
}
