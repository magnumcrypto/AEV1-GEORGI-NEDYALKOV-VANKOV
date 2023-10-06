<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;
use AEV1\Models\Clientes;
use AEV1\Models\Pedido;

//Controllador que se encargara de obtener la lista de empleados
class PedidosController extends AbstractController
{
    //En este caso vamos a hacer uso de dos modelos empleados y pedidos
    public function listadoPedidos(): void
    {
        //Nos aseguramos de que siempre se pase un valor, para evitar comportamientos extraños
        (isset($_POST['cliente'])) ? $id = (int) $_POST['cliente'] : $id = 0;
        //Cogemos los clientes
        $clientes = $this->listadoClientes();
        //Instanciamos al modelo para gestionar los datos
        $pedido = new Pedido();
        //Para este controller utilizaremos otra plantilla pedidos.html.twig
        $this->render(
            'pedidos.html.twig',
            [
                'title' => 'Pedido por cliente',
                'title_first_page' => 'GEORGI PACKAGES',
                'clientes' => $clientes,
                'pedidos' => $pedido->getPedidoById($id)
            ]
        );
    }

    //Funcion privada solamente para obtener array de todos los clientes
    private function listadoClientes(): array
    {
        //Instanciamos la clase y usamos su metodo
        $clientes = new Clientes();
        return $clientes->getAllClients();
    }
}
