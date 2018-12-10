<?php

namespace TestTaker\Providers;

use TestTaker\Utils\FilterByName;
use TestTaker\Utils\Paginator;

class UsersDataProvider extends AbstractDataProvider
{
    /**
     * @return array
     */
    public function provide()
    {
        $data = $this->reader->read(true);

        if (!empty($name)) {
            $data = array_filter($data, array(new FilterByName($this->paramsStorage->getName()), 'filter'));
        }

        return (new Paginator($data))
            ->setOffset($this->paramsStorage->getOffset())
            ->setLimit($this->paramsStorage->getLimit())
            ->paginate();
    }
}