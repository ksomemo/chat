<?php
use KsOre\model\Repository;

class HelpRepository extends Repository
{
    /**
     * 特定のカテゴリのヘルプを取得する
     *
     * @param int $category_id
     *
     * @return array ヘルプ
     */
    public function findByCategory($category_id)
    {
        $sql = 'select title from help where category_id = ? order by priority';
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array($category_id));

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
