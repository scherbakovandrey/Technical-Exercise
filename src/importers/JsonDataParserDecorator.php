<?php

namespace TestTaker\Importers;

class JsonDataParserDecorator extends AbstractDataParserDecorator
{
    protected function getDataKey()
    {
        return [];
    }

    protected function populate($d, $isShort)
    {
        $schema =
            [
                'lastName' => $d->lastname,
                'firstName' => $d->firstname,
            ];

        if (!$isShort) {
            $schema = array_merge($schema,
                [
                    'login' => $d->login,
                    'password' => $d->password,
                    'title' => $d->title,
                    'gender' => $d->gender,
                    'email' => $d->email,
                    'picture' => $d->picture,
                    'address' => $d->address,
                ]);
        }
        return $schema;
    }
}