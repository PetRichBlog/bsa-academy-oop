<?php

abstract class Shape {
    abstract public function area();
    abstract public function perimeter();

    public function rotate($angle) {}
}

class Triangle extends Shape {

    public $a;
    public $b;
    public $c;

    public function area()
    {
        $p = $this->halfPerimeter();
        return sqrt($p * ($p - $this->a) * ($p - $this->$b) * ($p - $this->$c));
    }

    public function perimeter()
    {
        return $this->a + $this->b + $this->c;
    }

    public function halfPerimeter()
    {
        return $this->perimeter() / 2;
    }
}