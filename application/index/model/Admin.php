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
          
          $query->where('username',"敏敏特穆尔");
      }
      
  }


