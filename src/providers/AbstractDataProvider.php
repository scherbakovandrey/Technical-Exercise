<?php

namespace TestTaker\Providers;

use TestTaker\ReadableInterface;
use TestTaker\Utils\ParamsStorage;

abstract class AbstractDataProvider implements DataProviderInterface
{
    /**
     * @var ReadableInterface
     */
    protected $reader;

    /**
     * @var ParamsStorage
     */
    protected $paramsStorage;

    public function __construct(ReadableInterface $reader, ParamsStorage $paramsStorage)
    {
        $this->reader = $reader;
        $this->paramsStorage = $paramsStorage;
    }

    abstract public function provide();
}