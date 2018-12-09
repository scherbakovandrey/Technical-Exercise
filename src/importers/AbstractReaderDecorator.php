<?php

namespace TestTaker\Importers;

/*
 * This is the class implements Decorator pattern (for instance for for importers)
 */

use TestTaker\ReadableInterface;

abstract class AbstractReaderDecorator extends AbstractReader
{
    /**
     * @var ReadableInterface
     */
    protected $reader;

    public function __construct(ReadableInterface $reader)
    {
        $this->reader = $reader;
    }
}