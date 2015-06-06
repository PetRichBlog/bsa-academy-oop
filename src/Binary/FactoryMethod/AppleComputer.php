<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 7:24 AM
 */

namespace Binary\FactoryMethod;


use Binary\FactoryMethod\Computers\MacAir;
use Binary\FactoryMethod\Computers\MacMini;

class AppleComputer extends ComputerManufacturer {

    public function produce($type)
    {
        switch($type) {
            case 'desktop':
                return new MacMini;
                break;
            case 'laptop':
                return new MacAir;
                break;
        }
    }
}