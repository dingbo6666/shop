<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends CommonController {
    public function index(){
        $cate=D('cate');
        $navres=$cate->getnav();
        $this->assign(array(
      		'navres'=>$navres,
      		));
       	$this->display();
    }
}
