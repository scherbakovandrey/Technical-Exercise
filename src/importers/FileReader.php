<?php

namespace TestTaker\Importers;

class FileReader extends AbstractReader
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function read()
    {
        return file_get_contents($this->filename);
    }
}