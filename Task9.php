<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    public function main(array $arr, int $number): array
    {
        $count = count($arr) - 2;
        $result = [];
        for ($x = 0; $x < $count; $x++) {
            if ($arr[$x] + $arr[$x + 1] + $arr[$x + 2] == $number) {
                array_push($result, "{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = $number");
            }
        }

        return $result;
    }
}

$final = new Task9();
echo '<pre>';

try {
    print_r($final->main([2, 7, 7, 1, 8, 2, 7, 8, 7], 11));
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
echo '</pre>';
