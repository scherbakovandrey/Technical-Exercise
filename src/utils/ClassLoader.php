<?php

namespace TestTaker\Utils;

use TestTaker\Utils\RequestParser;

class ClassLoader
{
    public static function load($request)
    {
        $parsedRequest = RequestParser::parse($request);

        $controller = $parsedRequest['controller'];
        $resourceId = $parsedRequest['id'];

        //simple controller loader. We assume that all requests are called using the GET method.
        $controllerClass = 'TestTaker\\Controllers\\' . $controller . 'Controller';

        if (class_exists($controllerClass)) {
            return (new $controllerClass())
                ->setResourceId($resourceId)
                ->setParams($_GET);
        }
        return new \TestTaker\Controllers\DefaultController();
    }

}