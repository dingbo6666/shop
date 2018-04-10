<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends CommonController {
    public function index(){
        $cate=D('cate');
        $navres=$cate->getnav();
        $cateid=I('id');
        //商品列表分页信息
      	$goods=D('goods');
        $cateids=D('cate')->getchild($cateid);
        $cateids=implode(',', $cateids);
        $map['cate_id']=array('IN',$cateids);
      	$count=$goods->where($map)->count();
      	$Page=new \Think\Page($count,4);
      	$Page->setConfig('prev','上一页');
      	$Page->setConfig('next','下一页');
      	$Page->setConfig('first','首页');
      	$Page->setConfig('last','末页');
      	$show=$Page->show();
          $ob=I('ob');
          $ow=I('ow');
          if(!$ob){
              $ob='addtime';
          }
          if(!$ow){
              $ow='desc';
          }
        $list=$goods->where($map)->order($ob.' '.$ow)->limit($Page->firstRow.','.$Page->listRows)->select();
        //当前位置
        $pos=$cate->getparents($cateid);
        $pos=array_reverse($pos);
      	$pos[]=$cate->find($cateid);
        $this->assign(array(
      		'navres'=>$navres,
          'pos'=>$pos,
          'list'=>$list,
      		'Page'=>$show,
          'cateid'=>$cateid,
          'ob'=>$ob,
          'ow'=>$ow,
      		));
       	$this->display();
    }
}
