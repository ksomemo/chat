<?php
namespace KsOre\Response;

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
        200 => 'OK',
        404 => 'Not Found',
    );

    /**
     * status code
     * @var int
     */
    private $status_code;

    /**
     * 送信内容
     * @var String
     */
    private $contents;

    /**
     *
     * @param int $status_code
     */
    public function __construct($status_code = 200)
    {
        $this->status_code = $status_code;
    }

    /**
     * httpステータスを設定する
     *
     * @param String $status
     */
    public function setHttpStatus($status_code)
    {
        $this->status_code = $status_code;
    }

    /**
     * headerを送信する
     */
    public function sendHeader()
    {
        header(sprintf('http/1.1 %s %s', $this->status_code, self::$status_texts[$this->status_code]));
    }

    /**
     * レスポンスを送信する
     *
     * @param String $contents
     */
    public function send()
    {
        $this->sendHeader();
        echo $this->contents;
    }

    /**
     * 送信する内容を設定する
     *
     * @param String $contents
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }
}
