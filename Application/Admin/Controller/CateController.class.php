<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function lst(){
      $cate=D('cate');
      $cateres=$cate->catetree();
      $this->assign('cateres',$cateres);//获取栏目树
      $this->display();
    }

    public function add(){
      $cate=D('cate');
      if(IS_POST){
          if($cate->create()){
              if($cate->add()){
                  $this->success('添加栏目成功！',U('lst'));
              }else{
                  $this->error('添加栏目失败！');
              }
          }else{
              $this->error($cate->getError());
          }
          return;
      }
      $cateres=$cate->catetree();
      $recposres=D('recpos')->where(array('rectype'=>2))->select();
      //商品类型
      $typeRes=D('type')->select();
      $this->assign(array(
          'cateres'=>$cateres,
          'recposres'=>$recposres,
          'typeRes'=>$typeRes,
      ));//获取栏目树
      $this->display();
    }

    public function edit(){
        $cate=D('cate');
        if(IS_POST){
            if($cate->create()){
                if($cate->save() !== false){
                    $this->success('修改栏目成功！',U('lst'));
                }else{
                    $this->error('修改栏目失败！');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $id=I('id');
        $cates=$cate->find($id);
        $cateres=$cate->catetree();
        $recposres=D('recpos')->where(array('rectype'=>2))->select();
        $_recids=D('recvalue')->field('recid')->where(array('valueid'=>$id,'rectype'=>2))->select();
        $recids=array();
        foreach ($_recids as $k => $v) {
            $recids[]=$v['recid'];
        }
        $this->assign(array(
            'cateres'=>$cateres,
            'cates'=>$cates,
            'recposres'=>$recposres,
            'recids'=>$recids,
        ));
        $this->display();
      }

      public function del($id){
          $cate=D('cate');
          $childids=$cate->getchild($id);
          $childids=implode(',', $childids);
          if($cate->delete($childids)){
              $this->success('删除栏目成功！',U('lst'));
          }else{
              $this->error('删除栏目失败！');
          }
      }

    public function _before_update(&$data,$option){
    //处理商品推荐位
    D('recvalue')->where(array('valueid'=>$option['where']['id'],'rectype'=>2))->delete();
    $recid=I('recid');
    if($recid){
        foreach ($recid as $k => $v) {
            D('recvalue')->add(array(
                'valueid'=>$option['where']['id'],
                'recid'=>$v,
                'rectype'=>2,
                ));
          }
      }
  }

}
