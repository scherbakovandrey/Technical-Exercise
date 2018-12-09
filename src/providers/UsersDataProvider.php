<?php

namespace TestTaker\Providers;

use TestTaker\Utils\FilterByName;

class UsersDataProvider extends AbstractDataProvider
{
    public function provide()
    {
        $limit = $this->paramsStorage->getLimit();
        $offset = $this->paramsStorage->getOffset();
        $name = $this->paramsStorage->getName();

        $data = $this->reader->read();

        if (!empty($name)) {
            $data = array_filter($data, array(new FilterByName($name), 'filter'));
        }

        if (!empty($offset) && is_numeric($offset) && !empty($limit) && is_numeric($limit)) {
            return array_slice($data, $offset, $limit);
        } elseif (!empty($offset) && is_numeric($offset)) {
            return array_slice($data, $offset);
        } elseif (!empty($limit) && is_numeric($limit)) {
            return array_slice($data, 0, $limit);
        } else {
            return $data;

        }
    }
}