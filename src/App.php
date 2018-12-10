<?php

namespace TestTaker;

use TestTaker\Utils\ClassLoader;

class App {
    public static function run() {
        $request = isset($_GET['request']) ? $_GET['request'] : 'default';
        $class = ClassLoader::load($request);

        header('Content-Type: application/json');
        header('Accept: application/json');

        $response = $class->processRequest();
        echo $response;
    }
}