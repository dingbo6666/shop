<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model {

  protected $_validate = array(
    array('goods_name','require','商品名称不得为空！',1),
    array('cate_id','require','商品分类不得为空！',1),
    array('market_price','require','市场价格不得为空！',1),
    array('shop_price','require','本店价格不得为空！',1),
    array('goods_name','','商品名称不得重复！',1,unique,3),
  );

    public function _before_insert(&$data,$option){
        if($_FILES['original']['tmp_name']){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->autoSub = false;
            $upload->savePath  =      './Public/Uploads/Goods/'; // 设置附件上传目录
            $upload->rootPath  =      './';
            $info   =   $upload->uploadOne($_FILES['original']);
            $original=$info['savepath'].$info['savename'];
            $max_thumb=$info['savepath'].'max_'.$info['savename'];
            $mid_thumb=$info['savepath'].'mid_'.$info['savename'];
            $sm_thumb=$info['savepath'].'sm_'.$info['savename'];
            $image = new \Think\Image();
            $image->open($original);
            $image->thumb(362, 362)->save($max_thumb);
            $image->thumb(222, 222)->save($mid_thumb);
            $image->thumb(67, 67)->save($sm_thumb);
            $data['original']=$original;
            $data['max_thumb']=$max_thumb;
            $data['mid_thumb']=$mid_thumb;
            $data['sm_thumb']=$sm_thumb;
        }
        $data['goods_sn']=time().rand(111111,999999);
        if($data['onsale']){
            $data['onsale']=1;
        }else{
            $data['onsale']=0;
        }
    }

    public function _before_update(&$data,$option){
        if($_FILES['brand_logo']['tmp_name']){
            if(I('oldlogo')){
                if(file_exists(I('oldlogo'))){
                @unlink(I('oldlogo'));
                }
            }
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->autoSub = false;
            $upload->savePath  =      './Public/Uploads/Brand/'; // 设置附件上传目录
            $upload->rootPath  =      './';
            $info   =   $upload->uploadOne($_FILES['brand_logo']);
            $logo=$info['savepath'].$info['savename'];
            $image = new \Think\Image();
            $image->open($logo);
            $image->thumb(100, 30)->save($logo);
            $data['brand_logo']=$logo;
        }
    }

    public function _before_delete($option){
        $id=$option['where']['id'];
        $this->field('brand_logo')->find($id);
        if($this->brand_logo){
            if(file_exists($this->brand_logo)){
                @unlink($this->brand_logo);
            }
        }
    }

}
