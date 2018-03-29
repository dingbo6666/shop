<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $goods=D('goods');
        $bestgoods=$goods->getrecgoods(3,5); //精品推荐商品
        $hotgoods=$goods->getrecgoods(2,5); //热卖推荐商品
        $newgoods=$goods->getrecgoods(1,5); //最新推荐商品
        $cheapgoods=$goods->getrecgoods(4,4); //特价推荐商品
        $cate=D('cate');
        $reccatesres=$cate->getreccates(5,6,3);
        $navres=$cate->getnav();
        $this->assign(array(
      		'bestgoods'=>$bestgoods,
      		'hotgoods'=>$hotgoods,
      		'newgoods'=>$newgoods,
      		'cheapgoods'=>$cheapgoods,
          'reccatesres'=>$reccatesres,
          'navres'=>$navres,
      		));
        $this->display();
      }

      public function sendmail(){
          $send=SendMail('18504239629@163.com','测试邮件','欢迎光临美妆电子商城，点击一下链接验证账号。');
          dump($send);
      }
}
