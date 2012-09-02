<?php
namespace KsOre\Request;

/**
 * Request
 */
class Request
{
    /**
     * リクエストURIを取得する
     */
    public function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * リクエストメソッドを取得する
     *
     * @return string
     */
    public function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}