<?php

namespace TestTaker\Importers;

use TestTaker\Utils;

class CsvFileReader extends FileReader
{
    public function read()
    {
        return (new Utils\CsvFileParser($this->filename))->parse();
    }
}