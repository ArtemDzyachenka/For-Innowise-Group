<?php

namespace src;

use InvalidArgumentException;

class Task2
{
    public function main(string $date): string
    {
        $new_date = strtotime("$date");
        $remaining = $new_date - time();
        $days_remaining = floor($remaining / 86400);

        return $days_remaining . ' days till your birthday!';
    }
}
$b_day = new Task2();

try {
    echo $b_day->main('13.07.2022');
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
