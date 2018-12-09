<?php

namespace TestTaker\Importers;

class DatabaseReaderDecorator  extends AbstractReaderDecorator
{
    public function read()
    {
        //read data from Database source
        return [];
    }
}