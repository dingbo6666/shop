<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="484519446">
<meta name="Description" content="484519446">
<title><?php echo ($configres["sitename"]); ?>商城首页</title>
<link rel="shortcut icon" href="mbmeilishuo/favicon.ico">
<link rel="icon" href="mbmeilishuo/animated_favicon.gif" type="image/gif">
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="RSS|童老师thinkphp交流群：484519446 - Powered by ECShop" href="mbmeilishuo/feed.php">
<script src="/shop/Public/style/hm.js"></script><script type="text/javascript" src="/shop/Public/style/common.js"></script><script type="text/javascript" src="/shop/Public/style/index.js"></script></head>
<body class="index_page" style="min-width:1200px;">
<link href="/shop/Public/style/qq.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.chuanke.com/s2260700.html
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}

//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>

<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
                }
                else
                {
                    DisSub.style.display = "none";
                }
            }
    </script>
    <div class="block">
        <ul class="top_bav_l">
        <li class="top_sc">
           <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a>
        </li>
            <li>关注我们：</li>
            <li style="border:none" class="menuPopup" onmouseover="sw_nav(1,1);" onmouseout="sw_nav(1,0);">
            <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a>
            <div id="DisSub_1" class="top_nav_box  top_weibo">
            <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a>
            </div>
            </li>
            <li class="menuPopup" onmouseover="sw_nav(2,1);" onmouseout="sw_nav(2,0);">
            <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a>
            <div id="DisSub_2" class="weixinBox" style="display: none;">
            <img src="/shop/Public/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" height="190" width="150">
            </div>
            </li>
        </ul>
        <div class="header_r">
        <script type="text/javascript" src="/shop/Public/style/transport.js"></script>
				<script type="text/javascript" src="/shop/Public/style/utils.js"></script>
				<font id="login_check"></font>
        </div>
    </div>
</div>
<div class=" block header_bg" style="margin-bottom: 0px;">
  <div class="clear_f"></div>
  <div class="header_top logo_wrap"> <a class="logo_new" href="mbmeilishuo/index.php"><img src="/shop/Public/images/logo.gif"></a>
    <div class="ser_n">
      <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()">
        <div class="search-table"> <span class="cur" data-type="1">宝贝</span> <em class="arrow"></em> </div>
        <span class="ipt1"><em class="i_search"></em>
        <input name="keywords" id="keyword"  value="1111111111" class="searchKey" type="text">
        </span> <span class="ipt2">
        <input name="imageField" class="fm_hd_btm_shbx_bttn" value="搜 索" type="submit">
        </span>
      </form>
      <div class="clear_f"></div>
      <ul class="searchType none_f">
      </ul>
			<div style="padding:10px 0;">
      <span>热门搜索：</span>
      <?php
 $keywordsarr=explode(',', $configres['searchkeywords']); foreach ($keywordsarr as $k => $v): ?>
      <a href="htt://127.0.0.1/shop/index.php/index/search/index/keywords/<?php echo $v;?>"><?php echo $v;?></a>
      <?php endforeach;?>
      </div>
    </div>
    <ul class="cart_info">
      <li id="ECS_CARTINFO"><span class="carts_num none_f"><a href="mbmeilishuo/flow.php" title="查看购物车">0</a></span> <em class="i_cart">&nbsp;</em><a href="mbmeilishuo/flow.php">查看购物车</a></li>
      <li><a href="mbmeilishuo/user.php" target="_blank"><em class="i_order">&nbsp;</em>我的订单</a></li>
    </ul>
  </div>
</div>
<div style="clear:both"></div>

<div class="menu_box clearfix">
<div class="block">
<div class="menu">
  <a href="mbmeilishuo/index.php">首页<span></span></a>
	<?php if(is_array($midnav)): $i = 0; $__LIST__ = $midnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["nav_url"]); ?>" <?php if($nav['nav_blank'] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($nav["nav_name"]); ?><span></span></a><?php endforeach; endif; else: echo "" ;endif; ?>

 </div>
</div>
</div>


<style type="text/css">
.container, .container *{margin:0; padding:0;}
.container{width:100%; height:419px; overflow:hidden;position:relative;}
.slider{position:absolute; width:100%; height:419px;}
.slider li , .slider li a{list-style:none; float:left;width:100%; height:419px;}
.slider img{width:100%; height:419px; display:block;}
.slider2{width:2000px;}
.slider2 li{float:left;}
.num{position:absolute; right:5px; bottom:5px; width:800px; margin:0 auto;}
.num li{
	float: left;
	color: #f69;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #f69;
	background-color: #fff;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #f69;
	font-weight: bold;
}
</style>

<link href="/shop/Public/style/shop.css" type="text/css" rel="stylesheet" />
<div style="overflow: hidden; position: relative;" class="container" id="idTransformView">
  <div class="flexslider">
	<ul class="slides">
		<li style="background:url(http://demo.lanrenzhijia.com/2014/alipay0423/images/img1.jpg) 50% 0 no-repeat;"></li>
		<li style="background:url(http://demo.lanrenzhijia.com/2014/alipay0423/images/img2.jpg) 50% 0 no-repeat;"></li>
		<li style="background:url(http://demo.lanrenzhijia.com/2014/alipay0423/images/img3.jpg) 50% 0 no-repeat;"></li>
		<li style="background:url(http://demo.lanrenzhijia.com/2014/alipay0423/images/img4.jpg) 50% 0 no-repeat;"></li>
		<li style="background:url(http://demo.lanrenzhijia.com/2014/alipay0423/images/img5.jpg) 50% 0 no-repeat;"></li>
	</ul>
</div>
</div>
<script src="/shop/Public/style/jquery.min.js"></script>
<script src="/shop/Public/style/jquery.flexslider-min.js"></script>
<script>
$(function(){
	$('.flexslider').flexslider({
		directionNav: true,
		pauseOnAction: false
	});
});
</script>

<div class="blank5"></div>
<div class="blank"></div><div class="blank"></div>
<div class="block clearfix">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="";
                }
            }
</script>

<div id="category_tree">
<dl class="clearfix" style=" margin-top:-455px; z-index:999">
<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="dt" <?php if($i == count($navres)): ?>style="border-bottom:none;"<?php endif; ?>onmouseover="sw_nav2(<?php echo ($key+1); ?>,1);" onmouseout="sw_nav2(<?php echo ($key+1); ?>,0);">

      <div class="" id="HandleLI2_<?php echo ($key+1); ?>">
      <a class="a" href="mbmeilishuo/category.php?id=132"><?php echo ($vo1["catename"]); ?>
        <img src="/shop/Public/images/biao8.gif">
      </a>
      </div>
<dd id="DisSub2_<?php echo ($key+1); ?>" style="display: none;">
<?php foreach ($vo1['children'] as $k2 => $v2):?>
<a class="over_2" href="mbmeilishuo/category.php?id=138"><?php echo $v2['catename'];?></a>
<div class="clearfix">
<?php foreach ($v2['children'] as $k3 => $v3):?>
<a class="over_3" href="mbmeilishuo/category.php?id=139"><?php echo $v3['catename'];?></a>
<?php endforeach;?>
</div>
<?php endforeach;?>

</dd>
</div><?php endforeach; endif; else: echo "" ;endif; ?>

</dl>
</div>
<div class="AreaL">

<div class="box">
 <div class="box_1">
  <h3>
  <span><a href="mbmeilishuo/article_cat.php?id=12">站内快讯</a></span>
  <a href="mbmeilishuo/article_cat.php?id=12"><img src="/shop/Public/images/more.gif" alt="more"></a>
  </h3>
  <div class="boxCenterList RelaArticle">
    <a href="mbmeilishuo/article.php?id=41" title="卡帕春装仅需139起！重庆九龙坡自提点变更！">卡帕春装仅需139起！重庆九龙坡自提点变更！</a> 2012-03-01<br>
    <a href="mbmeilishuo/article.php?id=40" title="春天花花读书会6折封顶苏川辽大家电配送范围扩">春天花花读书会6折封顶苏川辽大家电配送范围扩</a> 2012-03-01<br>
    <a href="mbmeilishuo/article.php?id=39" title="酷派7260黑白首发试用用电视也能上京东购物">酷派7260黑白首发试用用电视也能上京东购物</a> 2012-03-01<br>
    <a href="mbmeilishuo/article.php?id=38" title="3.8女人节电脑数码攻略!重庆江北自提点变更！">3.8女人节电脑数码攻略!重庆江北自提点变更！</a> 2012-03-01<br>
    </div>
 </div>
</div>
<div class="blank5"></div>

</div>
<div class="Arear">
<div class="sale_box clearfix">
  <h3><span>特价商品</span></h3>
        <div class="clearfix">
              <?php if(is_array($cheapgoods)): $i = 0; $__LIST__ = $cheapgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><ul class="clearfix">
                 <li class="goodsimg">
                   <a href="mbmeilishuo/goods.php?id=134">
                     <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="B_blue" border="0">
                   </a>
                 </li>
          	     <li>
                   <p>
                   <a href="mbmeilishuo/goods.php?id=134" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
                   </p>
                 促销价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
                </li>
                 </ul><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
</div>

<div class="blank" style="height:1px;"></div>

</div>
  <div class="goodsBox_1">
<div class="xm-box">
<h4 class="title"><span>新品上架</span> <a class="more" href="mbmeilishuo/search.php?intro=new">更多</a></h4>
    <div id="show_new_area" class="clearfix">
          <?php if(is_array($newgoods)): $i = 0; $__LIST__ = $newgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem">
          <a href="mbmeilishuo/goods.php?id=134">
            <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg">
          </a><br>
          <p class="f1">
            <a href="mbmeilishuo/goods.php?id=134" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
          </p>
            市场价：<font class="market"><?php echo ($goods["market_price"]); ?>元</font><br>
            本店价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="blank"></div>
<div class="xm-box">
<h4 class="title"><span>热卖商品</span> <a class="more" href="mbmeilishuo/search.php?intro=hot">更多</a></h4>
<div id="show_hot_area" class="clearfix">
    <?php if(is_array($hotgoods)): $i = 0; $__LIST__ = $hotgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem">
         <a href="mbmeilishuo/goods.php?id=134">
           <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg">
         </a><br>
         <p class="f1">
           <a href="mbmeilishuo/goods.php?id=134" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
         </p>
         市场价：<font class="market"><?php echo ($goods["market_price"]); ?>元</font><br>
         本店价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
<div class="blank"></div>
<div class="xm-box">
<h4 class="title"><span>精品推荐</span> <a class="more" href="mbmeilishuo/search.php?intro=best">更多</a></h4>
<div id="show_best_area" class="clearfix">
    <?php if(is_array($bestgoods)): $i = 0; $__LIST__ = $bestgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem">
         <a href="mbmeilishuo/goods.php?id=134">
           <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg">
         </a><br>
         <p class="f1">
           <a href="mbmeilishuo/goods.php?id=134" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
         </p>
         市场价：<font class="market"><?php echo ($goods["market_price"]); ?>元</font><br>
         本店价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>
<div class="blank"></div>
<?php if(is_array($reccatesres)): $i = 0; $__LIST__ = $reccatesres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="xm-box">
<h4 class="title"><span><?php echo ($vo["catename"]); ?></span> <a class="more" href="<?php echo ($vo["id"]); ?>">更多</a></h4>
<div id="show_hot_area" class="clearfix">
          <?php foreach ($vo['recgoods'] as $k => $v):?>
            <div class="goodsItem">
           <a href="mbmeilishuo/goods.php?id=134">
             <img src="/shop<?php echo $v['mid_thumb'];?>" alt="1" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=134" title="1"></a></p>
           市场价：<font class="market"><?php echo $v['market_price'];?>元</font> <br>
           本店价：<font class="f1"><?php echo $v['shop_price'];?>元</font>
          </div>
          <?php endforeach;?>
</div>
</div>
<div class="blank"></div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

    </div>




    <a href="http://www.chuanke.com/s2260700.html/" class="ecmoban">ecshop</a>

<div class="footer">
  <div class="foot_con">
    <div class="f_list service_info">
      <div class="kefu"> <span class="tel_ico"></span>
        <p class="f20_f">4000-021-758</p>
        <p class="f14_f mt4_f">模板堂客服热线</p>
      </div>
      <ol class="business">
        <li>周一至周日：09:00-22:00</li>
      </ol>
    </div>
    <?php if(is_array($hcres)): $i = 0; $__LIST__ = $hcres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="f_list">
        <h4><?php echo ($vo["catename"]); ?></h4>
        <ul>
          <?php if(is_array($vo['article'])): $i = 0; $__LIST__ = $vo['article'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="/mbmeilishuo/article.php?id=9" title="售后流程"><?php echo ($vo2["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>

      <div class="f_list">
      <h4>关注我们</h4>
      <ul>
        <li class="sina_attention"> <a href="http://weibo.com/ECMBT/home?topnav=1&amp;wvr=5" target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a></li>
        <li><a href="#" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>
        <li><a href="#" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a></li>
      </ul>
    </div>
    <div class="f_list qr-code">
      <h4>模板堂微信服务号</h4>
      <img src="/shop/Public/images/weixinfuwuhao.png" alt="模板堂服务号二维码"> </div>
    <div class="f_list weixin_code">
      <h4>模板堂客户端下载</h4>
      <a class="client_pic" href="http://www.ecmoban.com/topic/ecmoban_app/" target="_blank"></a> </div>
    <div class="blank"></div>
      <div class="blank"></div>
    <div id="bottomNav" class="rolling">
    <h4 class="f_links">底部导航：</h4>
      <ul id="link_slide">
       <li>
        <?php if(is_array($bottomnav)): $i = 0; $__LIST__ = $bottomnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["nav_url"]); ?>" <?php if($nav['nav_blank'] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($nav["nav_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
       </li>
      </ul>
    </div>
    <div class="text" style="height:1px ; width:1px; overflow:hidden;">
      Tel: 123456
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=851818184&amp;Site=%E9%BC%8E%E6%96%B0%E6%96%87%E5%8C%96QQ851818184&amp;Menu=yes" target="_blank"><img src="/shop/Public/images/pa.gif" alt="QQ" border="0" height="16"> 851818184</a>
      <img src="/shop/Public/images/msn.gif" alt="MSN" border="0" height="17" width="18"> <a href="msnim:chat?contact=ecmoban@msn.com">ecmoban@msn.com</a>
      <br>
    </div>
    <div class="record"> © 2018 Ding  &nbsp; <a href="#" target="_blank">暂无内容</a>&nbsp; <a href="#" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;<br>
      客服邮箱：暂无&nbsp;&nbsp;客服电话：18525703670&nbsp; 文明办网文明上网举报电话：010-0000000 &nbsp; <a href="#" target="_blank">违法不良信息举报中心</a> </div>
  </div>
  <div class="blank10"></div>
  <div align="center"><a href="http://www.ecmoban.com/" target="_blank"><img src="/shop/Public/images/ecmoban.gif" alt="ECShop模板"></a></div>
</div>
<script src="/shop/Public/style/jquery.min.js"></script>
<script type="text/javascript" src="/shop/Public/style/login.js"></script>

<div class="blank"></div>

<link href="/shop/Public/style/qq.css" rel="stylesheet" type="text/css">
<div class="QQbox" id="divQQbox" style="width: 170px; top: 124.5px;">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>






                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=851818184&amp;Site=%E9%BC%8E%E6%96%B0%E6%96%87%E5%8C%96QQ851818184&amp;Menu=yes" target="_blank"><img src="/shop/Public/images/pa.gif" alt="QQ" border="0" height="16"> 851818184</a> </li>
                                                                  <li><img src="/shop/Public/images/msn.gif" alt="MSN" border="0" height="17" width="18"> <a href="msnim:chat?contact=ecmoban@msn.com">ecmoban@msn.com</a></li>












	      <li> 服务热线: 123456</li>
         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="/shop/Public/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{
      HTMLElement.prototype.contains=function(obj)
      {
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;
   　　　　obj=obj.parentNode;
   　　}
          return false;
      };
}
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
}
}
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d7e112eaeea65921aeaadcc0af8f2853";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body></html>