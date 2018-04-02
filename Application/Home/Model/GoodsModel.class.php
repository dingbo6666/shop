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
    //商品会员价格
    public function levelPrice($goodsId){
    	$memberLevel=D('memberLevel')->select();
    	$goods=$this->field('shop_price')->find($goodsId);
    	$shopPrice=$goods['shop_price'];
    	$levelPrice=array();
    	foreach ($memberLevel as $k => $v) {
    		$rate=$v['rate'];
    		$memberPrice=D('memberPrice')->field('price')->where(array('goods_id'=>$goodsId,'level_id'=>$v['id']))->find();
    		$memberPrice=$memberPrice['price'];
    		if($memberPrice){
	    		$levelPrice[$k]['price']=$memberPrice;
	    		$levelPrice[$k]['levelname']=$v['level_name'];
    		}else{
    			$levelPrice[$k]['price']=($shopPrice*$rate)/100;
	    		$levelPrice[$k]['levelname']=$v['level_name'];
    		}
    	}
    	return $levelPrice;
    }

    //计算会员价格
    public function getMemberPrice($goodsId){
        $rate=session('rate');
        $levelId=session('levelId');
        if($levelId){
            $mprice=D('memberPrice')->field('price')->where(array('level_id'=>$levelId,'goods_id'=>$goodsId))->find();
            if($mprice){
                $mprice=$mprice['price'];
            }else{
                $shopPrice=$this->field('shop_price')->find($goodsId);
                $shopPrice=$shopPrice['shop_price'];
                $mprice=($shopPrice*$rate)/100;
            }
        }else{
            $shopPrice=$this->field('shop_price')->find($goodsId);
            $mprice=$shopPrice['shop_price'];
        }
        return $mprice;
    }

}
