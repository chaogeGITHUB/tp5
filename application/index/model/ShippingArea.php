<?php
namespace app\index\model;
use think\Model;
use app\index\model\Region ;

class ShippingArea extends Model //配送区域表
{
//    配送区域划分
//    定义多对多关联
    public function region()
    {
//        配送区域 BELONGS_TO_MANY 地区表
        return $this->belongsToMany('Region','tp_area_region','shipping_area_id','region_id' ) ;
        
    }
    
}


