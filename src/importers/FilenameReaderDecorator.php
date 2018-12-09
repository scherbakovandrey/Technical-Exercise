<?php

namespace TestTaker\Importers;

class FilenameReaderDecorator extends AbstractReader
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function read()
    {
        return $this->filename;
    }
}