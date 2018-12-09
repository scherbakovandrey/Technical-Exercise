<?php

namespace TestTaker\Importers;

use TestTaker\ReadableInterface;

abstract class AbstractReader implements ReadableInterface
{
    abstract public function read();
}