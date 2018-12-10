<?php

namespace TestTaker\Utils;

use TestTaker\Utils\RequestParser;

class ClassLoader
{
    public static function load($request)
    {
        $parsedRequest = RequestParser::parse($request);

        $controller = $parsedRequest['controller'];
        $resourceId = $parsedRequest['resourceId'];
        $params = $parsedRequest['params'];

        //simple controller loader. We assume that all requests are called using the GET method.
        $controllerClass = 'TestTaker\\Controllers\\' . $controller . 'Controller';

        if (class_exists($controllerClass)) {
            return (new $controllerClass())
                ->setResourceId($resourceId)
                ->setParams($params);
        }
        return new \TestTaker\Controllers\DefaultController();
    }

}