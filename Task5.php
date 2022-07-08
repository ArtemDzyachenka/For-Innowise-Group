<?php

namespace src;

use InvalidArgumentException;

class Task5
{
    public function main(int $n): float
    {
        $fib = [];
//        $i = 0;

        $fib[0] = 0;
        $fib[1] = 1;

        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib[$n];
    }
}

$fib_num = new Task5();

try {
    echo $fib_num->main(77);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
