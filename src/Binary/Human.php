<?php

namespace Binary;

class Human {
    const AVERAGE_SLEEP_HOURS = 7;

    public $name;
    protected $country;
    private $email;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function __toString()
    {
        return strtoupper($this->name);
    }
}