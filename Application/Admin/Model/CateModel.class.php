<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {

    protected $_validate = array(
      array('catename','require','栏目名称不得为空！',1),
    );

    public function catetree(){
        $data=$this->order('id desc')->select();
        return $this->resort($data);
    }

    public function resort($data,$pid=0,$level=0){
        static $arr=array();
        foreach ($data as $k => $v) {
            if($v['pid']==$pid){
                $v['level']=$level;
                $arr[]=$v;
                $this->resort($data,$v['id'],$level+1);
            }
        }
        return $arr;
    }
    
}
