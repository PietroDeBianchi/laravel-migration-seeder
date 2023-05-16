<?php

namespace App\Functions;

class Helpers
{

    public static function getCsvContent(string $path)
    {

        $data = [];

        $document = fopen($path, 'r');

        if ($document === false) {
            exit('Invalid Document');
        }

        while (($row = fgetcsv($document)) !== false) {

            $data[] = $row;
        }

        return $data;
    }
}
