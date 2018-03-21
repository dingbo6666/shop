<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
       //底部帮助信息
        $this->gethelp();
    }

    public function gethelp(){
    	$hcres=D('category')->where(array('type'=>1))->select();
    	foreach ($hcres as $k => $v) {
    		$hcres[$k]['article']=D('article')->where(array('cateid'=>$v['id']))->select();
    	}
    	$this->assign('hcres',$hcres);
    }

}
