<?php

use Composer\Autoload\ClassLoader;

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new ClassLoader();
$loader->addPsr4('Strings\\', 'src');
$loader->addPsr4('Tests\\', 'tests');
$loader->register();
