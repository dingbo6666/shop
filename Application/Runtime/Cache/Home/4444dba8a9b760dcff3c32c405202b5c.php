<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="童老师thinkphp交流群：484519446">
<meta name="Description" content="童老师thinkphp交流群：484519446">
<title>商城首页</title>
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

        <script type="text/javascript" src="list_files/transport.js"></script><script type="text/javascript" src="list_files/utils.js"></script>        <font id="ECS_MEMBERZONE">


欢迎光临本店，
<?php if(is_array($topnav)): $i = 0; $__LIST__ = $topnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["nav_url"]); ?>"><?php echo ($nav["nav_name"]); ?></a>
<?php if($i != 4): ?><span>|</span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
        <input name="keywords" id="keyword"  value="童老师thinkphp交流群：484519446" class="searchKey" type="text">
        </span> <span class="ipt2">
        <input name="imageField" class="fm_hd_btm_shbx_bttn" value="搜 索" type="submit">
        </span>
      </form>
      <div class="clear_f"></div>
      <ul class="searchType none_f">
      </ul>
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
  <dl class="clearfix" style=" margin-top:-455px;z-index:999">
             <div class="dt" onmouseover="sw_nav2(1,1);" onmouseout="sw_nav2(1,0);">

        <div class="" id="HandleLI2_1">
        <a class="a

" href="mbmeilishuo/category.php?id=132">
 男装  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_1" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=138">针织衫</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=139">针织背心</a>
<a class="over_3" href="mbmeilishuo/category.php?id=140">套头衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=141">开衫</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=154">内衣</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=156">内衣/套装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=157">袜子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=158">家居服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=159">内裤</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=160">外套</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=161">皮衣/皮草</a>
<a class="over_3" href="mbmeilishuo/category.php?id=162">卫衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=163">风衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=164">大衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=166">西服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=167">棉服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=168">羽绒服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=169">夹克</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=170">裤子</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=171">西裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=172">牛仔中裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=173">休闲裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=174">牛仔裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=623">休闲短裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=629">休闲分裤</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=175">T恤</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=176">长袖T恤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=178">短袖T恤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=179">背心</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=182">POLO衫</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=185">长袖POLO衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=188">短袖POLO衫</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=190">衬衫</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=193">短袖衬衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=194">长袖衬衫</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(2,1);" onmouseout="sw_nav2(2,0);">

        <div class="" id="HandleLI2_2">
        <a class="a
         t

" href="mbmeilishuo/category.php?id=21">
 女装  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_2" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=22">T恤/POLO</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=23">POLO衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=26">短袖T恤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=27">长袖T恤</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=29">衬衫</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=30">长袖衬衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=32">短袖衬衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=33">分袖衬衫</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=34">裤子</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=35">牛仔分裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=36">牛仔短裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=37">休闲裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=38">牛仔裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=630">休闲短裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=631">哈伦裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=632">连身裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=633">打底裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=634">西裤</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=39">外套</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=40">卫衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=41">西装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=42">羽绒服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=43">棉服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=624">皮衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=625">夹克</a>
<a class="over_3" href="mbmeilishuo/category.php?id=626">风衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=627">大衣</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=110">针织衫</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=114">套头衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=115">开衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=628">短袖针织衫</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=124">裙</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=125">半裙</a>
<a class="over_3" href="mbmeilishuo/category.php?id=126">连衣裙</a>
<a class="over_3" href="mbmeilishuo/category.php?id=127">吊带裙</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=635">中老年服装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=636">T恤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=637">针织衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=638">衬衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=639">裤装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=640">裙装</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=641">内衣</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=642">文胸</a>
<a class="over_3" href="mbmeilishuo/category.php?id=643">内裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=644">睡衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=645">美体内衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=646">套装/打底</a>
<a class="over_3" href="mbmeilishuo/category.php?id=647">丝袜/裤袜</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(3,1);" onmouseout="sw_nav2(3,0);">

        <div class="" id="HandleLI2_3">
        <a class="a

" href="mbmeilishuo/category.php?id=16">
 运动户外  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_3" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=120">运动服</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=201">MP3/MP4</a>
<a class="over_3" href="mbmeilishuo/category.php?id=202">MID</a>
<a class="over_3" href="mbmeilishuo/category.php?id=204">音箱</a>
<a class="over_3" href="mbmeilishuo/category.php?id=205">高清播放器</a>
<a class="over_3" href="mbmeilishuo/category.php?id=206">电子书</a>
<a class="over_3" href="mbmeilishuo/category.php?id=207">电子词典</a>
<a class="over_3" href="mbmeilishuo/category.php?id=208">MP3/MP4配件</a>
<a class="over_3" href="mbmeilishuo/category.php?id=209">录音笔</a>
<a class="over_3" href="mbmeilishuo/category.php?id=210">麦克风</a>
<a class="over_3" href="mbmeilishuo/category.php?id=211">专业音频</a>
<a class="over_3" href="mbmeilishuo/category.php?id=212">电子教育</a>
<a class="over_3" href="mbmeilishuo/category.php?id=213">数码相框</a>
<a class="over_3" href="mbmeilishuo/category.php?id=214">苹果配件</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=17">运动鞋</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=2">CDMA手机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=18">3G手机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=19">双模手机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=20">GSM手机</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=116">运动包</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=117">便携相机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=118">单反相机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=119">数码摄像机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=203">耳机</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=6">装备配件</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=7">充 电 器</a>
<a class="over_3" href="mbmeilishuo/category.php?id=8">耳机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=9">电池</a>
<a class="over_3" href="mbmeilishuo/category.php?id=11">读卡内存卡</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=12">户外服装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=13">小灵通充值卡</a>
<a class="over_3" href="mbmeilishuo/category.php?id=14">移动充值卡</a>
<a class="over_3" href="mbmeilishuo/category.php?id=15">联通充值卡</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(4,1);" onmouseout="sw_nav2(4,0);">

        <div class="" id="HandleLI2_4">
        <a class="a
         t

" href="mbmeilishuo/category.php?id=69">
 母婴童  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_4" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=70">童装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=71">笔记本</a>
<a class="over_3" href="mbmeilishuo/category.php?id=72">台式机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=73">服务器</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=74">婴童洗护</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=75">CPU</a>
<a class="over_3" href="mbmeilishuo/category.php?id=76">硬盘</a>
<a class="over_3" href="mbmeilishuo/category.php?id=77">内存</a>
<a class="over_3" href="mbmeilishuo/category.php?id=78">显卡</a>
<a class="over_3" href="mbmeilishuo/category.php?id=79">主板</a>
<a class="over_3" href="mbmeilishuo/category.php?id=80">声卡</a>
<a class="over_3" href="mbmeilishuo/category.php?id=81">光驱</a>
<a class="over_3" href="mbmeilishuo/category.php?id=82">散热器</a>
<a class="over_3" href="mbmeilishuo/category.php?id=112">UPS电源</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=83">孕妈专区</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=84">显示器</a>
<a class="over_3" href="mbmeilishuo/category.php?id=86">鼠标</a>
<a class="over_3" href="mbmeilishuo/category.php?id=87">键盘</a>
<a class="over_3" href="mbmeilishuo/category.php?id=88">电源</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=89">婴儿装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=90">打印机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=91">一体机</a>
<a class="over_3" href="mbmeilishuo/category.php?id=92">复印机</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=93">玩具/早教</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=94">路由器</a>
<a class="over_3" href="mbmeilishuo/category.php?id=95">网卡</a>
<a class="over_3" href="mbmeilishuo/category.php?id=96">交换机</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=97">喂养用品</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=98">杀毒软件</a>
<a class="over_3" href="mbmeilishuo/category.php?id=99">办公软件</a>
<a class="over_3" href="mbmeilishuo/category.php?id=100">游戏软件</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=101">童鞋</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=102">墨盒</a>
<a class="over_3" href="mbmeilishuo/category.php?id=103">墨粉</a>
<a class="over_3" href="mbmeilishuo/category.php?id=104">色带</a>
<a class="over_3" href="mbmeilishuo/category.php?id=111">硒鼓</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(5,1);" onmouseout="sw_nav2(5,0);">

        <div class="" id="HandleLI2_5">
        <a class="a

" href="mbmeilishuo/category.php?id=44">
 鞋靴  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_5" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=45">家居用品</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=46">被子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=47">枕头</a>
<a class="over_3" href="mbmeilishuo/category.php?id=48">家纺毛巾</a>
<a class="over_3" href="mbmeilishuo/category.php?id=49">卫浴用品</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=50">女鞋</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=51">休闲鞋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=52">童鞋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=53">腰带</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=54">礼品箱包</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=55">烟具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=56">瑞士军刀</a>
<a class="over_3" href="mbmeilishuo/category.php?id=57">工艺藏品</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=58">钟表首饰</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=59">日本表店</a>
<a class="over_3" href="mbmeilishuo/category.php?id=60">流行饰品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=61">国产表店</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=62">运动健康</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=63">运动器材</a>
<a class="over_3" href="mbmeilishuo/category.php?id=64">户外装备</a>
<a class="over_3" href="mbmeilishuo/category.php?id=65">室内球类</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=66">趣味玩具</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=67">电动玩具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=68">遥控玩具</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=121">男鞋</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=122">乳液/面霜</a>
<a class="over_3" href="mbmeilishuo/category.php?id=123">身体护理</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(6,1);" onmouseout="sw_nav2(6,0);">

        <div class="" id="HandleLI2_6">
        <a class="a
         t

" href="mbmeilishuo/category.php?id=215">
 箱包  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_6" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=216">男装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=217">衬衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=218">T恤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=219">针织</a>
<a class="over_3" href="mbmeilishuo/category.php?id=220">外套</a>
<a class="over_3" href="mbmeilishuo/category.php?id=221">羽绒服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=222">裤子</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=223">女装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=224">衬衫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=225">T恤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=226">针织</a>
<a class="over_3" href="mbmeilishuo/category.php?id=227">外套</a>
<a class="over_3" href="mbmeilishuo/category.php?id=228">裙子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=229">羽绒服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=230">裤子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=231">孕妇装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=232">皮衣</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=233">运动</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=234">运动装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=235">运动鞋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=236">运动配件</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=237">内衣</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=238">文胸</a>
<a class="over_3" href="mbmeilishuo/category.php?id=239">内裤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=240">背心</a>
<a class="over_3" href="mbmeilishuo/category.php?id=241">塑身</a>
<a class="over_3" href="mbmeilishuo/category.php?id=242">睡衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=243">家居</a>
<a class="over_3" href="mbmeilishuo/category.php?id=244">袜子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=245">情趣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=246">保暖</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=247">配饰</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=248">眼镜</a>
<a class="over_3" href="mbmeilishuo/category.php?id=249">腰带</a>
<a class="over_3" href="mbmeilishuo/category.php?id=250">帽子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=251">围巾</a>
<a class="over_3" href="mbmeilishuo/category.php?id=252">手套</a>
<a class="over_3" href="mbmeilishuo/category.php?id=253">领带</a>
<a class="over_3" href="mbmeilishuo/category.php?id=254">袖扣</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=255">鞋靴</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=256">男鞋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=257">女鞋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=258">拖鞋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=259">童鞋</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=260">童装</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=261">女童</a>
<a class="over_3" href="mbmeilishuo/category.php?id=262">男童</a>
<a class="over_3" href="mbmeilishuo/category.php?id=263">宝宝服饰</a>
<a class="over_3" href="mbmeilishuo/category.php?id=264">亲子装</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(7,1);" onmouseout="sw_nav2(7,0);">

        <div class="" id="HandleLI2_7">
        <a class="a

" href="mbmeilishuo/category.php?id=265">
 配饰  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_7" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=266">饰品</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=267">洁面乳</a>
<a class="over_3" href="mbmeilishuo/category.php?id=268">爽肤水</a>
<a class="over_3" href="mbmeilishuo/category.php?id=269">精华露</a>
<a class="over_3" href="mbmeilishuo/category.php?id=270">乳液面霜</a>
<a class="over_3" href="mbmeilishuo/category.php?id=271">面膜面贴</a>
<a class="over_3" href="mbmeilishuo/category.php?id=272">眼部护理</a>
<a class="over_3" href="mbmeilishuo/category.php?id=273">颈部护理</a>
<a class="over_3" href="mbmeilishuo/category.php?id=274">T区护理</a>
<a class="over_3" href="mbmeilishuo/category.php?id=275">护肤套装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=276">防晒隔离</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=277">配饰</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=278">洗发护发</a>
<a class="over_3" href="mbmeilishuo/category.php?id=279">染发/造型</a>
<a class="over_3" href="mbmeilishuo/category.php?id=280">沐浴</a>
<a class="over_3" href="mbmeilishuo/category.php?id=281">磨砂/浴盐</a>
<a class="over_3" href="mbmeilishuo/category.php?id=282">身体乳</a>
<a class="over_3" href="mbmeilishuo/category.php?id=283">手工/香皂</a>
<a class="over_3" href="mbmeilishuo/category.php?id=284">香薰精油</a>
<a class="over_3" href="mbmeilishuo/category.php?id=285">纤体瘦身</a>
<a class="over_3" href="mbmeilishuo/category.php?id=286">脱毛膏</a>
<a class="over_3" href="mbmeilishuo/category.php?id=287">手足护理</a>
<a class="over_3" href="mbmeilishuo/category.php?id=288">洗护套装</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=289">手表</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=290">牙膏/牙粉</a>
<a class="over_3" href="mbmeilishuo/category.php?id=291">漱口水</a>
<a class="over_3" href="mbmeilishuo/category.php?id=292">牙刷/牙线</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=293">女性护理</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=294">卫生巾</a>
<a class="over_3" href="mbmeilishuo/category.php?id=295">卫生护垫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=296">洗液</a>
<a class="over_3" href="mbmeilishuo/category.php?id=297">美容食品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=298">其它</a>
<a class="over_3" href="mbmeilishuo/category.php?id=315">卸妆</a>
<a class="over_3" href="mbmeilishuo/category.php?id=316">美甲</a>
<a class="over_3" href="mbmeilishuo/category.php?id=317">彩妆工具</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=299">男士护理</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=300">脸部</a>
<a class="over_3" href="mbmeilishuo/category.php?id=301">眼部</a>
<a class="over_3" href="mbmeilishuo/category.php?id=302">身体护理</a>
<a class="over_3" href="mbmeilishuo/category.php?id=303">男士香水</a>
<a class="over_3" href="mbmeilishuo/category.php?id=304">剃须</a>
<a class="over_3" href="mbmeilishuo/category.php?id=305">防脱洗护</a>
<a class="over_3" href="mbmeilishuo/category.php?id=306">唇膏</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=307">魅力彩妆</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=308">粉底/遮瑕</a>
<a class="over_3" href="mbmeilishuo/category.php?id=309">腮红</a>
<a class="over_3" href="mbmeilishuo/category.php?id=310">眼影/眼线</a>
<a class="over_3" href="mbmeilishuo/category.php?id=311">眉笔</a>
<a class="over_3" href="mbmeilishuo/category.php?id=312">睫毛膏</a>
<a class="over_3" href="mbmeilishuo/category.php?id=313">唇膏唇彩</a>
<a class="over_3" href="mbmeilishuo/category.php?id=314">彩妆组合</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=318">帽子</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=319">女士香水</a>
<a class="over_3" href="mbmeilishuo/category.php?id=320">男士香水</a>
<a class="over_3" href="mbmeilishuo/category.php?id=321">组合套装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=322">迷你香水</a>
<a class="over_3" href="mbmeilishuo/category.php?id=323">香体走珠</a>
</div>

</dd>
</div>
        <div class="dt" onmouseover="sw_nav2(8,1);" onmouseout="sw_nav2(8,0);">

        <div id="HandleLI2_8">
        <a class="a
         t

" href="mbmeilishuo/category.php?id=324">
 美妆  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_8" style="display:none">
 <a class="over_2" href="mbmeilishuo/category.php?id=325">个人洗护</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=326">钱包/卡包</a>
<a class="over_3" href="mbmeilishuo/category.php?id=327">手拿包</a>
<a class="over_3" href="mbmeilishuo/category.php?id=328">单肩包</a>
<a class="over_3" href="mbmeilishuo/category.php?id=329">双肩包</a>
<a class="over_3" href="mbmeilishuo/category.php?id=330">手提包</a>
<a class="over_3" href="mbmeilishuo/category.php?id=331">斜挎包</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=348">香水精油</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=349">火机烟具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=350">礼品文具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=351">瑞士军刀</a>
<a class="over_3" href="mbmeilishuo/category.php?id=352">收藏品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=353">工艺摆件</a>
<a class="over_3" href="mbmeilishuo/category.php?id=354">创意礼品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=355">礼卡礼券</a>
<a class="over_3" href="mbmeilishuo/category.php?id=356">鲜花速递</a>
<a class="over_3" href="mbmeilishuo/category.php?id=357">婚庆用品</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=358">奢侈品</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=359">GUCCI</a>
<a class="over_3" href="mbmeilishuo/category.php?id=360">PRADA</a>
<a class="over_3" href="mbmeilishuo/category.php?id=361">FENDI</a>
<a class="over_3" href="mbmeilishuo/category.php?id=362">BURBERRY</a>
<a class="over_3" href="mbmeilishuo/category.php?id=363">BOTTEGA VENETA</a>
<a class="over_3" href="mbmeilishuo/category.php?id=364">DIOR</a>
<a class="over_3" href="mbmeilishuo/category.php?id=365">Ferragamo</a>
<a class="over_3" href="mbmeilishuo/category.php?id=366">MONTBLANC</a>
<a class="over_3" href="mbmeilishuo/category.php?id=367">ARMANI</a>
<a class="over_3" href="mbmeilishuo/category.php?id=368">RIMOWA</a>
<a class="over_3" href="mbmeilishuo/category.php?id=369">MIUMIU</a>
<a class="over_3" href="mbmeilishuo/category.php?id=370">BALENCIAGA</a>
<a class="over_3" href="mbmeilishuo/category.php?id=371">Dolce&amp;Gabbana</a>
<a class="over_3" href="mbmeilishuo/category.php?id=372">MARC JACOBS</a>
<a class="over_3" href="mbmeilishuo/category.php?id=373">COACH</a>
<a class="over_3" href="mbmeilishuo/category.php?id=374">更多品牌</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=375">面部护理</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=376">瑞士品牌</a>
<a class="over_3" href="mbmeilishuo/category.php?id=377">国产品牌</a>
<a class="over_3" href="mbmeilishuo/category.php?id=378">日本品牌</a>
<a class="over_3" href="mbmeilishuo/category.php?id=379">时尚品牌</a>
<a class="over_3" href="mbmeilishuo/category.php?id=380">闹钟挂钟</a>
<a class="over_3" href="mbmeilishuo/category.php?id=381">儿童手表</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=382">彩妆</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=383">纯金K金饰品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=384">金银投资</a>
<a class="over_3" href="mbmeilishuo/category.php?id=385">银饰</a>
<a class="over_3" href="mbmeilishuo/category.php?id=386">钻石饰品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=387">翡翠玉石</a>
<a class="over_3" href="mbmeilishuo/category.php?id=388">水晶玛瑙</a>
<a class="over_3" href="mbmeilishuo/category.php?id=389">宝石珍珠</a>
<a class="over_3" href="mbmeilishuo/category.php?id=390">时尚饰品</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=662">美妆团购</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=663">面部护理</a>
<a class="over_3" href="mbmeilishuo/category.php?id=664">时尚彩妆</a>
<a class="over_3" href="mbmeilishuo/category.php?id=665">个人洗护</a>
<a class="over_3" href="mbmeilishuo/category.php?id=666">其他护理</a>
</div>

</dd>
</div>
        <div class="dt" style="border-bottom:none;" onmouseover="sw_nav2(9,1);" onmouseout="sw_nav2(9,0);">

        <div class="" id="HandleLI2_9">
        <a class="a

" href="mbmeilishuo/category.php?id=391">
 家居  <img src="/shop/Public/images/biao8.gif">
 </a>
</div>



<dd id="DisSub2_9" style="display: none;">
 <a class="over_2" href="mbmeilishuo/category.php?id=392">户外鞋服</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=393">户外服装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=394">户外鞋袜</a>
<a class="over_3" href="mbmeilishuo/category.php?id=395">户外配饰</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=396">户外装备</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=397">帐篷</a>
<a class="over_3" href="mbmeilishuo/category.php?id=398">睡袋</a>
<a class="over_3" href="mbmeilishuo/category.php?id=399">登山攀岩</a>
<a class="over_3" href="mbmeilishuo/category.php?id=400">户外背包</a>
<a class="over_3" href="mbmeilishuo/category.php?id=401">户外照明</a>
<a class="over_3" href="mbmeilishuo/category.php?id=402">户外垫子</a>
<a class="over_3" href="mbmeilishuo/category.php?id=403">户外仪表</a>
<a class="over_3" href="mbmeilishuo/category.php?id=404">户外工具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=405">望远镜</a>
<a class="over_3" href="mbmeilishuo/category.php?id=406">垂钓用品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=407">旅游用品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=408">便携桌椅床</a>
<a class="over_3" href="mbmeilishuo/category.php?id=409">烧烤用品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=410">野餐炊具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=411">军迷用品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=412">游泳用具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=413">泳衣</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=414">运动器械</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=415">健身器械</a>
<a class="over_3" href="mbmeilishuo/category.php?id=416">运动器材</a>
<a class="over_3" href="mbmeilishuo/category.php?id=417">防护器具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=418">骑行运动</a>
<a class="over_3" href="mbmeilishuo/category.php?id=419">极限运动</a>
<a class="over_3" href="mbmeilishuo/category.php?id=420">武术搏击</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=421">纤体瑜伽</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=422">瑜伽垫</a>
<a class="over_3" href="mbmeilishuo/category.php?id=423">瑜伽服</a>
<a class="over_3" href="mbmeilishuo/category.php?id=424">瑜伽配件</a>
<a class="over_3" href="mbmeilishuo/category.php?id=425">瑜伽套装</a>
<a class="over_3" href="mbmeilishuo/category.php?id=426">舞蹈鞋服</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=427">体育娱乐</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=428">羽毛球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=429">乒乓球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=430">篮球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=431">足球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=432">网球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=433">排球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=434">高尔夫球</a>
<a class="over_3" href="mbmeilishuo/category.php?id=435">棋牌麻将</a>
<a class="over_3" href="mbmeilishuo/category.php?id=436">其他</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=437">成人用品</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=438">安全避孕</a>
<a class="over_3" href="mbmeilishuo/category.php?id=439">验孕测孕</a>
<a class="over_3" href="mbmeilishuo/category.php?id=440">人体润滑</a>
<a class="over_3" href="mbmeilishuo/category.php?id=441">情爱玩具</a>
<a class="over_3" href="mbmeilishuo/category.php?id=442">情趣内衣</a>
<a class="over_3" href="mbmeilishuo/category.php?id=443">组合套装</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=444">保健器械</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=445">养生器械</a>
<a class="over_3" href="mbmeilishuo/category.php?id=446">保健用品</a>
<a class="over_3" href="mbmeilishuo/category.php?id=447">康复辅助</a>
<a class="over_3" href="mbmeilishuo/category.php?id=448">家庭护理</a>
</div>

 <a class="over_2" href="mbmeilishuo/category.php?id=449">急救卫生</a>
<div class="clearfix">
<a class="over_3" href="mbmeilishuo/category.php?id=450">跌打损伤</a>
<a class="over_3" href="mbmeilishuo/category.php?id=451">烫伤止痒</a>
<a class="over_3" href="mbmeilishuo/category.php?id=452">防裂抗冻</a>
<a class="over_3" href="mbmeilishuo/category.php?id=453">口腔咽部</a>
<a class="over_3" href="mbmeilishuo/category.php?id=454">眼部保健</a>
<a class="over_3" href="mbmeilishuo/category.php?id=455">鼻炎健康</a>
<a class="over_3" href="mbmeilishuo/category.php?id=456">风湿骨痛</a>
<a class="over_3" href="mbmeilishuo/category.php?id=457">生殖泌尿</a>
<a class="over_3" href="mbmeilishuo/category.php?id=458">美体塑身</a>
</div>

</dd>
</div>

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

           <ul class="clearfix">
           <li class="goodsimg"><a href="mbmeilishuo/goods.php?id=134"><img src="/shop/Public/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装" class="B_blue" border="0"></a></li>
			<li> <p><a href="mbmeilishuo/goods.php?id=134" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装">韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气...</a></p>
           促销价：<font class="f1">110元</font></li>
           </ul>

           <ul class="clearfix">
           <li class="goodsimg"><a href="mbmeilishuo/goods.php?id=136"><img src="/shop/Public/images/136_thumb_G_1413930502490.jpg" alt="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴" class="B_blue" border="0"></a></li>
			<li> <p><a href="mbmeilishuo/goods.php?id=136" title="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴">米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸...</a></p>
           促销价：<font class="f1">110元</font></li>
           </ul>

           <ul class="clearfix">
           <li class="goodsimg"><a href="mbmeilishuo/goods.php?id=140"><img src="/shop/Public/images/140_thumb_G_1413928959052.jpg" alt="毛貂毛边卫衣套装" class="B_blue" border="0"></a></li>
			<li> <p><a href="mbmeilishuo/goods.php?id=140" title="毛貂毛边卫衣套装">毛貂毛边卫衣套装</a></p>
           促销价：<font class="f1">110元</font></li>
           </ul>

           <ul class="clearfix">
           <li class="goodsimg"><a href="mbmeilishuo/goods.php?id=139"><img src="/shop/Public/images/139_thumb_G_1413929154297.jpg" alt="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装" class="B_blue" border="0"></a></li>
			<li> <p><a href="mbmeilishuo/goods.php?id=139" title="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装">秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装</a></p>
           促销价：<font class="f1">110元</font></li>
           </ul>
                </div>
 </div>

<div class="blank" style="height:1px;"></div>

</div>
  <div class="goodsBox_1">



<div class="xm-box">
<h4 class="title"><span>新品上架</span> <a class="more" href="mbmeilishuo/search.php?intro=new">更多</a></h4>
<div id="show_new_area" class="clearfix">
      <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=140"><img src="/shop/Public/images/140_thumb_G_1413928959052.jpg" alt="毛貂毛边卫衣套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=140" title="毛貂毛边卫衣套装">毛貂毛边卫衣套装</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=209"><img src="/shop/Public/images/209_thumb_G_1420405700910.jpg" alt="女鞋" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=209" title="女鞋">女鞋</a></p>


 市场价：<font class="market">120元</font> <br>

           本店价：<font class="f1">
                     100元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=137"><img src="/shop/Public/images/137_thumb_G_1413930199355.jpg" alt="蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=137" title="蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲">蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     120元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=138"><img src="/shop/Public/images/138_thumb_G_1413929827659.jpg" alt="现货发售 马海毛保暖毛衣" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=138" title="现货发售 马海毛保暖毛衣">现货发售 马海毛保暖毛衣</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     120元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=139"><img src="/shop/Public/images/139_thumb_G_1413929154297.jpg" alt="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=139" title="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装">秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>

    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>热卖商品</span> <a class="more" href="mbmeilishuo/search.php?intro=hot">更多</a></h4>
<div id="show_hot_area" class="clearfix">
      <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=134"><img src="/shop/Public/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=134" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装">韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气...</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=136"><img src="/shop/Public/images/136_thumb_G_1413930502490.jpg" alt="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=136" title="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴">米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸...</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=140"><img src="/shop/Public/images/140_thumb_G_1413928959052.jpg" alt="毛貂毛边卫衣套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=140" title="毛貂毛边卫衣套装">毛貂毛边卫衣套装</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=137"><img src="/shop/Public/images/137_thumb_G_1413930199355.jpg" alt="蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=137" title="蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲">蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     120元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=138"><img src="/shop/Public/images/138_thumb_G_1413929827659.jpg" alt="现货发售 马海毛保暖毛衣" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=138" title="现货发售 马海毛保暖毛衣">现货发售 马海毛保暖毛衣</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     120元                     </font>

        </div>

    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>精品推荐</span> <a class="more" href="mbmeilishuo/search.php?intro=best">更多</a></h4>
<div id="show_best_area" class="clearfix">
      <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=134"><img src="/shop/Public/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=134" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装">韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气...</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=136"><img src="/shop/Public/images/136_thumb_G_1413930502490.jpg" alt="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=136" title="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴">米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸...</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=209"><img src="/shop/Public/images/209_thumb_G_1420405700910.jpg" alt="女鞋" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=209" title="女鞋">女鞋</a></p>


 市场价：<font class="market">120元</font> <br>

           本店价：<font class="f1">
                     100元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=138"><img src="/shop/Public/images/138_thumb_G_1413929827659.jpg" alt="现货发售 马海毛保暖毛衣" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=138" title="现货发售 马海毛保暖毛衣">现货发售 马海毛保暖毛衣</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     120元                     </font>

        </div>
    <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=139"><img src="/shop/Public/images/139_thumb_G_1413929154297.jpg" alt="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=139" title="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装">秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装</a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>

    </div>
</div>
<div class="blank"></div>

<div class="xm-box">
<h4 class="title"><span>女装</span> <a class="more" href="mbmeilishuo/category.php?id=21">更多</a></h4>
<div id="show_hot_area" class="clearfix">

            <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=134"><img src="/shop/Public/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=134" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装"></a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
            <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=136"><img src="/shop/Public/images/136_thumb_G_1413930502490.jpg" alt="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=136" title="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴"></a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
            <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=140"><img src="/shop/Public/images/140_thumb_G_1413928959052.jpg" alt="毛貂毛边卫衣套装" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=140" title="毛貂毛边卫衣套装"></a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
            <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=208"><img src="/shop/Public/images/208_thumb_G_1419373849576.png" alt="简约纯色时尚保暖" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=208" title="简约纯色时尚保暖"></a></p>


 市场价：<font class="market">120元</font> <br>

           本店价：<font class="f1">
                     100元                     </font>

        </div>
            <div class="goodsItem">

           <a href="mbmeilishuo/goods.php?id=141"><img src="/shop/Public/images/141_thumb_G_1413926445469.jpg" alt="高质感毛呢大衣" class="goodsimg"></a><br>
           <p class="f1"><a href="mbmeilishuo/goods.php?id=141" title="高质感毛呢大衣"></a></p>


 市场价：<font class="market">144元</font> <br>

           本店价：<font class="f1">
                     110元                     </font>

        </div>
          </div>


</div>
<div class="blank"></div>
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
        <?php if(is_array($bottomnav)): $i = 0; $__LIST__ = $bottomnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["nav_url"]); ?>"><?php echo ($nav["nav_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
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