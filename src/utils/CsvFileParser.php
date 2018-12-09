<?php

namespace TestTaker\Utils;

class CsvFileParser 
{
    protected $filename = '';

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function parse()
    {
        try {
            $reader = new EasyCsvReader($this->filename);
        }
        catch (\RuntimeException $e)
        {
            echo $e->getMessage();
            die();
        }
        return $reader->getAll();
    }
}
