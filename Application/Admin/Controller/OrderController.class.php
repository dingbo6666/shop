<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
    public function lst(){
      $order=D('order');
      $count= $order->count();// 查询满足要求的总记录数
      $Page = new \Think\Page($count,8);
      $show = $Page->show();// 分页显示输出
      $list = $order->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('list',$list);// 赋值数据集
      $this->assign('page',$show);// 赋值分页输出
      $this->display();
    }
}
