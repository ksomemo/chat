<?php

/**
 * DB管理クラス
 *
 */
class DBManager {

    /**
     * PDOインスタンスを保持する配列
     *
     * @var array
     */
    private $connections;

    /**
     * PDOを作成する
     *
     * @param string $key 接続を特定するキー
     * @param string $dsn
     * @param string $username
     * @param string $passwd
     */
    public function __construct($key, $dsn, $username, $passwd)
    {
        $this->connections[$key] = new PDO($dsn, $username, $passwd);
    }

    /**
     * 接続を取得する
     *
     * @param string $key 接続を特定するキー
     *
     * @return PDO
     */
    public function getConnection($key = null)
    {
        if ($key === null) {
            return current($this->connections);
        }

        return $this->connections[$key];
    }
}
