<?php

class HelpRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * コンストラクタ
     *
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

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
