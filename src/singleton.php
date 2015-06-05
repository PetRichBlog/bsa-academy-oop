<?php

use Binary\Logger;

require __DIR__ . '/../vendor/autoload.php';

$logger = Logger::getInstance();
$logger->log('Test');
$logger->log('One more line');