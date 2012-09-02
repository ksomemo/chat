<?php
namespace KsOre\Request;

/**
 * Request
 */
class Request
{
    /**
     * サーバ変数
     *
     * @var array
     */
    private $server = array();

    public function __construct()
    {
        $this->server = $_SERVER;
    }

    /**
     * リクエストURIを取得する
     */
    public function getRequestUri()
    {
        return $this->server['REQUEST_URI'];
    }

    /**
     * リクエストメソッドを取得する
     *
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->server['REQUEST_METHOD'];
    }

    /**
     * リクエストメソッドがPOSTであるか
     *
     * @return bool
     */
    public function isPost()
    {
        return self::getRequestMethod() === 'POST' ? true : false;
    }

    /**
     * ポストされたパラメータを取得し、存在しない場合デフォルト値を返す
     *
     * @param string $name
     * @param mixed $default
     */
    public function getPost($name, $default)
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }
}