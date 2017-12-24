<?php
namespace app\admin\controller;
/*
引用公共控制层
*/
use \app\admin\controller\Auto;
/*
引用数据库操作类
*/
use \think\Db;
/*
引用session
*/
use \think\Session;
/*
引用指定回复信息格式（json）
*/
use \think\Response;
/*
	使用tp框架的缓存类
*/
use \think\Cache;

class Passenger extends Auto
{
    /*
         1）方法用途：显示乘客管理页面
         2）方法参数：
    */
    public function passenger()
    {
        return $this->fetch();
    }

    /*
        1）方法用途：显示用户信息编辑框
        2）方法参数：
   */
    public function edit(){
        return $this->fetch();
    }

    /*
        1）方法用途：显示修改密码框
        2）方法参数：
   */
    public function changepwd(){
        return $this->fetch();
    }
}