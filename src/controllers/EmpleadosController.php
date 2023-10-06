<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;
use AEV1\Models\Empleados;

//Controllador que se encargara de obtener la lista de empleados
class EmpleadosController extends AbstractController
{

    //En este caso no sabemos si se quiere solo una lista de clientes según
    //el departamento o si no se pasa ningun parametro listarlos todos
    public function listadoEmpleados(): void
    {
        //Cogemos si hay, datos por GET
        $id = (int) $_GET["id"];
        //Instanciamos al modelo para gestionar los datos
        $empleados = new Empleados();
        //Para este controller utilizaremos otra plantilla empleados.html.twig
        $this->render(
            'empleados.html.twig',
            [
                'id_dep' => $id,
                'title' => 'Detalles de los empleados del departamento: ',
                'title_first_page' => 'GEORGI PACKAGES',
                'empleados' => $empleados->getEmpleados($id)
            ]
        );
    }
}
