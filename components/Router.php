<?php

class Router  {

    private $routes;

    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run() {
        //echo 'test';
        //Получить строку запроса
        if(!empty($_SERVER['REQUEST_URI'])) {
            $uri = trim($_SERVER['REQUEST_URI'], '/');
        }
        echo $uri;
        //Проверить наличие такого запроса в routes.php

        //Если есть совпадение, определить какой контроллер и action обрабатывает запрос

        //Подключить файл соответствующего класса-котроллера

        //Создать объект, вызвать метод(action)
    }
}

