<?php

namespace TestTaker\Providers;

class UserDataProvider extends AbstractDataProvider
{
    public function provide()
    {
        $userId = $this->paramsStorage->getUser();

        $data = $this->reader->read();

        if (is_numeric($userId) && $userId >= 0 && $userId < count($data)) {
            return $data[$userId];
        } else {
            return 'User with id ' . $userId . ' does not exist';
        }
    }
}