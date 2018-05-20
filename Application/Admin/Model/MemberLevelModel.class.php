<?php
namespace Admin\Model;
use Think\Model;
class MemberLevelModel extends Model {

    protected $_validate = array(
      array('level_name','require','会员等级名称不得为空！',1),
      array('points_min','require','积分下限不得为空！',1),
      array('points_max','require','积分上限不得为空！',1),
      array('rate','require','折扣率不得为空！',1),
      array('level_name','','会员等级名称不得重复！',1,unique),
    );
    
}
