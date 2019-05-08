<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Controller
{
    public function index($name='超哥', $sex='男',$age='24岁')
    {            
     echo "hello: " ."我的名字叫作:"." ".$name." ，"."性别：".$sex." ，"."今年".$age."了！";
    }
    
    public function index2($name = '张三')
    {              
        return "index2";
    } 
    public function index3($name = '张三')
    {              
        return "index2";
    }      
}
