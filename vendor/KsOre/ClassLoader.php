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
        require __DIR__.'./Application.php';
    }

    /**
     * オートロード用メソッドの登録をする
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'), true, false);
    }
}
