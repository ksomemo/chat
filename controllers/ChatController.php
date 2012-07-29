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


    /**
     * ヘルプTOPページ
     *
     * @return array ヘルプ情報
     */
    public function helpTopAction()
    {
        return array(
            'help_category_list' => array(
                array(
                    'id'   => 1,
                    'name' => 'name1',
                    'help' => array(
                        array(
                            'title' => 'title1',
                        ),
                        array(
                            'title' => 'title1-2',
                        ),
                        array(
                            'title' => 'title1-3',
                        ),                    ),
                ),
                array(
                    'id'   => 2,
                    'name' => 'name2',
                    'help' => array(
                        array(
                            'title' => 'title2',
                        ),
                        array(
                            'title' => 'title2-2',
                        ),
                    )
                ),
            ),
        );
    }
}