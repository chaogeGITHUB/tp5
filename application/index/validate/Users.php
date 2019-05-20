<?php
namespace app\index\validate;
use think\Validate;

class Users extends Validate
{
    //验证规则
    protected  $rule = [
       ['nickname','require|min:3','昵称不能为空|昵称不能少于5个字符'],
        //['email','email','邮件格式错误'],
        ['email','checkMail:www.tp-shop.cn','邮箱格式错误'],
        ['birthday','dateFormat:Y-m-d','生日格式错误，请重新输入！'],
       ];
    
    //验证邮箱格式 是否符合指定的域名
    protected function checkMail($value,$rule)
    {
        $result = strstr($value, $rule);
        if($result)
            return true;
        else
            return "邮箱必须包含 $rule 域名";
        
        
    }
    
    
}

