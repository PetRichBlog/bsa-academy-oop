<?php

namespace Binary\FactoryMethod\Computers;


class MacAir extends Laptop {
    function __construct()
    {
        $this->lifeTime = '8h';
    }

    function getBatteryLifeTime()
    {
        return $this->lifeTime;
    }
}