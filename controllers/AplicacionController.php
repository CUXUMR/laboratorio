<?php

namespace Controllers;

use Exception;
use Model\Aplicacion;
use MVC\Router;

class AplicacionController
{
    public static function index(Router $router)
    {
        $aplicacion = Aplicacion::find(2);
        $router->render('aplicacion/index', [
            'aplicacion' => $aplicacion
        ]);
    }
}