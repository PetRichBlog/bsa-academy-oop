<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 7:35 AM
 */

namespace Binary\FactoryMethod\Computers;


class AlienWare extends Laptop {
    function __construct()
    {
        $this->lifeTime = '10h';
    }

    function getBatteryLifeTime()
    {
        return $this->lifeTime;
    }
}