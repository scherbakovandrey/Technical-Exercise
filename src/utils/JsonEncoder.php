<?php

namespace TestTaker\Utils;

class JsonEncoder
{
    public static function encode($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}