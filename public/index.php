<?php

declare(strict_types=1);

use AEV1\Core\Dispatcher;
use AEV1\Core\Request;
use AEV1\Core\RouteCollection;

require_once "../vendor/autoload.php";

//Instanciamos el objeto que contendrá todas las rutas predefinidas
$routes = new RouteCollection();

//Instanciamos el objeto que contenga la ruta y parámetros que hemos recibido desde el navegador
$request = new Request();

//Instanciamos el objeto que se encarga de redirigir al controller que corresponda la app
$dispatcher = new Dispatcher($routes, $request);
