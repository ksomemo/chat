<?php

/**
 * DB管理クラス
 *
 */
class DBManager {

    /**
     * PDOインスタンス
     *
     * @var PDO
     */
    private $connection;

    /**
     * PDOを作成する
     *
     * @param string $dsn
     * @param string $username
     * @param string $passwd
     */
    public function __construct($dsn, $username, $passwd)
    {
        $this->connection = new PDO($dsn, $username, $passwd);
    }

    /**
     * 接続を取得する
     *
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
