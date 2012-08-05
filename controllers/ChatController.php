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
        require '../core/DBManager.php';

        $db_key = 'default';
        $db_manager = new DBManager(
            $db_key,
            'mysql:host=localhost;dbname=chat_database;characterset=utf8',
            'chat_user',
            'chat_pass'
        );

        $pdo = $db_manager->getConnection($db_key);

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