<?php

use Binary\Builder\HTMLPageBuilder;
use Binary\Builder\HTMLPageDirector;

require __DIR__ . '/../vendor/autoload.php';

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->getPage();

echo $page->showPage() . PHP_EOL;