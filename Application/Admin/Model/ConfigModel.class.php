<?php
namespace Admin\Model;
use Think\Model;
class ConfigModel extends Model {
    public function _before_insert(&$data,$option){
        $data['values']=str_replace('，', ',', $data['values']);
    }

    public function _before_update(&$data,$option){
        if($data['values']){
            $data['values']=str_replace('，', ',', $data['values']);
        }
    }

}
