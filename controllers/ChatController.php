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
     *  部屋入り口
     *
     * @param array $params
     *
     * @return multitype:
     */
    function entranceAction($params)
    {
        return array(
            'entrance_id' => $params['entrance_id'],
        );
    }
}