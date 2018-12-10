<?php

namespace TestTaker;

use TestTaker\Utils\ClassLoader;

class App {
    public static function run() {
        $class = ClassLoader::load($_GET);

        header('Content-Type: application/json; charset=utf-8');
        $response = $class->processRequest();
        echo $response;
    }
}