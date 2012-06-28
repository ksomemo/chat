<?php
require '../core/Application.php';
require '../core/Router.php';
require '../core/Request.php';

// アプリケーションのインスタンスを作成
$app = new Application();


// リクエストURIの取得
$request = new Request();
$request_uri = rtrim($request->getRequestUri(), '/');


// ルーティングの設定を取得
$router = new Router($app->getRoutes());


// URIと設定をマッチングさせる
if ($router->isExists($request_uri)) {
    // ルーティングに対応するファイルを読み込む
    ob_start();
    require '../controllers/'. $router->getRoute($request_uri) . '.php';
    $action_function_name = $router->getRoute($request_uri) . 'Action';
    $_view_variables = $action_function_name();
    extract($_view_variables);

    require '../views/'      . $router->getRoute($request_uri) . '.php';
    $_content = ob_get_clean();

    include '../views/layout.php';

} else {
    echo 'not found';
}
