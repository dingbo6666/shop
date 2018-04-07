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

    //处理下订单的数据
    public function flow3(){
        if(!session('id')){
            session('returnUrl','./home/flow/flow2');
            $this->error('请先登录！',U('User/login'));
        }
        //检查购物车是否有商品
        $car=D('Car');
        $cardata=$car->getGoodsInfo();
        if(!count($cardata)){
            $this->error('购物车没有商品数据！');
        }
        //php文件锁
        $fp=fopen('./order.lock', 'r');
        flock($fp,LOCK_EX);//排他锁
        //检查商品库存量
        $tweight=0;
        foreach ($cardata as $k => $v) {
            $tweight+=$v['goods_weight'];
            $gn=D('goods')->getGoodsNum($v['goods_id'],$v['goods_attr_ids']);
            if($v['number']>$gn){
                $this->error('商品名为：'.$v['goodsName'].'商品属性为：'.$v['attrStr'].'库存不足！请减少购买数量！');
            }
        }
        //处理订单
        //1、收货地址
        $data=I('post.');
        $shrInfo=D('shrinfo');
        $mid=session('id');
        $shrInfos=$shrInfo->where(array('mid'=>$mid))->find();
        if(!$shrInfos){
            $shrInfo->add(array(
                'shr'=>$data['shr'],
                'province'=>$data['province'],
                'city'=>$data['city'],
                'county'=>$data['county'],
                'adress'=>$data['adress'],
                'phone'=>$data['phone'],
                'mid'=>$mid
                ));
        }else{
            $shrInfo->where(array('mid'=>$mid))->save(array(
                'shr'=>$data['shr'],
                'province'=>$data['province'],
                'city'=>$data['city'],
                'county'=>$data['county'],
                'adress'=>$data['adress'],
                'phone'=>$data['phone'],
                ));
        }
        //2、订单基本信息
        $order=D('order');
        $order_id=$order->add(array(
            'sn'=>time().rand(111111,999999),
            'addtime'=>time(),
            'shr'=>$data['shr'],
            'province'=>$data['province'],
            'city'=>$data['city'],
            'county'=>$data['county'],
            'adress'=>$data['adress'],
            'phone'=>$data['phone'],
            'mid'=>$mid,
            'peisong'=>$data['peisong'],
            'pay'=>$data['pay'],
            'pay_status'=>$pay_status,
            'gtprice'=>$data['gtprice'],//商品总价格
            'yprice'=>$yunfei,//运费价格
            'tprice'=>$torder,//商品和运费总和
            ));
            //3、订单的商品信息
            if($order_id){
                $orderGoods=D('orderGoods');
                foreach ($cardata as $k => $v) {
                  $orderGoods->add(array(
                    'goods_id'=>$v['goods_id'],
                    'goods_name'=>$v['goodsName'],
                    'goods_attr_id'=>$v['goods_attr_ids'],
                    'goods_attr_str'=>$v['attrStr'],
                    'goods_price'=>$v['mprice'],
                    'goods_marketprice'=>$v['marketPrice'],
                    'goods_num'=>$v['number'],
                    'order_id'=>$order_id,
                    ));
                }
                $car=D('car');
                $car->clearCar();
            }
            //减少商品库存量
            if($this->config['delpro']=='下单时'){
                foreach ($cardata as $k => $v) {
                    D('product')->where(array('goods_id'=>$v['goods_id'],'goods_attr'=>$v['goods_attr_ids']))->setDec('goods_number',$v['number']);
                }
            }
            //释放锁
            flock($fp,LOCK_UN);
            fclose($fp);
            $this->success('下单成功！',U('flow4',array('order_id'=>$order_id,'torder'=>$torder)));
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
