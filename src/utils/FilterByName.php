<?php

namespace TestTaker\Utils;

class FilterByName {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    function filter($element) {
        if (strpos($element['firstName'], $this->name) !== false  || strpos($element['lastName'], $this->name) !== false) {
            return true;
        }
        return false;
    }
}
