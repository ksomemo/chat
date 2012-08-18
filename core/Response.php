<?php
/**
 * Response
 */
class Response
{
    /**
     * ステータスに対応するテキスト
     * @var array
     */
    public static $status_texts = array(
        404 => 'Not Found',
    );

    /**
     * httpステータスを設定する
     *
     * @param String $status
     * @param String $text
     */
    public function setHttpStatus($status, $text) {
        header(sprintf('http/1.1 %s %S', $status, self::$status_texts[$status]));
    }
}
