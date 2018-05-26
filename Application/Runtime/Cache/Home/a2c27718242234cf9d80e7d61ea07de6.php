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
            function sw_nav(obj,tag){
						var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
                }
                else
                {
                    DisSub.style.display = "none"
                }
            }
</script>
    <div class="block">
        <ul class="top_bav_l">
        <li class="top_sc">
           <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a>
        </li>
            <li>联系我们:QQ1051078011</li>
        </ul>
        <div class="header_r">
        <font id="login_check"></font>
        </div>
    </div>
</div>
<div class=" block header_bg" style="margin-bottom: 0px;">
  <div class="clear_f"></div>
  <div> <a href="http://127.0.0.1/shop/index.php/home/index/index">
    <img src="/shop/Public/images/logo.jpg" style="width:212px;height:72px">
  </a>
    <div class="ser_n">
      <div class="clear_f"></div>
      <ul class="searchType none_f">
      </ul>
      <div style="padding:10px 0;">
      <span style="font-size:20px;"></span>
      <!-- <?php
 $keywordsarr=explode(',', $configres['searchkeywords']); foreach ($keywordsarr as $k => $v): ?> -->
      <!-- <a href="htt://127.0.0.1/shop/index.php/index/search/index/keywords/<?php echo $v;?>" style="font-size:20px;"><?php echo $v;?></a>
      <?php endforeach;?> -->
      </div>
    </div>
    <ul class="cart_info" style="padding-top:20px">
      <li id="ECS_CARTINFO"><em class="i_cart">&nbsp;</em><a href="http://127.0.0.1/shop/index.php/Home/Flow/flow1.html">查看购物车</a></li>
    </ul>
  </div>
</div>
<div style="clear:both"></div>
<div class="menu_box clearfix">
<div class="block">
<div class="menu">
  <a href="http://127.0.0.1/shop/index.php/home/index/index">首页<span></span></a>
  <?php if(is_array($midnav)): $i = 0; $__LIST__ = $midnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["nav_url"]); ?>" <?php if($nav['nav_blank'] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($nav["nav_name"]); ?><span></span></a><?php endforeach; endif; else: echo "" ;endif; ?>
 </div>
</div>
</div>


  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href="/shop/index.php">首页</a> <code>&gt;</code>
<?php if(is_array($pos)): $i = 0; $__LIST__ = $pos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><a href="/shop/index.php/Home/Category/index/id/<?php echo ($cate["id"]); ?>"><?php echo ($cate["catename"]); ?></a> <code>&gt;</code><?php endforeach; endif; else: echo "" ;endif; ?>
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
			obj_img.item(id).src = "/shop/Public/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "/shop/Public/images/btn_unfold.gif"
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
          <!-- <div class="box_1">
     			<h3><span>商品筛选</span></h3>
     						<div class="screeBox">
     			      <strong>品牌：</strong>
     														<span>全部</span>
                                 <?php foreach($brandSeaAttr as $k=>$v):?>
     														<a href=""><?php echo ($v["brand_name"]); ?></a>&nbsp;
                                 <?php endforeach;?>
     												</div>
     									<div class="screeBox">
     			      <strong>价格：</strong>
     											<span>全部</span>
     															<?php foreach($priceSeaAttr as $k=>$v):?>
                                   <a href=""><?php echo ($v); ?></a>&nbsp;
                                   <?php endforeach;?>
     										</div>
                       <?php
 $attrCount=count($diySeaAttr); if(I('filter')){ $filter=explode('.', I('filter')); }else{ $filter=array_fill(0, $attrCount, 0); } foreach($diySeaAttr as $k=>$v):?>
       						      <div class="screeBox">
       			                 <strong><?php echo ($v["attr_name"]); ?> :</strong>
       											 <span>全部</span>
                                   <?php foreach($v['attr_vals'] as $k1=>$v1): $tmpArr=$filter; $tmpArr[$k]=$v1['attrserid']; $_filter=implode('.', $tmpArr); ?>
       															<a href="<?php echo U('category/index',['id'=>I('id'),'filter'=>$_filter]);?>"><?php echo ($v1["attr_value"]); ?></a>&nbsp;
                                   <?php endforeach;?>
       									</div>
                       <?php endforeach;?>
           		 </div> -->
		<div class="blank"></div>


<div class="box">
 <div class="box_1">
  <h3>
  <span>商品列表</span>
  <form method="GET" class="sort" name="listform">
  <!-- 显示方式：
  <a href="javascript:;" onclick="javascript:display_mode('list')"><img src="/shop/Public/images/display_mode_list.gif" alt=""></a>
  <a href="javascript:;" onclick="javascript:display_mode('grid')"><img src="/shop/Public/images/display_mode_grid_act.gif" alt=""></a>
  <a href="javascript:;" onclick="javascript:display_mode('text')"><img src="/shop/Public/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp; -->
  <?php if($ob=='addtime'&& $ow=='asc'):?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/addtime/ow/desc"><img src="/shop/Public/images/goods_id_ASC.gif" alt="按上架时间排序"></a>
  <?php elseif($ob=='addtime'&& $ow=='desc'):?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/addtime/ow/asc"><img src="/shop/Public/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <?php else:?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/addtime/ow/desc"><img src="/shop/Public/images/goods_id_default.gif" alt="按上架时间排序"></a>
  <?php endif;?>
  <?php if($ob=='shop_price'&& $ow=='asc'):?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/shop_price/ow/desc"><img src="/shop/Public/images/shop_price_ASC.gif" alt="按价格排序"></a>
  <?php elseif($ob=='shop_price'&& $ow=='desc'):?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/shop_price/ow/asc"><img src="/shop/Public/images/shop_price_DESC.gif" alt="按价格排序"></a>
  <?php else:?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/shop_price/ow/asc"><img src="/shop/Public/images/shop_price_default.gif" alt="按价格排序"></a>
  <?php endif;?>
  <?php if($ob=='updatetime'&& $ow=='asc'):?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/updatetime/ow/desc"><img src="/shop/Public/images/last_update_ASC.gif" alt="按更新时间排序"></a>
  <?php elseif($ob=='updatetime'&& $ow=='desc'):?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/updatetime/ow/asc"><img src="/shop/Public/images/last_update_DESC.gif" alt="按更新时间排序"></a>
  <?php else:?>
  <a href="/shop/index.php/Home/category/index/id/<?php echo ($cateid); ?>/ob/updatetime/ow/desc"><img src="/shop/Public/images/last_update_default.gif" alt="按更新时间排序"></a>
  <?php endif;?>
  </form>
  </h3>
  <form name="compareForm" action="compare.php" method="post">
        <div class="clearfix goodsBox" style="border:none;">
         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem" style="padding: 10px 3px 15px 2px;">
             <a href="/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>"><img src="/shop<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg"></a><br>
             <p><a href="/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a></p>
             <font>市场价：<font class="market_s"><?php echo ($goods["market_price"]); ?>元</font><br>
             <font>本店价：<font class="shop_s"><?php echo ($goods["shop_price"]); ?>元</font><br>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </form>
 </div>
</div>
<div class="blank5"></div>
<style type="text/css">
  .prev{border: 1px solid #ccc; padding: 2px;}
  .next{border: 1px solid #ccc; padding: 2px;}
  .num{border: 1px solid #ccc; padding: 2px;}
  .current{border: 1px solid #f69; padding: 2px; float: left; background: #f69; color: #fff; }
</style>
<form name="selectPageForm" action="/mbmeilishuo/category.php" method="get">
  <div id="pager" class="pagebar" style="height:30px;">
  <?php echo ($Page); ?>
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
</div>
<div class="footer">
  <div class="foot_con">
    <div class="f_list service_info">
      <div class="kefu"> <span class="tel_ico"></span>
        <p class="f20_f">18525703670</p>
        <p class="f14_f mt4_f">联系我们</p>
      </div>
      <ol class="business">
        <li>周一至周五：09:00-17:00</li>
      </ol>
    </div>
    <?php if(is_array($hcres)): $i = 0; $__LIST__ = $hcres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="f_list">
        <h4><?php echo ($vo["catename"]); ?></h4>
        <ul>
          <?php if(is_array($vo['article'])): $i = 0; $__LIST__ = $vo['article'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="#" title="售后流程"><?php echo ($vo2["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>

      <div class="f_list">
      <h4>关注我们</h4>
      <ul>
        <li> <a href="https://weibo.com/" target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a></li>
        <li><a href="https://qzone.qq.com/" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>
        <li><a href="http://t.qq.com/" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a></li>
      </ul>
    </div>
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
    <div class="record" style="height:50px">
      <div style="width:500px;margin: 0 auto;">
       © 2018 Ding  &nbsp; <a href="#" target="_blank">暂无内容</a>&nbsp; <a href="#" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11111111号&nbsp; 京公网安备11111111&nbsp;<br>
      客服邮箱：暂无&nbsp;&nbsp;客服电话：18525703670&nbsp; 文明办网文明上网举报电话：010-0000000 &nbsp; <a href="#" target="_blank">违法不良信息举报中心</a>
    </div>
    </div>
  </div>
  <div class="blank10"></div>
</div>
<script src="/shop/Public/style/jquery.min.js"></script>
<script type="text/javascript" src="/shop/Public/style/login.js"></script>

<div class="blank"></div>

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