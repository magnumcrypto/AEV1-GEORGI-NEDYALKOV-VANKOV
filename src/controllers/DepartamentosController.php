<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;
use AEV1\Models\Departamentos;

//Controllador que se encargara de obtener la lista de departamentos
class DepartamentosController extends AbstractController
{

    //En este caso vamos a querer todos los datos
    public function listadoDepartamentos(): void
    {
        //Instanciamos el modelo para poder enviarlos a la vista
        $departamentos = new Departamentos();
        //Para este controller utilizaremos la plantilla departamentos.html.twig
        $this->render(
            'departamentos.html.twig',
            [
                'title' => 'Listado de DEPARTAMENTOS',
                'title_first_page' => 'GEORGI PACKAGES',
                'departamentos' => $departamentos->getAllDepartamentos()
            ]
        );
    }
}
