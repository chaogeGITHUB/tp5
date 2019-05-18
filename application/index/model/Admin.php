<?php
namespace app\index\model;
use think\Model;
  
  class Admin extends Model
  {
      //email查询
      
      protected function scopeEmail($query){ //以scope认为的就是查询范围
           $query->where('email','111@qq.com');
          
      }
      
      //status查询
      protected function scopeUsername($query){
          
          $query->where('username',"张无忌");
      }
      
      
     //全局查询范围
      protected static function base($query) //base 基础的、公共的
     {
       $query->where('userid',1);    
          
      }
      
      
  }


