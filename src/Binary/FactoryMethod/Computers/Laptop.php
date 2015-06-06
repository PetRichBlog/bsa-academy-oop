<?php

namespace Binary\FactoryMethod\Computers;

abstract class Laptop {
    protected  $lifeTime;

    abstract function getBatteryLifeTime();
}