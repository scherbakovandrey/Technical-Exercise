<?php

namespace TestTaker\Importers;

use TestTaker\Utils\ArrayGetValueByKeyPath;

abstract class AbstractDataParserDecorator extends AbstractReaderDecorator
{
    public function read($isShort = false)
    {
        $data = $this->reader->read();

        $dataKey = $this->getDataKey();

        //We get the value of the data based on the key path
        $dataArr = (new ArrayGetValueByKeyPath($data))->setPath($dataKey)->get();

        $i = 0;
        $parsedData = [];
        foreach ($dataArr as $d) {
            $parsedData[] = $this->populate($d, $isShort);
            $parsedData[$i]['userId'] = $i;
            $i++;
        }
        return $parsedData;
    }

    abstract protected function populate($d, $isShort);

    abstract protected function getDataKey();
}