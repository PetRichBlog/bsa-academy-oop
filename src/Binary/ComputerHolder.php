<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 9:47 AM
 */

namespace Binary;


use Binary\FactoryMethod\Computers\Desktop;
use Binary\FactoryMethod\Computers\Laptop;

class ComputerHolder {
    private $desktop;
    private $laptop;

    function __construct(Desktop $d, Laptop $l)
    {
        $this->desktop = $d;
        $this->laptop = $l;
    }
}