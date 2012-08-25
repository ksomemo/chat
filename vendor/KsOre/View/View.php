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
    function render($_path, $_variables)
    {
        extract($_variables);

        ob_start();
        require '../views/' . $_path . '.php';
        $_content = ob_get_clean();

        ob_start();
        include '../views/layout.php';
        $_all_contents = ob_get_clean();

        return $_all_contents;
    }
}
