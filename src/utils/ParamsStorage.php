<?php

namespace TestTaker\Utils;

class ParamsStorage
{
    private $limit;
    private $offset = 0;
    private $name = '';

    private $resourceId = -1;

    public function setParams($params)
    {
        if (isset($params['limit'])) $this->limit = $params['limit'];
        if (isset($params['offset'])) $this->offset = $params['offset'];
        if (isset($params['name'])) $this->name =  $params['name'];

        return $this;
    }

    public function setResourceId($resouceId)
    {
        $this->resourceId = $resouceId;
        return $this;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function getName()
    {
        return $this->name;
    }
}