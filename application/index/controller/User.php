<?php
namespace app\index\controller;
use app\index\model\Users;
use think\Controller;
use think\Request;
use think\Db;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends Controller
{
    
    //创建用户数据页面
    public function create(){
        
        return view();
        
    } 
    
    
    //新增用户数据
    public function add()
     {
      //自动收集表单数据input('post.')
     //自动排除不相关字段
    //自动校验非法字段
   //自动生成insert语句，执行入库
        
     $users = new Users; //实例化对象:model模块必须有个对应的php文件，一个php文件对应一张表 /model/Users
    
     
     if($users->allowField(true)->validate(true)->save(input('post.')))
     {
          return '用户[ ' . $users->nickname . ':' . $users->user_id . ' ]新增成功';
          
     }
     else{
        return $users->getError();      
     }
     
     
        
    }
    
}

