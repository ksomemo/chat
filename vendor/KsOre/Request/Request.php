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
    function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}