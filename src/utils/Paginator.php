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
        if (!empty($this->offset) && is_numeric($this->offset) && !empty($this->limit) && is_numeric($this->limit)) {
            return array_slice($this->data, $this->offset, $this->limit);
        } elseif (!empty($this->offset) && is_numeric($this->offset)) {
            return array_slice($this->data, $this->offset);
        } elseif (!empty($this->limit) && is_numeric($this->limit)) {
            return array_slice($this->data, 0, $this->limit);
        } else {
            return $this->data;
        }
    }
}