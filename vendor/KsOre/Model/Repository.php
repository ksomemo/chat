<?php
namespace KsOre\Model;

class Repository
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * コンストラクタ
     *
     * @param PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}
