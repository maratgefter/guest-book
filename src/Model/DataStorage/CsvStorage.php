<?php

namespace App\Model\DataStorage;

class CsvStorage extends CrudEntity
{

    function get()
    {

        $this->checkFileExists();
        $array = file($this->file_name);
        print_r($array);
        $res = [];

        foreach ($data_array as $row) {
            
            $csv .= explode(';', $row);
        }
        return $res;
    }

    function write_file(array $data_array)
    {
        $csv = '';
        foreach ($data_array as $row) {
            
            $csv .= implode(';', $row)."\n";
        }
        print_r($csv);
        file_put_contents($this->file_name, $csv);
    }

}

?>