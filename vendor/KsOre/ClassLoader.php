<?php
namespace KsOre\ClassLoader;

class ClassLoader
{
    /**
     * @var string
     */
    private $file_extension = '.php';

    /**
     * @var string
     */
    private $namespace_separator = '\\';

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
        $pos = strrpos($class, $this->namespace_separator);

        if ($pos !== false) {
            $namespace = substr($class, 0, $pos);

            $register_pos = strpos($namespace, 'KsOre');
            if ($register_pos !== 0) {
                return;
            }

            $base_dir = __DIR__. '/../../vendor';

            $dir_path = $base_dir . DIRECTORY_SEPARATOR
                      . str_replace($this->namespace_separator, DIRECTORY_SEPARATOR, $namespace);

            $class_name = substr($class, $pos + 1, strlen($class));

            return $dir_path . DIRECTORY_SEPARATOR. $class_name. $this->file_extension;
        }

        return __DIR__.'./'.$class. $this->file_extension;
    }
}
