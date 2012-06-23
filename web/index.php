<?php

// リクエストURIの取得
$request_uri = $_SERVER['REQUEST_URI'];


// ルーティングの設定を取得
$route = array(
    '/chat/lobby' => 'lobby.php'
);


// URIと設定をマッチングさせる
// ルーティングに対応するファイルを読み込む
if (isset($route[$request_uri])) {
    ob_start();
    require '../views/' . $route[$request_uri];
    $_content = ob_get_clean();

    include '../views/layout.php';

} else {
    echo 'not found';
}
