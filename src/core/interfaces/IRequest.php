<?php

declare(strict_types=1);

namespace AEV1\Core\Interfaces;

//Interfaz que nos garantiza que siempre que la implementemos deberemos si o si implementar el metodo el método asociado,
//garántizando el correcto funcionamiento de la aplicación para la recepción y procesado de la ruta por URI

interface IRequest
{
    //Función que obtiene la ruta URI
    public function getRoute(): string;

    //Función que obtiene los parámetros de la URI y nos devuelve un array
    public function getParams(): array;
}
