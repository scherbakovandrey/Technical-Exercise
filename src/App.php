<?php

namespace TestTaker;

use TestTaker\Utils\ClassLoader;

class App {
    public static function run() {
        $class = ClassLoader::load(isset($_GET['request']) ? $_GET['request'] : 'default');
    	$response = $class->processRequest();
        echo $response;
    }
}