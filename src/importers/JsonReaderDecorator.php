<?php

namespace TestTaker\Importers;

class JsonReaderDecorator extends AbstractReaderDecorator
{
    public function read()
    {
        $fileName = $this->reader->read();

        $fileContents = (new FileReader($fileName))->read();

        $jsonArray = json_decode($fileContents);

        if (empty($jsonArray))
        {
            throw new ImporterException('JSON file is empty');
            return '';
        }

        return $jsonArray;
    }
}