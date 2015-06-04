<?php

require __DIR__ . '/../vendor/autoload.php';

use Binary\Counter;

echo Counter::$count . PHP_EOL;

Counter::increment();
Counter::increment();
Counter::increment();

echo Counter::$count . PHP_EOL;

Counter::decrement();

echo Counter::$count . PHP_EOL;

Counter::reset();
echo Counter::$count . PHP_EOL;