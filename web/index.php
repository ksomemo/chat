<?php
require '../core/application.php';
require '../core/Router.php';

// アプリケーションのインスタンスを作成
$app = new Application();


// リクエストURIの取得
$request_uri = rtrim($_SERVER['REQUEST_URI'], '/');


// ルーティングの設定を取得
$router = new Router($app->getRoutes());


// URIと設定をマッチングさせる
if ($router->isExists($request_uri)) {
    // ルーティングに対応するファイルを読み込む
    ob_start();
    require '../views/' . $router->getRoute($request_uri);
    $_content = ob_get_clean();

    include '../views/layout.php';

} else {
    echo 'not found';
}
