<?php
namespace KsOre\View;

/**
 * View
 */
class View
{
    /**
     * テンプレートの展開
     *
     * @param String $path
     * @param array $variables
     *
     * @return String $_all_contens
     */
    public function render($_path, $_variables)
    {
        foreach ($_variables as $key => $value) {
            $_variables[$key] = $this->recursiveEscape($value);
        }

        extract($_variables);

        ob_start();
        require '../src/views/' . $_path . '.php';
        $_content = ob_get_clean();

        ob_start();
        include '../src/views/layout.php';
        $_all_contents = ob_get_clean();

        return $_all_contents;
    }

    /**
     * XSS対策のためにエスケープする
     *
     * @param mixed $value
     *
     * @return string
     */
    public function escape($value)
    {
        if (is_bool($value) || is_numeric($value) || $value === null || is_object($value) || is_array($value)) {
            // do nothing
            return $value;
        }

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * 配列のための再帰的エスケープ
     * @param mixed $value
     *
     * @return mixed(array|string)
     */
    public function recursiveEscape($value)
    {
        return is_array($value) ?
               array_map(array($this, 'recursiveEscape'), $value) :
               $this->escape($value);
    }
}