<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;

class NoRuta extends AbstractController
{
    public function noRuta($params = null)
    {
        //Obtenemos la fecha y la hora actual
        $fecha = date("d-m-y H:i:s");

        //Ahora usamos el método extendido del AbstractController render para lanzar
        //la plantilla de twig con los parámetros necesarios
        $this->render(
            "noruta.html.twig",
            [
                'fecha_actual' => $fecha,
                'title' => 'La ruta actual es incorrecta',
                'description' => 'ERROR: La ruta actual no existe o es inaccesible'
            ]
        );
    }
}
