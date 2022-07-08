<?php

namespace src;

use InvalidArgumentException;

class Task4
{
    public function main(string $input): string
    {
        $symbols = ['_', '-', ''];
        $new_title = str_replace($symbols, ' ', $input);
        $new_title1 = ucwords($new_title);
        $new_title2 = str_replace(' ', '', $new_title1);

        return $new_title2;
    }
}

$finally = new Task4();

try {
    echo $finally->main('The-fast_brown fox jumps-over the_lazy-dog');
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
