<?php

namespace TestTaker\Utils;

class Paginator {
    private $data = [];

    private $offset;

    private $limit;

    public function __construct(array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function paginate()
    {
        if (!empty($offset) && is_numeric($offset) && !empty($limit) && is_numeric($limit)) {
            return array_slice($this->data, $offset, $limit);
        } elseif (!empty($offset) && is_numeric($offset)) {
            return array_slice($this->data, $offset);
        } elseif (!empty($limit) && is_numeric($limit)) {
            return array_slice($this->data, 0, $limit);
        } else {
            return $this->data;
        }
    }
}