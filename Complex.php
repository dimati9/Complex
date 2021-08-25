<?php

class Complex
{
    // объявление свойства
    private $a = 0;
    private $b = 0;
    private $c = 0;
    private $d = 0;

    public function __construct(string $one,string $two)
    {
        $this->a = preg_split("/[\s+]+|i/" , $one);
        $this->b = preg_split("/[\s+]+|i/" , $two);

    }

    public function addition() {
        $a= intval($this->a[0]);
        $b = intval($this->a[1]);
        $c = intval($this->b[0]);
        $d = intval($this->b[1]);

        return  ($a + $c) . "+" . ($b + $d) . "i";
    }

    public function subtraction() {
        $a= intval($this->a[0]);
        $b = intval($this->a[1]);
        $c = intval($this->b[0]);
        $d = intval($this->b[1]);

        $final = ($a - $c) ."-". ($b - $d) . "i";
        $final = str_replace("--", "-", $final);
        $final = str_replace("-0", "", $final);
        return $final;
    }

    public function division() {
        $a= intval($this->a[0]);
        $b = intval($this->a[1]);
        $c = intval($this->b[0]);
        $d = intval($this->b[1]);

        return ($a * $c + $b * $d)  / ($c * $c + $d * $d) .
        "+" . ($a * $c - $b * $d) / ($c * $c + $d * $d) . "i";
    }

    public function multiplication() {
        $a= intval($this->a[0]);
        $b = intval($this->a[1]);
        $c = intval($this->b[0]);
        $d = intval($this->b[1]);

        return ($a * $c -
                $b * $d) . "+" .
            ($a * $d +
                $b * $c) . "i";

    }
}