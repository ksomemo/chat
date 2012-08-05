<?php

require '../core/Controller.php';

class ChatController extends Controller
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
        $pdo = $this->db_manager->getConnection();

        $sql = 'select id, name from help_category_m order by priority';
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $category_list = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($category_list as $key => $category) {
            $sql = 'select title from help_m where category_id = ? order by priority';
            $statement = $pdo->prepare($sql);
            $statement->execute(array($category['id']));
            $category_list[$key]['help'] = $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        unset( $pdo);

        return array('help_category_list' => $category_list);

    }
}