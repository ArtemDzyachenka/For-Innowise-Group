<?php

namespace src;

use InvalidArgumentException;

class Task12
{
    public $result;
    public $a;

    public function __construct(int $first, int $second)
    {
        $this->first = $first;
        $this->second = $second;
    }
    public function add1(int $a = 0): Task12
    {
        $this->result = $this->first + $this->second;

        return $this;
    }
    public function subtract1(int $a = 0): Task12
    {
        $this->result = $this->first - $this->second;

        return $this;
    }

    public function multiply1(int $a = 0): Task12
    {
        $this->result = $this->first * $this->second;

        return $this;
    }
    public function divide1(int $a = 0): Task12
    {
        $this->result = $this->first / $this->second;

        return $this;
    }



    public function add(int $a = 0): Task12
    {
        $this->result = $this->result + $a ;

        return $this;
    }
    public function subtract(int $a = 0): Task12
    {
        $this->result = $this->result - $a ;

        return $this;
    }

    public function multiply(int $a = 0): Task12
    {
        $this->result = $this->result * $a ;

        return $this;
    }
    public function divide(int $a = 0): Task12
    {
        $this->result = $this->result / $a ;

        return $this;
    }


    public function __toString()
    {
        return "({$this->result})";
    }
}

$calc = new Task12(21, 7);

try {
    echo $calc->subtract1()->add(3);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
