<?php

namespace TestTaker\Utils;

class JsonEncoder
{
    public static function encode($data)
    {
        echo json_encode($data);
    }
}