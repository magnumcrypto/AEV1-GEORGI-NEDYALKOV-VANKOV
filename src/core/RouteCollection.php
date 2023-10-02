<?php

declare(strict_types=1);

namespace AEV1\Core;

use AEV1\Core\Interfaces\IRoute;

//Clase que se encarga de entregarnos todas las rutas predefinidas en la aplicación
class RouteCollection implements IRoute
{
    private array $routes;

    public function __construct()
    {
        //Cargamos del JSON los datos de las rutas y las asignamos al array
        $this->routes = json_decode(file_get_contents(__DIR__ . "/../../config/routes.json"), true);
    }

    //getter que nos devolvera los datos en forma de array de todas las rutas
    //metodo obligatorio dle interfaz
    public function getRoutes(): array
    {
        return $this->routes;
    }
}
