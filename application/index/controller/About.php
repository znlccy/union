<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 16:26
 * Comment: 关于我们
 */
namespace app\index\controller;

class About extends BaseController {

    /**
     * 关于我们界面
     */
    public function index() {

        return $this->fetch();
    }

    /**
     * 顾问风采
     */
    public function consultant() {

    }


}