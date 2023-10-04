<?php

declare(strict_types=1);

namespace AEV1\Controllers;

use AEV1\Core\AbstractController;
use AEV1\Models\Productos;

<<<<<<< HEAD
//Clase que se encarga obtener una lista de los productos
=======
<<<<<<< HEAD
//Clase que se encarga obtener una lista de los productos
=======
//Clase que se encarga devolvernos una lista de los productos
>>>>>>> c2ed1433718220d14796662aab0b8c3cbe2fdc97
>>>>>>> f9b3a090059fa1932440cbdfc9bf69518393c531
class ProductosController extends AbstractController
{
    //En este caso vamos a querer todos los datos
    public function listadoProductos(): void
    {
        //instanciamos al modelo para poder gestionar los datos
        $productos = new Productos();
        //Para este controler utilizaremos la plantilla productos.html.twig (nuestro view)
        $this->render(
            "productos.html.twig",
            [
                'title_first_page' => 'GEORGI PACKAGES',
                'title' => 'Lista de todos los productos',
                'productos' => $productos->getAllProducts()
            ]
        );
    }
}
