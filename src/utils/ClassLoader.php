<?php

namespace TestTaker\Utils;

class ClassLoader
{
    public static function load($request)
    {
        //simple controller loader. We assume that all requests are called using the GET method.
        $controllerClass = ucfirst(strtolower($request)) . 'Controller';
        $controller = 'TestTaker\\Controllers\\' . $controllerClass;
        if (class_exists($controller)) {
            return (new $controller)->setParams($_GET);
        }
        return new \TestTaker\Controllers\DefaultController();
    }

}