<?php
require '../app/bootstrap.php';
require '../vendor/KsOre/Application.php';
require '../vendor/KsOre/Router.php';
require '../vendor/KsOre/Request.php';
require '../vendor/KsOre/View.php';
require '../vendor/KsOre/DBManager.php';
require '../vendor/KsOre/Response.php';

// アプリケーションのインスタンスを作成
$app = new Application();


// リクエストURIの取得
$request = new Request();
$request_uri = rtrim($request->getRequestUri(), '/');


// ルーティングの設定を取得
$router = new Router($app->getRoutes());
$route = $router->getRoute($request_uri);

$response = new Response();

// URIと設定をマッチングさせる
if ($route) {
    $controller_name = ucfirst($route['controller']) . 'Controller';
    require '../controllers/'. $controller_name . '.php';

    $db_con_setting = $app->getDbConnectionSetting();
    $db_manager = new DBManager(
        $db_con_setting['key'],
        $db_con_setting['dsn'],
        $db_con_setting['username'],
        $db_con_setting['passwd']
    );

    $controller = new $controller_name($db_manager);
    $action_name = $route['action'] . 'Action';
    $_view_variables = $controller->$action_name($route);

    // 処理結果を表示する
    $view = new View();
    $contents = $view->render($route['controller'].'/'.$route['action'], $_view_variables);

} else {
    $response->setHttpStatus(404);
    $contents = 'not found';
}

$response->setContents($contents);
$response->send();
