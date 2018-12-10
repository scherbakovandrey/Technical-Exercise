<?php

namespace TestTaker\Controllers;

use TestTaker\Providers\DatabaseDataProvider;
use TestTaker\Utils\ParamsStorage;
use TestTaker\Processors\DataProcessor;

use TestTaker\Importers;

abstract class AbstractController
{
    static $csvFilename = SAMPLE_CSV_FILE_LOCATION;

    static $jsonFilename = SAMPLE_JSON_FILE_LOCATION;

    /**
     * @var ParamsStorage
     */
    protected $paramsStorage;

    public function __construct()
    {
        $this->paramsStorage = new ParamsStorage();
    }

    public function setResourceId($resourceId)
    {
        $this->paramsStorage->setResourceId($resourceId);
        return $this;
    }

    public function setParams($request)
    {
        $this->paramsStorage->setParams($request);
        return $this;
    }

    public function processRequest()
    {
        $processor = new DataProcessor($this->getDataProvider());

        return $processor->process();
    }

    /*
     * We are able to select the specific provider here, see below
    */
    protected function getDataProvider()
    {
        //return $this->getJsonDataProvider();
        return $this->getCsvDataProvider();
    }

    protected function getCsvReader()
    {
        return new Importers\CsvDataParserDecorator( //data parser level [read output: properly mapped array]
            new Importers\CsvReaderDecorator( //csv parser level [read output: parsed array from CSV with original mapping ]
                new Importers\FilenameReaderDecorator(self::$csvFilename) //filename level [read output: filename ]
            )
        );
    }

    protected function getJsonReader()
    {
        return new Importers\JsonDataParserDecorator( //data parser level [read output: properly mapped array]
            new Importers\JsonReaderDecorator( //json parser level [read output: parsed array from JSON with original mapping ]
                new Importers\FilenameReaderDecorator(self::$jsonFilename) //filename level [read output: filename ]
            )
        );
    }

    protected function getDataBaseDataProvider()
    {
        //this is not implemented, but placed here to have a clue how to implement new source when needed
        return new DatabaseDataProvider(
            new Importers\DatabaseReaderDecorator(), //data parser level [read output: properly mapped array from database]
            $this->paramsStorage
        );
    }

    protected function getCsvDataProvider()
    {
        return null;
    }

    protected function getJsonDataProvider()
    {
        return null;
    }
}