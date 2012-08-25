<?php
namespace KsOre\Routing;

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
        $this->routes = $this->makeRoute($routes);
    }

    /**
     *
     * ルーティング定義からルーティングルールを作成する
     *
     * @param array $definition ルーティング定義
     *
     * @return array
     */
    function makeRoute($definition)
    {
        $routes = array();

        foreach ($definition as $uri => $params) {
            $tokens = explode('/', $uri);
            foreach ($tokens as $key => $token) {
                // 可変パラメータの後方参照な正規表現の作成
                if (0 === strpos($token, ':')) {
                    $name = substr($token, 1);
                    $token = sprintf('(?P<%s>[^/]+)', $name);
                }

                $tokens[$key] = $token;
            }

            $pattern = implode('/', $tokens);
            $routes[$pattern] = $params;
        }

        return $routes;
    }

    /**
     * URIに対応するルーティングを取得する
     *
     * @param String $uri
     */
    function getRoute($uri)
    {
        foreach ($this->routes as $uri_pattern => $route) {
            if (preg_match('#^' . $uri_pattern . '$#', $uri, $matches)) {
                return array_merge($route, $matches);
            }
        }

        return false;
    }

}
