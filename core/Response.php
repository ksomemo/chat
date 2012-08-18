<?php
/**
 * Response
 */
class Response
{
    /**
     * httpステータスを設定する
     *
     * @param String $status
     * @param String $text
     */
    public function setHttpStatus($status, $text) {
        header(sprintf('http/1.1 %s %S', $status, $text));
    }
}
