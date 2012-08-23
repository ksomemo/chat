<?php
use KsOre\model\Repository;

class HelpCategoryRepository extends Repository
{
    /**
     * ヘルプカテゴリ
     *
     * @return array ヘルプカテゴリ
     */
    public function findAll()
    {
        $sql = 'select id, name from help_category order by priority';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
