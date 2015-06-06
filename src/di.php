<?php

use Binary\ComputerHolder;
use Binary\FactoryMethod\Computers\AlienWare;
use Binary\FactoryMethod\Computers\MacMini;

require __DIR__ . '/../vendor/autoload.php';

$container = new Pimple\Container();

$container['holder'] = function ($c) {
    return new ComputerHolder(new MacMini(), new AlienWare());
};

var_dump($container['holder']);