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
    
    public function sjk(){
        //插入记录
       // $result = Db::execute('insert into tp_admin (userid,username,password) values (2,"超哥",123123)');
        //dump($result);
        
        //更新记录
        $result = Db::execute('update tp_admin set username = "赵敏" where userid =2');
        dump($result);
        
        
        
    }
    
     
}
