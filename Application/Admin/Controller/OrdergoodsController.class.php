<?php
namespace Admin\Controller;
use Think\Controller;
class OrdergoodsController extends CommonController {
    public function lst(){
      $ordergoods=D('order_goods');
      $count= $ordergoods->count();// 查询满足要求的总记录数
      $Page = new \Think\Page($count,8);
      $show = $Page->show();// 分页显示输出
      $list = $ordergoods->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('list',$list);// 赋值数据集
      $this->assign('page',$show);// 赋值分页输出
      $this->display();
    }
}
