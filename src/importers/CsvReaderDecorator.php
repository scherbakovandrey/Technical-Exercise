<?php

namespace TestTaker\Importers;

class CsvReaderDecorator extends AbstractReaderDecorator
{
    public function read()
    {
        $fileName = $this->reader->read();

        $csvArray = (new CsvFileReader($fileName))->read();

        if (empty($csvArray))
        {
            throw new ImporterException('CSV file is empty');
            return '';
        }

        return $csvArray;
    }
}