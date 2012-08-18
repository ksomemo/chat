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
     */
    public function setHttpStatus($status) {
        header(sprintf('http/1.1 %s %s', $status, self::$status_texts[$status]));
    }
}
