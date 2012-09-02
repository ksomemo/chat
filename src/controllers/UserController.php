<?php
use KsOre\Controller\Controller;

/**
 * ユーザ
 */
class UserController extends Controller
{
    /**
     * 登録
     */
    public function registerAction()
    {
        $input = array(
            'name'      => '',
            'mail'      => '',
            'password'  => '',
            'sex'       => '',
            'year'      => '',
            'month'     => '',
            'day'       => '',
            'agreement' => '',
        );

        if ($this->request->isPost()) {
            foreach ($input as $name => $default) {
                $input[$name] = $this->request->getPost($name, $default);
            }
        }

        return array('input' => $input);
    }

}