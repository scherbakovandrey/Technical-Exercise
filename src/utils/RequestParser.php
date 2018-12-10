<?php

namespace TestTaker\Utils;

class RequestParser
{
    public static function parse($request)
    {
        $requestData = explode('/', $request);

        $controller = $requestData[0];
        $controller = ucfirst(strtolower($controller));

        $id = -1;

        if (isset($requestData[1])) {
            $id = $requestData[1];
        }
        return [
            'controller' => $controller,
            'id' => $id,
        ];
    }
}