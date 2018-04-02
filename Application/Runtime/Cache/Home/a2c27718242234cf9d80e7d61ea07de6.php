<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>列表页面</title>
<link rel="shortcut icon" href="mbmeilishuo/favicon.ico">
<link rel="icon" href="mbmeilishuo/animated_favicon.gif" type="image/gif">
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css">
<script src="/shop/Public/style/hm.js"></script><script type="text/javascript" src="list_files/common.js"></script><script type="text/javascript" src="list_files/global.js"></script><script type="text/javascript" src="list_files/compare.js"></script></head>
<body>
<link href="/shop/Public/style/qq.htm" rel="stylesheet" type="text/css">

<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
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
        <script type="text/javascript" src="list_files/transport.js"></script>
				<script type="text/javascript" src="list_files/utils.js"></script>
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


  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href="mbmeilishuo/">首页</a> <code>&gt;</code> <a href="mbmeilishuo/category.php?id=21">女装</a>
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">

<div class="AreaL">

<div id="category_tree">
<div class="tit">所有商品分类</div>
<dl class="clearfix" style=" overflow:hidden;">
  <div class="box1 cate" id="cate">
    <?php foreach ($navres as $k1 => $v1):?>
 		<h1 onclick="tab(<?php echo $k1;?>)" style="border-top:none">
 		<span class="f_l"><img src="/shop/Public/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
 		<a href="/shop/index.php/Home/category/index/id/<?php echo $v1['id'];?>" class="  f_l"><?php echo $v1['catename'];?></a>
 		</h1>
 		<ul style="display:none">
 				<?php foreach ($v1['children'] as $k2 => $v2):?>
 				  <a class="over_2" href="/shop/index.php/Home/category/index/id/<?php echo $v2['id'];?>"><?php echo $v2['catename'];?></a>
           <div class="clearfix">
             <?php foreach ($v2['children'] as $k3 => $v3):?>
               <a class="over_3" href="/shop/index.php/Home/category/index/id/<?php echo $v3['id'];?>"><?php echo $v3['catename'];?></a>
             <?php endforeach;?>
           </div>
 				 <?php endforeach;?>
 		</ul>
 		<div style="clear:both"></div>
 	<?php endforeach;?>

 </div>
<div style="clear:both"></div>
</dl>
</div>

<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_meilishuo/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_meilishuo/images/btn_unfold.gif"
		}
}
</script><div style="display: none;" class="box" id="history_div"> <div class="box_1">
 <h3><span>浏览历史</span></h3>

  <div class="boxCenterList clearfix" id="history_list">
      </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>

  </div>


  <div class="AreaR">

	  	  <div class="box">
		 <div class="box_1">
			<h3><span>商品筛选</span></h3>
						<div class="screeBox">
			  <strong>品牌：</strong>
														<span>全部</span>
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=2&amp;price_min=0&amp;price_max=0">APPLE</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=3&amp;price_min=0&amp;price_max=0">方正</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=4&amp;price_min=0&amp;price_max=0">希捷</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=5&amp;price_min=0&amp;price_max=0">漫步者</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=6&amp;price_min=0&amp;price_max=0">天翼</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=7&amp;price_min=0&amp;price_max=0">美的</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=11&amp;price_min=0&amp;price_max=0">  恒基伟业</a>&nbsp;
																			<a href="mbmeilishuo/category.php?id=21&amp;brand=43&amp;price_min=0&amp;price_max=0">帮宝适</a>&nbsp;
												</div>
									<div class="screeBox">
			<strong>价格：</strong>
											<span>全部</span>
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=100&amp;price_max=110">100&nbsp;-&nbsp;110</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=120&amp;price_max=130">120&nbsp;-&nbsp;130</a>&nbsp;
										</div>
						      <div class="screeBox">
			<strong>袖型 :</strong>
											<span>全部</span>
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=2839.0.0.0.0">七分袖</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=2841.0.0.0.0">无袖</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=2836.0.0.0.0">短袖</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=2203.0.0.0.0">长袖</a>&nbsp;
										</div>
            <div class="screeBox">
			<strong>尺寸 :</strong>
											<span>全部</span>
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.2149.0.0.0">L</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.2150.0.0.0">M</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.2148.0.0.0">XL</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.2151.0.0.0">XXL</a>&nbsp;
										</div>
            <div class="screeBox">
			<strong>颜色 :</strong>
											<span>全部</span>
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.2145.0.0">红</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.2146.0.0">蓝</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.2147.0.0">黄</a>&nbsp;
										</div>
            <div class="screeBox">
			<strong>风格 :</strong>
											<span>全部</span>
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2847.0">卡通</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2837.0">日韩</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2842.0">民族</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2834.0">甜美淑女</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2840.0">简约</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2852.0">英伦学院</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.2844.0">街头</a>&nbsp;
										</div>
            <div class="screeBox">
			<strong>花型 :</strong>
											<span>全部</span>
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2838">印花/绣花</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2845">大方格</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2835">小碎花</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2833">撞色</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2843">条纹</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2850">波点</a>&nbsp;
															<a href="mbmeilishuo/category.php?id=21&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.2224">素色</a>&nbsp;
										</div>
      		 </div>
		</div>
		<div class="blank"></div>


<div class="box">
 <div class="box_1">
  <h3>
  <span>商品列表</span>
  <form method="GET" class="sort" name="listform">
  显示方式：
  <a href="javascript:;" onclick="javascript:display_mode('list')"><img src="/shop/Public/images/display_mode_list.gif" alt=""></a>
  <a href="javascript:;" onclick="javascript:display_mode('grid')"><img src="/shop/Public/images/display_mode_grid_act.gif" alt=""></a>
  <a href="javascript:;" onclick="javascript:display_mode('text')"><img src="/shop/Public/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;

  <a href="mbmeilishuo/category.php?category=21&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=goods_id&amp;order=ASC#goods_list"><img src="/shop/Public/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <a href="mbmeilishuo/category.php?category=21&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=shop_price&amp;order=ASC#goods_list"><img src="/shop/Public/images/shop_price_default.gif" alt="按价格排序"></a>
  <a href="mbmeilishuo/category.php?category=21&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=last_update&amp;order=DESC#goods_list"><img src="/shop/Public/images/last_update_default.gif" alt="按更新时间排序"></a>
  <input name="category" value="21" type="hidden">
  <input name="display" value="grid" id="display" type="hidden">
  <input name="brand" value="0" type="hidden">
  <input name="price_min" value="0" type="hidden">
  <input name="price_max" value="0" type="hidden">
  <input name="filter_attr" value="0" type="hidden">
  <input name="page" value="1" type="hidden">
  <input name="sort" value="goods_id" type="hidden">
  <input name="order" value="DESC" type="hidden">
  </form>
  </h3>
      <form name="compareForm" action="compare.php" method="post" onsubmit="return compareGoods(this);">
            <div class="clearfix goodsBox" style="border:none;">
             <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=208"><img src="/shop/Public/images/208_thumb_G_1419373849576.png" alt="简约纯色时尚保暖" class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=208" title="简约纯色时尚保暖">简约纯色时尚保暖</a></p>
                                    市场价：<font class="market_s">120元</font><br>
                                                                        本店价：<font class="shop_s">100元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=141"><img src="/shop/Public/images/141_thumb_G_1413926445469.jpg" alt="高质感毛呢大衣" class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=141" title="高质感毛呢大衣">高质感毛呢大衣</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        促销价：<font class="shop_s">110元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=140"><img src="/shop/Public/images/140_thumb_G_1413928959052.jpg" alt="毛貂毛边卫衣套装" class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=140" title="毛貂毛边卫衣套装">毛貂毛边卫衣套装</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        促销价：<font class="shop_s">110元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=139"><img src="/shop/Public/images/139_thumb_G_1413929154297.jpg" alt="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装" class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=139" title="秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装">秋冬黑色天鹅毛衣七分袖休闲套头毛衣蕾丝网纱半身裙蓬蓬裙套装</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        促销价：<font class="shop_s">110元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=138"><img src="/shop/Public/images/138_thumb_G_1413929827659.jpg" alt="现货发售 马海毛保暖毛衣" class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=138" title="现货发售 马海毛保暖毛衣">现货发售 马海毛保暖毛衣</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        本店价：<font class="shop_s">120元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=137"><img src="/shop/Public/images/137_thumb_G_1413930199355.jpg" alt="蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲" class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=137" title="蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲">蜜糖家 METIME 秋季新品 自制薄毛呢西装长马甲</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        本店价：<font class="shop_s">120元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=136"><img src="/shop/Public/images/136_thumb_G_1413930502490.jpg" alt="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸..." class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=136" title="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴">米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸...</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        促销价：<font class="shop_s">110元</font><br>

        </div>
                 <div class="goodsItem" style="padding: 10px 3px 15px 2px;">
           <a href="mbmeilishuo/goods.php?id=134"><img src="/shop/Public/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气..." class="goodsimg"></a><br>
           <p><a href="mbmeilishuo/goods.php?id=134" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装">韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气...</a></p>
                                    市场价：<font class="market_s">144元</font><br>
                                                                        促销价：<font class="shop_s">110元</font><br>

        </div>
            </div>
        </form>

 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<form name="selectPageForm" action="/mbmeilishuo/category.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>8</b>  个记录</span>

      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>

</div>

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

<div style="display: none; top: 200px;" id="compareBox" align="center"><ul id="compareList"></ul><input value="" type="button"></div></body></html>