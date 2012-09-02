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
}