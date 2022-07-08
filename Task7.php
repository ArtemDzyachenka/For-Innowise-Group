<?php

namespace src;

use InvalidArgumentException;

class Task7
{
    public function main(array $arr, int $position): array
    {
        $x = $arr;
        var_dump($x);
        unset($x[$position]);
        echo ' ';

        return $x ;
    }
}
$value = new Task7();
echo '<pre>';

try {
    print_r($value->main([1, 2, 3, 4, 5], 3));
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
echo '</pre>';
