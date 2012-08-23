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
        $file = $this->findFile($class);

        if ($file) {
            require $file;
        }
    }

    /**
     * オートロード用メソッドの登録をする
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'), true, false);
    }

    /**
     *
     * クラス名に応じたファイルを見つける
     *
     * @param string $class
     *
     * @return string
     */
    public function findFile($class)
    {
        $pos = strrpos($class, '\\');

        if ($pos !== false) {
            $namespace = substr($class, 0, $pos);

            $dir_path = str_replace('KsOre\\', '', $namespace);

            $class_name = substr($class, $pos + 1, strlen($class));

            $class = $dir_path . '/'. $class_name;
        }

        return __DIR__.'./'.$class.'.php';;
    }
}
