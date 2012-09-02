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
            $input = array(
                'name'      => $this->request->getPost('name',      ''),
                'mail'      => $this->request->getPost('mail',      ''),
                'password'  => $this->request->getPost('password',  ''),
                'sex'       => $this->request->getPost('sex',       ''),
                'year'      => $this->request->getPost('year',      ''),
                'month'     => $this->request->getPost('month',     ''),
                'day'       => $this->request->getPost('day',       ''),
                'agreement' => $this->request->getPost('agreement', ''),
            );
        }


        return array('input' => $input);
    }

}