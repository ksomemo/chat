<?php

class HelpCategoryRepository
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
