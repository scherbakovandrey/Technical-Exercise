<?php

namespace TestTaker\Processors;

use TestTaker\Providers\DataProviderInterface;
use TestTaker\Utils\JsonEncoder;

class DataProcessor implements ProcessorInterface
{
    /**
     * @var ProviderInterface
     */
    private $provider;

    public function __construct(DataProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function process()
    {
        $data = $this->provider->provide();

        return JsonEncoder::encode($data);
    }
}