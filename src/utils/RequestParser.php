<?php

namespace TestTaker\Utils;

class RequestParser
{
    public static function parse($request)
    {
        $requestData = explode('/', $request['resources']);

        $controller = $requestData[0];
        $controller = ucfirst(strtolower($controller));

        $resourceId = -1;

        if (isset($requestData[1])) {
            $resourceId = $requestData[1];
        }

        $parsedRequest = [
            'controller' => $controller,
            'resourceId' => $resourceId,
        ];

        unset($request['resources']);
        if (count($request)) {
            $parsedRequest['params'] = $request;
        } else {
            $parsedRequest['params'] = [];
        }

        return $parsedRequest;
    }
}