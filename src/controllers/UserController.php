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
            'name'      => isset($_POST['name'])      ? $_POST['name'] : '',
            'mail'      => isset($_POST['mail'])      ? $_POST['mail'] : '',
            'password'  => isset($_POST['password'])  ? $_POST['password'] : '',
            'sex'       => isset($_POST['sex'])       ? $_POST['sex'] : '',
            'year'      => isset($_POST['year'])      ? $_POST['year'] : '',
            'month'     => isset($_POST['month'])     ? $_POST['month'] : '',
            'day'       => isset($_POST['day'])       ? $_POST['day'] : '',
            'agreement' => isset($_POST['agreement']) ? $_POST['agreement'] : '',
        );

        return array('input' => $input);
    }

}