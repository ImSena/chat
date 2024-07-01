<?php

namespace App\Core;

class Router {

    public function run() {
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $url = explode('/', $url);

        $controllerName = !empty($url[0]) ? 'App\\Controllers\\' . ucfirst($url[0]) . 'Controller' : 'App\\Controllers\\HomeController';

        $methodName = isset($url[1]) ? $url[1] : 'index'; // Método padrão é 'index' se não especificado na URL

        $params = [];
        if (count($url) > 2) {
            $params = array_slice($url, 2); // Captura parâmetros a partir do índice 2
        }

        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if (method_exists($controller, $methodName)) {
                call_user_func_array([$controller, $methodName], $params);
            } else {
                echo 'Método não existe';
            }

        } else {
            echo 'Controlador não existe';
        }
    }
}
?>
