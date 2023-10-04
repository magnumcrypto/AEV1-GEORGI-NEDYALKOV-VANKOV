<?php

declare(strict_types=1);

namespace AEV1\Core;

use AEV1\Core\Interfaces\IRequest;
use AEV1\Core\Interfaces\IRoute;

//Clase que se encarga de gestion que ruta ha pedido el cliente y que debemos mostrar por pantalla.
//Para ello, analizar las rutas preconfiguradas y llama al Controlador para que realize su trabajo.
//Siendo el verdadero cerebro del MVC

class Dispatcher
{
    private array $routeList;
    private IRequest $currentRequest;

    //Para poder crear un objeto Dispatcher debemos enviar las rutas de la aplicaciñon y la URI del navegador
    //Para que el Dispatcher pueda redirigir al lugar controller correcto con los parámetros adecuados
    public function __construct(IRoute $routeCollection, IRequest $request)
    {
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->dispatch();
    }

    //El cerebro de nuestra aplicación, se encarga de lanzar el controlador adecuado para cada ruta solicitada
    private function dispatch(): void
    {
        //Verificamos que la ruta que hemos recibido está dentro de las rutas de la app
        if (isset($this->routeList[$this->currentRequest->getRoute()])) {

            //Instanciará el controlador que sea necesario según se solicite
            $controllerClass = "AEV1\\Controllers\\" . $this->routeList[$this->currentRequest->getRoute()]["controller"];
            var_dump($controllerClass);
            //Esto sera equivalente a las acciones de cada controlador (main,detail,etc.)
            $action = $this->routeList[$this->currentRequest->getRoute()]["action"];
        } else {
            //En caso de no estas predefinida cargaremos el controlador NoRuta para garantizar que nuestra app
            //siempre tiene una vista que mostrar y crearemos el namespace correspondiente para poder instanciarlo
            $controllerClass = "AEV1\\Controllers\\NoRuta";
            $action = "noRuta";
        }

        //Comprobamos que se han enviado o no parámetros por la ruta y lanzamos la accion del controller
        //Si no hay parámetros son null
        (!is_null($this->currentRequest->getParams())) ? $params = $this->currentRequest->getParams() : $params = null;

        //Instanciamos el controlador que toca
        $controller = new $controllerClass();
        //Ahora ejecutamos el método asociado a la ruta y le pasamos los parámetros
        $controller->$action(...$params);
    }
}
