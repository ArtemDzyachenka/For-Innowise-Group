<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public function main(string $json): string
    {
        $jCode = json_decode($json, true);
        if ($jCode) {
            echo '<pre>';
            $title = 'Title: '.$jCode['Title']."\n";
            echo '<pre>';
            $author = 'Author: '.$jCode['Author']."\n";
            echo '<pre>';
            $publ = 'Publisher: '.$jCode['Detail']['Publisher']."\n";
            $script = $title.$author.$publ;
        }

        return $script;
    }
}

$json_code = new Task8();

try {
    print_r($json_code->main('{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail":
    { 
    "Publisher": "Little Brown"
     }
      }'));
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
