<?php

declare(strict_types=1);

namespace AEV1\Core\Interfaces;
//Interfaz que nos garantizará que al implementarla se usará su método dandole robustez a la app
interface IRoute
{
    //Devuelve toda la colección de rutas predefinidas
    public function getRoutes(): array;
}
