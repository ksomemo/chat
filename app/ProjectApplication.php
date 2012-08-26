<?php

use KsOre\Application\Application;

/**
 * Application
 */
class ProjectApplication extends Application
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->project_dir = __DIR__.'/..';
    }

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
            '/:controller/:action' => array(
                // nothing
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

}