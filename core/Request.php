<?php
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