<?php
require '../core/Application.php';
require '../core/Router.php';
require '../core/Request.php';
require '../core/View.php';
require '../core/DBManager.php';

// アプリケーションのインスタンスを作成
$app = new Application();


// リクエストURIの取得
$request = new Request();
$request_uri = rtrim($request->getRequestUri(), '/');


// ルーティングの設定を取得
$router = new Router($app->getRoutes());

$route = $router->getRoute($request_uri);

// URIと設定をマッチングさせる
if ($route) {
    $controller_name = ucfirst($route['controller']) . 'Controller';
    require '../controllers/'. $controller_name . '.php';

    $db_key = 'default';
    $db_manager = new DBManager(
        $db_key,
        'mysql:host=localhost;dbname=chat_database;characterset=utf8',
        'chat_user',
        'chat_pass'
    );

    $controller = new $controller_name($db_manager);
    $action_name = $route['action'] . 'Action';
    $_view_variables = $controller->$action_name($route);

    // 処理結果を表示する
    $view = new View();
    echo $view->render($route['controller'].'/'.$route['action'], $_view_variables);

} else {
    echo 'not found';
}
