<?php

namespace TestTaker\Processors;

use TestTaker\Providers\DataProviderInterface;

interface ProcessorInterface
{
    public function __construct(DataProviderInterface $provider);

    public function process();
}