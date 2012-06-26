<?php
require '../core/application.php';

// アプリケーションのインスタンスを作成
$app = new Application();


// リクエストURIの取得
$request_uri = rtrim($_SERVER['REQUEST_URI'], '/');


// ルーティングの設定を取得
$route = $app->getRoutes();


// URIと設定をマッチングさせる
// ルーティングに対応するファイルを読み込む
if (isset($route[$request_uri])) {
    ob_start();
    require '../views/' . $route[$request_uri];
    $_content = ob_get_clean();

    include '../views/layout.php';

} else {
    echo 'not found';
}
