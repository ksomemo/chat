<?php
class ChatController
{
    /**
     * ロビー
     *
     * @return multitype:number 部屋の数
     */
    function lobbyAction()
    {
        return array(
           'room_count' => 5
        );
    }

    /**
     * 部屋入り口
     *
     * @return array view用変数
     */
    function entranceAction()
    {
        return array();
    }
}