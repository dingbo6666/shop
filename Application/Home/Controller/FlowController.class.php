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

    public function flow2(){
        if(!session('id')){
            session('returnUrl','./home/flow/flow2');
            $this->error('请先登录！',U('User/login'));
        }
        $car=D('Car');
        $goodsInfo=$car->getGoodsInfo();
        $mid=session('id');
        $shrInfos=D('shrinfo')->where(array('mid'=>$mid))->find();
        $this->assign(array(
            'goodsInfo'=>$goodsInfo,
            'shrInfos'=>$shrInfos,
            ));
        $this->display();
    }

    public function ajaxupdateGN($gi,$gattr='',$gn=0){
        $car=D('Car');
        if($gn==0){
            $car->delGoods($gi,$gattr);
        }else{
            $car->uploadGoodsNum($gi,$gattr,$gn);
        }
    }

    public function clearCart(){
        $car=D('car');
        $car->clearCar();
    }

}
