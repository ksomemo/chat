<?php
/**
 * Router
 */
class Router
{
    private $routes;

    /**
     * コンストラクタ
     *
     * @param array $routes ルーティングの設定
     */
    function __construct($routes)
    {
        $this->routes = $routes;
    }

    /**
     * URIに対応するルーティングの存在を確かめる
     *
     * @param String $uri
     */
    function isExists($uri)
    {
        return isset($this->routes[$uri]);
    }

    /**
     * URIに対応するルーティングを取得する
     *
     * @param String $uri
     */
    function getRoute($uri)
    {
        return $this->routes[$uri];
    }

}
