<?php

namespace src;

use InvalidArgumentException;

class Task10
{
    public function main(int $input): array
    {
        $number = [$input];
        if ($input < 1) {
            return [];
        }
        while ($input > 1) {
            if ($input % 2 == 0) {
                $input = $input / 2;
            } else {
                $input = 3 * $input + 1;
            }
            array_push($number, $input);
        }

        return $number;
    }
}

$finally = new Task10();
echo '<pre>';

try {
    print_r($finally->main(15));
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
echo '</pre>';
