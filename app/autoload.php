<?php
require '../vendor/ClassLoader.php';

$loader = new ClassLoader();
spl_autoload_register(array($loader, 'loadClass'), true, false);