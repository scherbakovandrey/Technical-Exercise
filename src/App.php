<?php

namespace TestTaker;

use TestTaker\Utils\ClassLoader;

class App {
    public static function run() {
        $class = ClassLoader::load($_GET['request']);
    	$response = $class->processRequest();
        echo $response;
    }
}