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
        $sex_list   = array(
            '1' => '男',
            '2' => '女',
        );
        $year_list  = range(1970, date('Y'));
        $month_list = range(1, 12);
        $day_list   = range(1, 31);

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

        return array(
            'input'      => $input,
            'sex_list'   => $sex_list,
            'year_list'  => $year_list,
            'month_list' => $month_list,
            'day_list'   => $day_list,
        );
    }

}