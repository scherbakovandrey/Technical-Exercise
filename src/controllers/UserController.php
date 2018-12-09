<?php

namespace TestTaker\Controllers;

use TestTaker\Providers\UserDataProvider;

class UserController extends AbstractController
{
    /*
     * Decorator pattern from GOF
    * https://en.wikipedia.org/wiki/Decorator_pattern
    *
    * We use decorators as layers on different levels. All layers have method read() which will read the data and pass it to the next layer.
    * This architecture allows easily change the source. It needs to implement the TestTaker\ReadableInterface interface for each layer
    */
    protected function getCsvDataProvider()
    {
        return new UserDataProvider(
            $this->getCsvReader(),
            $this->paramsStorage
        );
    }

    protected function getJsonDataProvider()
    {
        return new UserDataProvider(
            $this->getJsonReader(),
            $this->paramsStorage
        );
    }
}