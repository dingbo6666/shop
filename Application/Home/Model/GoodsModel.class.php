<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{

    public function getrecgoods($recid,$limit){
    	$goodsid=D('recvalue')->field('valueid')->where(array('recid'=>$recid))->limit($limit)->select();
    	$recgoods=array();
    	foreach ($goodsid as $k => $v) {
    		$recgoods[]=D('goods')->find($v['valueid']);
    	}
    	return $recgoods;
    }
    
}
