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
     * status code
     * @var int
     */
    private $status_code;

    /**
     * httpステータスを設定する
     *
     * @param String $status
     */
    public function setHttpStatus($status_code)
    {
        $this->status_code = $status_code;
        header(sprintf('http/1.1 %s %s', $this->status_code, self::$status_texts[$this->status_code]));
    }
}
