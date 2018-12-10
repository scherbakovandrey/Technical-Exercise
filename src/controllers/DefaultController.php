<?php

namespace TestTaker\Controllers;

use TestTaker\Utils\JsonEncoder;

class DefaultController extends AbstractController
{
    public function processRequest()
    {
        $message = 'No API Method';

        return JsonEncoder::encode($message);
    }
}
