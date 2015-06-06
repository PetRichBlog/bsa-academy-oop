<?php

use Binary\AbstractFactory\OReilyBookFactory;
use Binary\AbstractFactory\SamsBookFactory;

require __DIR__ . '/../vendor/autoload.php';

$oreilyBooks = new OReilyBookFactory();
$samsBooks = new SamsBookFactory();

var_dump($oreilyBooks->makePHPBook());
var_dump($samsBooks->makeMySQLBook());