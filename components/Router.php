<?php

class Router
{
    private $routes;

    public function _construct()
    {
        $routesPath= ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run()
    {
        print_r($this->routes);
        // Получить строку запроса

        // Проверить наличие такого запроса в routes.php

        // Если есть совпадение, определить какой контроллер
        // и action обрабатывают запрос

        // Подключить файл класса-контроллера

        // Создать объект, вызвать метод (т.е. action)
    }
}