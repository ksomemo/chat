<?php
use KsOre\ClassLoader\ClassLoader;

require '../vendor/KsOre/ClassLoader/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerNameSpace('KsOre', __DIR__. '/../vendor');
$loader->register();
