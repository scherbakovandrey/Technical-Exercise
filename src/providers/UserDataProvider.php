<?php

namespace TestTaker\Providers;

class UserDataProvider extends AbstractDataProvider
{
    public function provide()
    {
        $resourceId = $this->paramsStorage->getResourceId();

        $data = $this->reader->read();

        if (is_numeric($resourceId) && $resourceId >= 0 && $resourceId < count($data)) {
            return $data[$resourceId];
        } else {
            return 'User with id ' . $resourceId . ' does not exist';
        }
    }
}