<?php

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
}