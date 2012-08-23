<?php
namespace KsOre\ClassLoader;

class ClassLoader
{
    /**
     * オートロード用メソッド
     *
     * @param String $class
     */
    public function loadClass($class)
    {
        $pos = strrpos($class, '\\');
        if ($pos !== false) {
            $class = 'model/'. substr($class, $pos + 1, strlen($class));
        }

        require __DIR__.'./'.$class.'.php';
    }

    /**
     * オートロード用メソッドの登録をする
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'), true, false);
    }
}
