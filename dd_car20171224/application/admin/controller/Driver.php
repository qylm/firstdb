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

class Driver extends Auto
{
    // 显示司机管理页面
    public function driver(){
        return $this->fetch();
    }

    // 显示修改密码框
    public function edit(){
        return $this->fetch();
    }

    // 显示修改密码框
    public function changepwd(){
        return $this->fetch();
    }
}