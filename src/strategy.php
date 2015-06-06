<?php

use Binary\Strategy\DateComparator;
use Binary\Strategy\IntComparator;
use Binary\Strategy\ObjectCollection;

require __DIR__ . '/../vendor/autoload.php';

$objectCollection = new ObjectCollection([5, 3, 8, 10]);
$objectCollection->setComparator(new IntComparator());
var_dump($objectCollection->sort());

$dates = new ObjectCollection(['01-01-2005', '10-11-1984', '06-06-2015']);
$dates->setComparator(new DateComparator());
var_dump($dates->sort());