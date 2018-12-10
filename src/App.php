<?php

namespace TestTaker;

use TestTaker\Utils\ClassLoader;

class App {
    public static function run() {
        $class = ClassLoader::load($_GET);

        header('Content-Type: application/json');
        header('Accept: application/json');

        $response = $class->processRequest();
        echo $response;
    }
}