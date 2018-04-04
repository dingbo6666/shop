<?php
namespace Home\Controller;
class FlowController extends CommonController {

    public function addToCar(){
        $goodsId=I('goods_id');
        $goodsNum=I('number');
        $goodsAttr=I('goods_attr');
        sort($goodsAttr);
        $goodsAttr=implode(',', $goodsAttr);
        $car=D('Car');
        $car->addToCar($goodsId,$goodsAttr,$goodsNum);
        $this->success('加入购物车成功！正在为您跳转...',U('flow1'));
    }

    public function flow1(){
        $car=D('Car');
        $goodsInfo=$car->getGoodsInfo();
        $this->assign('goodsInfo',$goodsInfo);
        dump($goodsInfo);
        $this->display();
    }

}
