<?php

// リクエストURIの取得
$request_uri = $_SERVER['REQUEST_URI'];


// ルーティングの設定を取得
$route = array(
    '/chat/lobby' => 'web/lobby.php'
);


// URIと設定をマッチングさせる
// ルーティングに対応するファイルを読み込む
if (isset($route[$request_uri])) {
    require '../' . $route[$request_uri];
} else {
    echo 'not found';
}
