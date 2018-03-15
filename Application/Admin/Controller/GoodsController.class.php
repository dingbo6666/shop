<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    public function lst(){
      $goods=D('GoodsView');
      $count= $goods->count();// 查询满足要求的总记录数
      $Page = new \Think\Page($count,8);
      $show = $Page->show();// 分页显示输出
      $list = $goods->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('list',$list);// 赋值数据集
      $this->assign('page',$show);// 赋值分页输出
      $this->display();
    }

    public function add(){
        $goods=D('goods');
        if(IS_POST){
            if($goods->create()){
                if($goods->add()){
                    $this->success('添加商品成功！',U('lst'));
                }else{
                    $this->error('添加商品失败！');
                }
            }else{
                $this->error($goods->getError());
            }
            return;
        }
        $cateres=D('cate')->catetree();
        $brandres=D('brand')->select();
        $levres=D('memberLevel')->select();
        $typeres=D('type')->select();
        $this->assign(array(
            'cateres'=>$cateres,
            'brandres'=>$brandres,
            'levres'=>$levres,
            'typeres'=>$typeres,
            ));
        $this->display();
    }

    public function edit(){
        $goods=D('goods');
        if(IS_POST){
            if($goods->create()){
                if($goods->save()){
                    $this->success('修改品牌成功！',U('lst'));
                }else{
                    $this->error('修改品牌失败！');
                }
            }else{
                $this->error($goods->getError());
            }
            return;
        }
        $goods=$goods->find(I('id'));
        $this->assign('goods',$goods);
        $this->display();
    }

    public function product($id){
        $pro=D('product');
        if(IS_POST){
            $goods_num=I('goods_num');
            $goods_attr=I('goods_attr');
            $pro->where(array('goods_id'=>$id))->delete();
            foreach ($goods_num as $k=>$v) {
                $_attr=array();
                foreach ($goods_attr as $k1=>$v1) {
                    if((int)$v1[$k]<=0){
                        continue 2;
                    }
                    $_attr[]=$v1[$k];
                }
                sort($_attr);
                $goodsAttrStr=implode(',',$_attr);
                $pro->add(array(
                    'goods_id'=>$id,
                    'goods_number'=>$v,
                    'goods_attr'=>$goodsAttrStr
                    ));
            }
            $this->success('添加库存成功！');
            return;
        }
        $goods=D('goods');
        $_radioAttr=$goods->getRadioAttr($id);
        $radioAttr=array();
        foreach ($_radioAttr as $k=>$v) {
            $radioAttr[$v['attr_id']][]=$v;
        }
        $prores=$pro->where(array('goods_id'=>$id))->order('id desc')->select();
        $this->assign(array(
            'radioAttr'=>$radioAttr,
            'prores'=>$prores
            ));
        $this->display();
    }

    public function del(){
        if(D('goods')->delete(I('id'))){
            $this->success('删除品牌成功！',U('lst'));
        }else{
            $this->error('删除品牌失败！');
        }
    }

    public function ajaxgetattr($typeid){
        $data=D('attr')->where(array('type_id'=>$typeid))->select();
        echo json_encode($data);
    }

}
