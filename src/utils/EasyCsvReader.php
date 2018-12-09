<?php

namespace TestTaker\Utils;

//to use this class we use \EasyCSV\Reader ("jwage/easy-csv"). We must redeclare the $headers as protected in \EasyCSV\Reader

class EasyCsvReader extends \EasyCSV\Reader
{
    public function getRow()
    {
        $this->init();
        if ($this->isEof()) {
            return false;
        }

        $row = $this->getCurrentRow();
        $isEmpty = $this->rowIsEmpty($row);

        if ($this->isEof() === false) {
            $this->handle->next();
        }

        if ($isEmpty === false) {
            if ($this->headers && is_array($this->headers)) {
                if (count($this->headers) != count($row)) {
                    //the point is that array_combine returns false in case the arrays are not the same size. We just need to skip this line, otherwise we skip the whole file which we don't want to
                    return $this->getRow();
                } else {
                    return array_combine($this->headers, $row);
                }
            } else {
                return $row;
            }
        } elseif ($isEmpty) {
            // empty row, transparently try the next row
            return $this->getRow();
        } else {
            return false;
        }
    }
}