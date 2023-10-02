<?php

declare(strict_types=1);

namespace AEV1\Core;

use AEV1\Core\Interfaces\IRequest;

//Clase que se encarga de entregarnos la ruta y los parámetros solicitados del cliente
class Request implements IRequest
{
    private string $route;
    private array $params;

    public function __construct()
    {
        //Lo primero hemos de obtener la ruta del navegador mediante una variable global
        $rawRoute = $_SERVER["REQUEST_URI"];
        //Separamos la URI en partes mediante el separador predefinido en la app " / "
        $rawRouteElements = explode("/", $rawRoute);
        //definimos que es ruta (es el emeneto 1 porque el 0 es vacío)
        //lo concatenamos con el separador para poder compararlo con los datos que tenemos almacenados
        $this->route = "/" . $rawRouteElements[1];
        //Guardamos el resto de datos recibidos como parámetros lo que seran a partir de la segunda posicion
        $this->params = array_slice($rawRouteElements, 2);
    }

    public function getRoute(): string
    {
        //Implementamos el metodo obligatorio del interfáz
        return $this->route;
    }

    public function getParams(): array
    {
        //Implementamos el método obligatorio del interfáz
        return $this->params;
    }
}
