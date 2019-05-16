<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\Admin;
use think\Url;


class Index extends Controller
{
    public function index($name='aaa') 
    {
    
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    
    public function hello($name='World'){
        
        echo "hello:"."".$name;
        echo "<br>";
        print_r($this->request->param()); 
     }
     
     public function today($year,$month){
         
         echo "现在是 $year 年 $month 月";
         
     }
     
     public function url()
     {
         echo Url::build('url2','a=1&b=2');
         echo "</br>";
         echo url('url2','a=1&b=2');
         echo "</br>";
         echo url('url2',['a'=>1,'b'=>'2']);
         echo "</br>";
         echo url('admin/index2/url2','a=1&b=2');
         echo "</br>";
         echo url('admin/HelloWorld/hello'); //自动切换 url_convert
         echo "</br>";
         echo url('today/2017/07'); //路由规则
         echo "</br>";
         }
     
     public function url2()
             {
         print_r($this->request->param());
         
     }
     
      
     // 模型和关联
     
     public function admin(){
         
         //$a = Admin::get(2);
         //dump($a);
         
      
       //插入操作
         //$admin = new Admin;
         //$admin->email = '375707@qq.com';
         //$admin->mobile = '1008611';
         //$admin->save();
     //换种方法插入操作
         //$admin['username']='听雪楼';
        // $admin['email'] = '10086@163.com';
        // $admin['mobile'] = '1008611';
       //  if($result = Admin::create($admin))  //生成sql插入语句插入数据
               //  echo "用户id::{$result->userid} 邮件：{$result->email} 手机：{$result->mobile}";
         
     
    //批量新增
         //$admin = new Admin;
      //   $adminlist = [
         //    ['username' => '敏敏特穆尔','mobile' => '1008616','email' =>'375707@163.com'],
         //    ['username' => '敏敏特','mobile' => '10086164','email' =>'375707@163.com'],
        //  ];
       //  if($admin->saveAll($adminlist)){ //生成SQL插入语句插入数组$adminlist的内容
       //      echo "用户批量添加成功";
       //  }
         
         
         
      //查询数据
       //$admin = Admin::get(17) ;  
      // echo $admin->username;
       //echo "<br/>";
      // echo $admin->email;
    
    //因为实现了\ArrayAccess接口，可以将对象像数组一样访问
      // $admin = Admin::get(17);
       //echo $admin['username'];
      // echo "<br/>";
     //  echo $admin->mobile;
     //  echo "<br/>";
      // echo $admin['email'];
       
    //根据某个条件查询数据getByXxxx()方法
        // $admin = Admin::getByUserid('17');
    //     echo $admin['username'];
      //   echo "<br/>";
      //   echo $admin['password'];
         
      
     //如果不是根据主键查询,可以传入数组作为查询条件
    //$admin =Admin::get(['mobile'=>'1008616','email'=>'375707@163.com']);   
    //$admin =Admin::where('mobile','1008616')->find();
   // $admin =Admin::where(['mobile'=>'1008616','email'=>'375707@163.com'])->find();
   // dump($admin);
         
         //如果要查询多个数据,可以使用模型的all方法
       
         //$admin = Admin::all();
         //$admin = Admin::all(['userid'=>17]);
       // $admin = Admin::where('userid','<=',17)->select();
        // foreach ($admin as $v)
        // {
          //   echo '用户id:'.$v->userid;
           //  echo '姓名：'.$v->username;
           //  echo '<br/>';
        // }
         
         
       //对于数据库查询出来的数据更新数据
       
        // $admin =Admin::get(17);
        // $admin->mobile ='1352225811';
        // $admin->email  ='111@qq.com';
         
        // $admin ->userid =null;
        // if (false !==$admin->isUpdate(false)->save()) //$user->isUpdate(false)->save()
        //     return '更新用户成功';
       //  else
       //      return $admin->getError();
         
       
        //自己定义是数据更新操作
         //$admin['mobile'] = '123456789';
        // $admin['email']='3757@qq.com';
         //$admin['username']='敏敏是我';
        // Admin::update($admin,['userid'=>19]);
       //  echo "更新成功"; 
         
        //删除操作
         //$admin =Admin::get(18);
         //$admin->delete();
         //echo '删除成功';
     //或者使用
         //Admin::destroy(18);
         
         
    }  
}
