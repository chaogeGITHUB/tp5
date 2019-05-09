<?php
namespace app\index\controller;
use think\Controller;
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
}
