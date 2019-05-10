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
       // $result = Db::execute('insert into tp_admin (userid,username,password) values (7,"黄蓉",123123)');
        //dump($result);
        
        //更新记录
        //$result = Db::execute('update tp_admin set username = "赵敏" where userid =2');
        //dump($result);
        
        //查询记录
       // $result = Db::query('select * from tp_admin where userid = 5');
        //print_r($result);
        
        //删除数据
        //$result = Db::execute('delete from tp_admin where userid = 5');
        //dump($result);
        
      //其他操作
     //显示数据库列表
     
    //$result = Db::query('show tables from tp5 ');
    //print_r($result);
    
    //清空数据表
    //$result = Db::execute('TRUNCATE table tp_admin');
    //dump($result); 
    
        
    //数据库切换查询
    //$result = Db::connect('tp51')->query('select `userid`,`username` from tp_admin where userid =4');
   // print_r($result);
    // $result = Db::connect('tp52')->query('select `userid`,`username`from  tp_admin where userid =2');
   // print_r($result);
    
     
     //或者
    //$tp51 = Db::connect('tp51');
    //$tp52 = Db::connect('tp52');
   //$tp51->query('select * from tp_admin where userid = 4');
   //$tp52->query('select * from tp_admin where userid = 2');
        
    //参数绑定
    //Db::execute('insert into tp_admin(userid,username,password) values(?,?,?)',[8,'thinkphp',123456]);
    //$result = Db::query('select * from tp_admin where userid = ?',[8]);
    //print_r($result);
        
     //命令占位符绑定
       // Db::execute('insert into tp_admin (userid,username,password) values (:userid,:username,:password)',['userid'=>9,'username'=>'超哥','password'=>'123654']);
       // $result = Db::query('select `userid`,`username`,`password` from tp_admin where userid =:userid',['userid'=>9]);
       //  print_r($result);
        
        
        
     //查询构造器
    //插入记录
     
    //  Db::table('tp_admin')->insert(['userid'=>10, 'username'=>'小米','password'=>1236547]);
      
   //更新记录
  // Db::table('tp_admin')
    //   ->where('userid',10)
      // ->update(['username' => "张三",'password' => 888666]);
   //echo "更新成功";
        
        
     //查询数据
      //  $list = Db::table('tp_admin')
         //    ->where('userid',2)
          //   ->select();
     //dump($list);
        
        
     //删除数据
        //Db::table('tp_admin')
         //   ->where('userid',11)
        //  ->delete();
     //  echo "删除成功";
        
        
    //-----推荐用的数据库语句方式------
        
      //*插入记录
    // Db::name('admin')->insert(['userid'=>12,'username'=>'马恩然','password'=>666666]);
    // echo "数据插入成功";
      
        
    //链式操作
        //查询十个满足条件的数据，并按照id倒序排序
      //$list = Db::name('admin')
        //      ->where('roleid',0)
         //     ->field('userid,username,password')
        //      ->order('userid','desc')
        //      ->limit(10)->select();
   //   dump($li st);
        
        
        
    //事务支持 在Mysql数据库中请设置表类型为InnoDB
    //把需要执行的事务操作封装到闭包里面即可自动完成事务
     //一起同时执行成功就成功，失败就回滚
      Db::transaction(function(){
       Db::table('tp_admin')->delete(13);
       Db::table('tp_admin')->insert(['userid'=>11,'username'=>'11号','password'=>123654]);
     echo "事务执行失败";
   });
   
    
    
        
    }
    
     
}
