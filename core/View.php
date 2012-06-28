<?php
/**
 * View
 */
class View
{
    /**
     * テンプレートの展開
     *
     * @param array $variables
     */
    function render($path, $_variables)
    {
        extract($_variables);

        ob_start();
        require '../views/' . $path . '.php';
        $_content = ob_get_clean();

        ob_start();
        include '../views/layout.php';
        $_all_contents = ob_get_clean();

        return $_all_contents;
    }
}
