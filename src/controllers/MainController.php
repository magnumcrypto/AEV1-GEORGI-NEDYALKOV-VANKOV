<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;

//Esta clase y la ruta sera la que salga por defecto en la app cuando se inicia
class MainController extends AbstractController
{
    //Función que controlador que iniciara
    public function main(): void
    {
        $fecha = date("d-m-Y H:i:s");
        //Usamos el metodo extendido de AbstractController render para lanzar la plantilla
        $this->render(
            "index.html.twig",
            [
                'title' => 'AEV1',
                'title_first_page' => 'GEORGI PACKAGES',
                'fecha_actual' => $fecha
            ]
        );
    }
}
