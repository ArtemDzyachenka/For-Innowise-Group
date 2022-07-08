<?php

namespace src;

use InvalidArgumentException;

class Task3
{
    public function main(int $num): int
    {
        if ($num > 0) {
            return ($num - 1) % 9 + 1;
        } else {
            return 0;
        }
    }
}

$digit = new Task3();

try {
    echo $digit->main(4356);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
