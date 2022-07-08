<?php

namespace src;

use InvalidArgumentException;

class Task1
{
    public function main(int $inputNumber): string
    {
        $result = $inputNumber > 30
            ? 'More than 30'
            : ($inputNumber > 20
                ? 'More than 20'
                : ($inputNumber > 10
                    ? 'More than 10'
                    : 'Equal or less than 10'));

        return $inputNumber.' : '.$result."\n";
    }
}

$res = new Task1();

try {
    echo $res->main(20);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
