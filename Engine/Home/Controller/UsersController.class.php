<?php
namespace Home\Controller;

use Think\Controller;

class UsersController extends Controller
{
    /**
     * 验证用户名密码是否正确
     * @author 风雨雾凇,
     * @version     [version]
     * @anotherdate 2017-01-11
     * @param       [type]     $name [用户名]
     * @param       [type]     $pw   [密码]
     * @return      [type]           [description]
     */
    public function checkUser()
    {
        $name = I('post.name');
        $pw   = I('post.pw');
        if (empty($name)) {
            $res = array(
                'Status' => 0,
                'Mes'    => '用户名不规范',
            );
            $this->ajaxReturn($res);
        } else if (empty($pw)) {
            $res = array(
                'Status' => 0,
                'Mes'    => '密码不规范',
            );
            $this->ajaxReturn($res);
        } else {
            $model = D('Users');
            $res   = $model->checkUser($name, $pw);
            if ($res) {
                $res = array(
                    'power'  => $res['power'],
                    'Status' => 200,
                    'Mes'    => '登录成功！',
                );
                session('name', $name);
            } else {
                $res = array(
                    'Status' => 1,
                    'Mes'    => '账号密码不匹配',
                );
            }
            $this->ajaxReturn($res);
        }
    }
    /**
     * 获取用户权限
     * @author 风雨雾凇,
     * @version     [version]
     * @anotherdate 2017-01-12
     * @return      power     权限
     */
    public function getPower()
    {
        $model = D('users');
        $power = $model->getPower();
        return $power;
    }

    /**
     * 设置老师管理权限
     * @author 风雨雾凇,
     * @version     [version]
     * @anotherdate 2017-01-12
     */
    public function setPower()
    {
        $model = D('Users');
        $model->setPower();
    }

}
