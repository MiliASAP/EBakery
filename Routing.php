<?php

require_once "src/controllers/DefaultController.php";
require_once "src/controllers/SecurityController.php";
require_once "src/controllers/CartController.php";

class Routing
{
    public static $routes;

    public static function get($url, $view)
    {
        self::$routes[$url] = $view;
    }

    public static function post($url, $view)
    {
        self::$routes[$url] = $view;
    }

    public static function run($url)
    {
        if ($url === '') {
            $url = 'homePage';  // lub 'login' jeśli chcesz
        }

        if (!array_key_exists($url, self::$routes)) {
            die("Wrong url!!");
        }

        $controllerName = self::$routes[$url];
        $controller = new $controllerName;

        // Metoda to ostatni segment URL
        $segments = explode('/', $url);
        $method = end($segments);

        // Sprawdź czy metoda istnieje, jeśli nie - domyślna
        if (!method_exists($controller, $method)) {
            $method = 'homePage';  // albo inna domyślna metoda
        }

        // Nie obsługujemy teraz parametrów URL, więc po prostu wywołaj metodę
        $controller->$method();
    }

}