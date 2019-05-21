<?php
namespace app\index\controller;
use app\index\model\Users;
use app\index\model\Comment;
use \think\Validate;
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
   // public function create(){
        
       // return view();
        
   // } 
    
    
    //新增用户数据
    //public function add()
     //{
      //自动收集表单数据input('post.')
     //自动排除不相关字段
    //自动校验非法字段
   //自动生成insert语句，执行入库
        
    // $users = new Users; //实例化对象:model模块必须有个对应的php文件，一个php文件对应一张表 /model/Users
    
     
          //if($users->allowField(true)->validate(true)->save(input('post.')))
         // {
        //      return '用户[ ' . $users->nickname . ':' . $users->user_id . ' ]新增成功';
       // }
      // else{
     //  return $users->getError();     
    //}
   // }
    
    

    //控制器验证
    // public function add()
   // {
   // $data = input('post.');
    //数据验证
   // $result = $this->validate($data, 'Users');
   // if(true !== $result){
   //   return $result;  
  //   }
   // $users = new Users;
    //数据保存
  //  $users->allowField(true)->save($data);
  //  return '用户[ '. $users->nickname . ':' .$userid . ' ]新增成功';
 //}
    
    
   //单独验证某字段（birthday）
   // public function add(){
     //   $data = input('post.');
        //验证birthday是否有效的日期
       // $check = Validate::is($data['birthday'],'date');
     // if(false === $check){
    //      return ' birthday日期格式非法';
    //      
    //  }
    //  $users = new Users;
      //数据保存
    // $users->allowField(true)->save($data);
   //  return '用户[ ' . $users->nickname .':' . $users->user_id . ']新增成功';
        
        
   // }
    
    
//    ----------------关联模型：一对多---------------------
    
    public function test19()
   {
        $user = Users::get(1);
        //获取User对象的nickname属性
        echo $user->nickname."<br/>";
       //获取User对象的comm关联对象
       // $user->comm; //表示user_id为1的集合数组，需要通过foreach循环出来
       //foreach($user->comm as $comm)
       //echo "评论id: {$comm->comment_id} 用户评论内容：{$comm->content}<br/>";   
      
     
     //执行关联的comm对象的查询 获取User对象的comm关联对象
     //$comm = $user->comm()->where('content','我可以为了你抛弃一切，你怎么不能为了我而抛弃一切呢')->find();
     //echo "评论id:{$comm->comment_id} 用户评论内容：{$comm->content}<br/>";
        
        
        
        
//        一对多关联新增
//        $user = Users::get(1);
//        $comment = new Comment;
//        $comment->content = '你说过的话不能不算数！';
//        $comment->add_time =time();
//        $user->comm()->save($comment);
//        
        
//       一对多批量新增
//        $user =Users::get(1);
//        $comment =[
//        ['content'=>'1111','add_time'=>time()],
//        ['content'=>'666666','add_time'=>time()],
//      ];
//        $user->comm()->saveAll($comment); //$user->comm() 表示模型—>模型中users的comm()方法
//        return '添加多条评论成功';
        
//       关联查询
//        $user = Users::get(1);  //Users::get(1,'comm');
//        $comm = $user->comm;
//        dump($comm);
        
        //关联过滤查询
//       $user = Users::get(1);
//       获取状态为1的关联数据
//    $comment = $user->comm()->where('is_show',1)->select();
//    dump($comment);
//   foreach($comment as $comm)
//       echo "评论id:{$comm->comment_id} 用户评论内容: {$comm->content}<br/>";
        
//    $comm = $user->comm()->getByContent('不，我不吃');
//     echo "评论id:{$comm->comment_id} 用户评论内容:{$comm->content}<br/>";
        
//      根据关联数据来查询当前模型数据
//        查询有评论过的用户列表
//        $user = Users::has('comm')->select();
//        dump($user);
//        查询评论过2次以上的用户
//        $user = Users::has('comm','>=',2)->select();
//        dump($user);
//        查询评论内容含有ThinkPHP5快速入门的用户
//        $user = Users::hasWhere('comm',['content'=>'你真正的心意是什么呢？'])->select();
//        dump($user);
        
//        关联更新
//        $user = Users::get(1);
//        $comm = $user->comm()->getByContent('不，我不吃');
//        $comm->content ='张无忌，你！';
//        $comm->save();
//        echo "数据更新成功";
        
//        查询构造器的update方法进行更新
//       $user = Users::get(1);
//       $user->comm()->where('content','张无忌，你！')->update(['content'=>'我敏敏特穆尔说到做到！']);
//       echo "更新数据成功";
        
//      删除部分关联数据 
//        $user = Users::get(2);
//        删除部分关联数据
//        $comm = $user->comm()->getByContent('1111');
//        $comm->delete();
//        echo "删除部分数据成功";
        
        
//       删除所有的关联数据
//        $user = Users::get(2);
//        $user->comm()->delete();
//        echo "所有的关联数据已删除";
        
        
      
   
    
    
    
    
    }  
    
}

