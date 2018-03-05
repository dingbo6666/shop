<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    public function lst(){
      $goods=D('goods');
      $count= $goods->count();// 查询满足要求的总记录数
      $Page = new \Think\Page($count,2);
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
                    $this->success('添加品牌成功！',U('lst'));
                }else{
                    $this->error('添加品牌失败！');
                }
            }else{
                $this->error($goods->getError());
            }
            return;
        }
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
        $goodss=$goods->find(I('id'));
        $this->assign('goodss',$goodss);
        $this->display();
    }

    public function del(){
        if(D('goods')->delete(I('id'))){
            $this->success('删除品牌成功！',U('lst'));
        }else{
            $this->error('删除品牌失败！');
        }
    }
}
