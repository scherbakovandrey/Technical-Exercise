<?php

namespace TestTaker\Importers;

class CsvDataParserDecorator extends AbstractDataParserDecorator
{
    protected function getDataKey()
    {
        return [];
    }

    protected function populate($d)
    {
        $schema =
            [
                'firstName' => $d['name.first'],
                'lastName' => $d['name.last'],
            ];
        return $schema;
    }
}