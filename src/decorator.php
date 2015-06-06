<?php

use Binary\Decorator\RenderInJson;
use Binary\Decorator\RenderInXml;
use Binary\Decorator\Webservice;

require __DIR__ . '/../vendor/autoload.php';

$user = ['name' => 'John Doe', 'age' => 35];
$service = new Webservice($user);

var_dump((new RenderInJson($service))->renderData());
var_dump((new RenderInXml($service))->renderData());