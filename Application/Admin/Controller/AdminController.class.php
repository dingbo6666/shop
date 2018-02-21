<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function lst(){
      $admin=D('admin');
      $count=$admin->count();// 查询满足要求的总记录数
      $Page= new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('first','首页');
      $Page->setConfig('last','共%TOTAL_PAGE%页');
      $show= $Page->show();// 分页显示输出
      $adminres = $admin->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('page',$show);// 赋值分页输出
      $this->assign('adminres',$adminres);
      $this->display();
    }

    public function add(){
        $admin=D('admin');
        if(IS_POST){
          if($admin->create()){
            $admin->password=md5($admin->password);
             if($admin->add()){
             $this->success('管理员添加成功！',U('lst'));
             }else{
              $this->error('管理员添加失败！');
             }
            }else{
           $this->error($admin->getError());
            }
         return;
        }
        $this->display();
    }

    public function edit(){
        $this->display();
    }

    public function del(){
      $admin=D('admin');
      if($admin->delete(I('id'))){
          $this->success('删除管理员成功！');
      }else{
          $this->error('删除管理员失败！');
      }
    }
}
