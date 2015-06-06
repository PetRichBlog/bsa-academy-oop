<?php

namespace Binary\FactoryMethod;


use Binary\FactoryMethod\Computers\AlienWare;
use Binary\FactoryMethod\Computers\OptiPlex;

class DellComputer extends ComputerManufacturer {

    public function produce($type)
    {
        switch($type) {
            case 'desktop':
                return new OptiPlex;
                break;
            case 'laptop':
                return new AlienWare;
                break;
        }
    }
}