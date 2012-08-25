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
     * @var array
     */
    private $namespaces = array();

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

            foreach ($this->namespaces as $ns => $base_dir) {
                $register_pos = strpos($namespace, $ns);
                if ($register_pos !== 0) {
                    continue;
                }

                $dir_path = $base_dir . DIRECTORY_SEPARATOR
                          . str_replace($this->namespace_separator, DIRECTORY_SEPARATOR, $namespace);

                $class_name = substr($class, $pos + 1);

                return $dir_path . DIRECTORY_SEPARATOR. $class_name. $this->file_extension;
            }
        }

        return __DIR__.'./'.$class. $this->file_extension;
    }

    /**
     * オートロードするクラスの名前空間とディレクトリの対応を登録する
     *
     * @param string $namespace
     * @param string $dir
     */
    public function registerNameSpace($namespace, $dir)
    {
        $this->namespaces = array($namespace => $dir);
    }
}
