<?php
require '../core/Application.php';
require '../core/Router.php';
require '../core/Request.php';
require '../core/View.php';

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
    $route = $router->getRoute($request_uri);

    $controller_name = ucfirst($route['controller']) . 'Controller';
    require '../controllers/'. $controller_name . '.php';
    $controller = new $controller_name();
    $action_name = $route['action'] . 'Action';
    $_view_variables = $controller->$action_name();

    // 処理結果を表示する
    $view = new View();
    echo $view->render($route['action'], $_view_variables);

} else {
    echo 'not found';
}
