<?php

namespace TestTaker\Utils;

class ParamsStorage
{
    private $limit;
    private $offset = 0;
    private $name = '';

    private $user = -1;

    public function setParams($request)
    {
        if (isset($request['limit'])) $this->limit = $request['limit'];
        if (isset($request['offset'])) $this->offset = $request['offset'];
        if (isset($request['name'])) $this->name =  $request['name'];

        if (isset($request['user'])) $this->user = $request['user'];
        return $this;
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

    public function getUser()
    {
        return $this->user;
    }
}