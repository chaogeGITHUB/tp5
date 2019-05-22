<?php
namespace app\index\model;
use think\Model;
use app\index\model\Car;
class Users extends Model
{
  //定义关联一对多方法
    public function comm(){
        
      return $this->hasMany('Comment','uid','user_id');
        
    }
    
   //定义关联一对一的方法 
    public function car(){
        
     //用户HAS ONE档案关联
        return $this->hasOne('Car','uid','user_id');
         
    }
    
}
 
