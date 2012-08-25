<?php
/**
 * チャット
 */
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
        $helpCategoryRepository = $this->db_manager->getRepository('HelpCategory');
        $category_list = $helpCategoryRepository->findAll();

        $helpRepository = $this->db_manager->getRepository('Help');
        foreach ($category_list as $key => $category) {
            $category_list[$key]['help'] = $helpRepository->findByCategory($category['id']);
        }

        return array('help_category_list' => $category_list);

    }
}