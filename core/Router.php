<?php

namespace Core;

class Router {
    public function run() {
        $url = $_GET['url'] ?? 'home/index';
        $url = explode('/', trim($url, '/'));

        $controllerName = 'App\\Controllers\\' . ucfirst($url[0]) . 'Controller';
        $methodName = $url[1] ?? 'index';
        $params = array_slice($url, 2); // 🔹 pega o que vem depois do método (ex: 7)

        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if (method_exists($controller, $methodName)) {
                // 🔹 chama o método com os parâmetros dinamicamente
                call_user_func_array([$controller, $methodName], $params);
            } else {
                echo "Método '$methodName' não encontrado!";
            }
        } else {
            echo "Controller '$controllerName' não encontrado!";
        }
    }
}
