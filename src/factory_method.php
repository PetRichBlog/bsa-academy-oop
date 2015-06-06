<?php

use Binary\FactoryMethod\AppleComputer;
use Binary\FactoryMethod\DellComputer;

require __DIR__ . '/../vendor/autoload.php';

$apple = new AppleComputer();
$dell = new DellComputer();

var_dump($apple->produce('laptop'));
var_dump($apple->produce('desktop'));

var_dump($dell->produce('laptop'));
var_dump($dell->produce('desktop'));