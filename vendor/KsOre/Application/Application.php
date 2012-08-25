<?php
namespace KsOre\Application;

use KsOre\Request\Request;
use KsOre\Routing\Router;
use KsOre\Response\Response;
use KsOre\DBManager\DBManager;
use KsOre\View\View;

/**
 * Application
 */
class Application
{

    /**
     *
     * @return array ルーティングの設定
     */
    function getRoutes()
    {
        return array(
            '/chat/lobby' => array(
                'controller' => 'chat',
                'action'     => 'lobby',
            ),
            '/chat/entrance/:entrance_id' => array(
                'controller' => 'chat',
                'action'     => 'entrance',
            ),
            '/chat/helpTop' => array(
                'controller' => 'chat',
                'action'     => 'helpTop',
            ),
        );
    }

    /**
     * DB接続設定を取得する
     *
     * @param array DB接続設定
     */
    public function getDbConnectionSetting()
    {
        return array(
            'key'      => 'default',
            'dsn'      => 'mysql:host=localhost;dbname=chat_database;characterset=utf8',
            'username' => 'chat_user',
            'passwd'   => 'chat_pass'
        );
    }

    public function run()
    {
        // リクエストURIの取得
        $request = new Request();
        $request_uri = rtrim($request->getRequestUri(), '/');


        // ルーティングの設定を取得
        $router = new Router($this->getRoutes());
        $route = $router->getRoute($request_uri);

        $response = new Response();

        // URIと設定をマッチングさせる
        if ($route) {
            $controller_name = ucfirst($route['controller']) . 'Controller';
            require __DIR__.'/../../../src/controllers/'. $controller_name . '.php';

            $db_con_setting = $this->getDbConnectionSetting();
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
    }
}