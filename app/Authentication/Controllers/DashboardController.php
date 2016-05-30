<?php  namespace LaravelAcl\Authentication\Controllers;

use View;

class DashboardController extends Controller{

    public function base()
    {
        $authentication = \App::make('authentication_helper');
        $isHasPermission = $authentication->hasPermission(array('_authority'));    //查看用户是否有该权限
        if(!$isHasPermission){
            dd('权限不足！');
        }
        return View::make('laravel-authentication-acl::admin.dashboard.default');
    }
} 