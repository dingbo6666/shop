<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
       //底部帮助信息
        $this->gethelp();
        $this->getnav();
    }

    public function gethelp(){
    	$hcres=D('category')->where(array('type'=>1))->select();
    	foreach ($hcres as $k => $v) {
    		$hcres[$k]['article']=D('article')->where(array('cateid'=>$v['id']))->select();
    	}
    	$this->assign('hcres',$hcres);
    }

    public function getnav(){
        $nav_res=D('nav')->select();
        $navres=array();
        foreach ($nav_res as $k=>$v) {
            $navres[$v['nav_pos']][]=$v;
        }
        $this->assign(array(
            'topnav'=>$navres['1'],
            'midnav'=>$navres['2'],
            'bottomnav'=>$navres['3'],
            ));
    }

}
