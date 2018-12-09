<?php

namespace TestTaker\Utils;

class ArrayGetValueByKeyPath
{
    private $array = [];

    private $path = [];

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function setPath(array $path)
    {
        $this->path = $path;
        return $this;
    }

    public function get()
    {
        $value = '';
        $arr = $this->array;
        $path = $this->path;

        if (count($path)) {
            foreach ($path as $key) {
                if (isset($arr[$key])) {
                    $value = $arr[$key];
                    $arr = $value;
                } else {
                    return false;
                }
            }
            return $value;
        }
        else return $arr;
    }
}