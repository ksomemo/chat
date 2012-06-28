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
        );
    }
}