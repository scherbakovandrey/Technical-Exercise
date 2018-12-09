<?php

namespace TestTaker\Importers;

class JsonDataParserDecorator extends AbstractDataParserDecorator
{
    protected function getDataKey()
    {
        return [];
    }

    protected function populate($d)
    {
        $schema =
            [
                'firstName' => $d->firstName,
                'lastName' => $d->lastName,
            ];
        return $schema;
    }
}