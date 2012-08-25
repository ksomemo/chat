<?php
require '../app/bootstrap.php';

use KsOre\Application\Application;

// アプリケーションのインスタンスを作成
$app = new Application();
$app->run();