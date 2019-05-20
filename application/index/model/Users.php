<?php
namespace app\index\model;
use think\Model;
class Users extends Model
{
  //定义关联方法
    public function comm(){
        
      return $this->hasMany('Comment','uid','user_id');
        
    }
    
}
 
