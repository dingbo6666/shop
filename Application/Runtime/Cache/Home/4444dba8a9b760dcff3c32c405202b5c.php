<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="484519446">
<meta name="Description" content="484519446">
<title><?php echo ($configres["sitename"]); ?>商城首页</title>
<link rel="shortcut icon" href="mbmeilishuo/favicon.ico">
<link rel="icon" href="mbmeilishuo/animated_favicon.gif" type="image/gif">
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css">
<script src="/shop/Public/style/hm.js"></script>
<script type="text/javascript" src="/shop/Public/style/index.js"></script></head>
<body class="index_page" style="min-width:1200px;">

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


<style type="text/css">
.container, .container *{margin:0; padding:0;}
.container{width:100%; height:419px; overflow:hidden;position:relative;}
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
* {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        body {
            padding: 20px;
        }
        #container {
            position: relative;
            width: 1300px;
            height: 400px;
            border: 3px solid #333;
            overflow: hidden;
            margin-left: 100px
        }
        #list {
            position: absolute;
            z-index: 1;
            width: 9100px;
            height: 400px;
        }
        #list img {
            float: left;
            width: 1300px;
            height: 400px;
        }
        #buttons {
            position: absolute;
            left: 1300px;
            bottom: 20px;
            z-index: 2;
            height: 10px;
            width: 100px;
        }
        #buttons span {
            float: left;
            margin-right: 5px;
            width: 10px;
            height: 10px;
            border: 1px solid #fff;
            border-radius: 50%;
            background: #333;
            cursor: pointer;
        }
        #buttons .on {
            background: orangered;
        }
        .arrow {
            position: absolute;
            top: 180px;
            z-index: 2;
            display: none;
            width: 40px;
            height: 40px;
            font-size: 36px;
            font-weight: bold;
            line-height: 39px;
            text-align: center;
            color: #fff;
            background-color: RGBA(0, 0, 0, .3);
            cursor: pointer;
        }
        .arrow:hover {
            background-color: RGBA(0, 0, 0, .7);
        }
        #container:hover .arrow {
            display: block;
        }
        #prev {
            left: 20px;
        }
        #next {
            right: 20px;
        }
</style>


<div style="overflow: hidden; position: relative;" class="container" id="idTransformView">
  <div id="container">
          <div id="list" style="left: -1300px;">
             <img src="/shop/Public/images/5.jpg" alt="1" />
             <img src="/shop/Public/images/1.jpg" alt="1" />
             <img src="/shop/Public/images/2.jpg" alt="2" />
             <img src="/shop/Public/images/3.jpg" alt="3" />
             <img src="/shop/Public/images/4.jpg" alt="4" />
             <img src="/shop/Public/images/5.jpg" alt="5" />
             <img src="/shop/Public/images/1.jpg" alt="5" />
         </div>
        <div id="buttons">
            <span index="1" class="on"></span>
            <span index="2"></span>
            <span index="3"></span>
            <span index="4"></span>
            <span index="5"></span>
        </div>
       <a href="javascript:;" id="prev" class="arrow">&lt;</a>
        <a href="javascript:;" id="next" class="arrow">&gt;</a>
    </div>
</div>
<script type="text/javascript">
        /* 知识点：        */
        /*       this用法 */
        /*       DOM事件 */
        /*       定时器 */
        window.onload = function () {
            var container = document.getElementById('container');
            var list = document.getElementById('list');
            var buttons = document.getElementById('buttons').getElementsByTagName('span');
            var prev = document.getElementById('prev');
            var next = document.getElementById('next');
            var index = 1;
            var timer;
            function animate(offset) {
                //获取的是style.left，是相对左边获取距离，所以第一张图后style.left都为负值，
                //且style.left获取的是字符串，需要用parseInt()取整转化为数字。
                var newLeft = parseInt(list.style.left) + offset;
                list.style.left = newLeft + 'px';
                //无限滚动判断
                if (newLeft > -1300) {
                    list.style.left = -6500 + 'px';
                }
                if (newLeft < -6500) {
                    list.style.left = -1300 + 'px';
                }
            }
            function play() {
                //重复执行的定时器
                timer = setInterval(function () {
                    next.onclick();
                }, 2000)
            }
            function stop() {
                clearInterval(timer);
            }
            function buttonsShow() {
                //将之前的小圆点的样式清除
                for (var i = 0; i < buttons.length; i++) {
                    if (buttons[i].className == "on") {
                        buttons[i].className = "";
                    }
                }
                //数组从0开始，故index需要-1
                buttons[index - 1].className = "on";
            }
            prev.onclick = function () {
                index -= 1;
                if (index < 1) {
                    index = 5
                }
                buttonsShow();
                animate(1300);
            };
            next.onclick = function () {
                //由于上边定时器的作用，index会一直递增下去，我们只有5个小圆点，所以需要做出判断
                index += 1;
                if (index > 5) {
                    index = 1
                }
                animate(-1300);
                buttonsShow();
            };
            for (var i = 0; i < buttons.length; i++) {
                (function (i) {
                    buttons[i].onclick = function () {
                        /*  这里获得鼠标移动到小圆点的位置，用this把index绑定到对象buttons[i]上，去谷歌this的用法  */
                        /*  由于这里的index是自定义属性，需要用到getAttribute()这个DOM2级方法，去获取自定义index的属性*/
                        var clickIndex = parseInt(this.getAttribute('index'));
                        var offset = 1300 * (index - clickIndex); //这个index是当前图片停留时的index
                        animate(offset);
                        index = clickIndex; //存放鼠标点击后的位置，用于小圆点的正常显示
                        buttonsShow();
                    }
                })(i)
            }
            container.onmouseover = stop;
            container.onmouseout = play;
            play();
        }
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
      <a class="a" href="http://127.0.0.1/shop/index.php/home/category/index/id/<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["catename"]); ?>
        <img src="/shop/Public/images/biao8.gif">
      </a>
      </div>
<dd id="DisSub2_<?php echo ($key+1); ?>" style="display: none;">
<?php foreach ($vo1['children'] as $k2 => $v2):?>
<a class="over_2" href="http://127.0.0.1/shop/index.php/home/category/index/id/<?php echo $v2['id'];?>"><?php echo $v2['catename'];?></a>
<div class="clearfix">
<?php foreach ($v2['children'] as $k3 => $v3):?>
<a class="over_3" href="http://127.0.0.1/shop/index.php/home/category/index/id/<?php echo $v3['id'];?>><?php echo $v3['catename'];?></a>
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
<img src="/shop/Public/images/timg.jpg" height="330" width="230">
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
                   <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>">
                     <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="B_blue" border="0">
                   </a>
                 </li>
          	     <li>
                   <p>
                   <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
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
<h4 class="title"><span>新品上架</span></h4>
    <div id="show_new_area" class="clearfix">
          <?php if(is_array($newgoods)): $i = 0; $__LIST__ = $newgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem">
          <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>">
            <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg">
          </a><br>
          <p class="f1">
            <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
          </p>
            市场价：<font class="market"><?php echo ($goods["market_price"]); ?>元</font><br>
            本店价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="blank"></div>
<div class="xm-box">
<h4 class="title"><span>热卖商品</span></h4>
<div id="show_hot_area" class="clearfix">
    <?php if(is_array($hotgoods)): $i = 0; $__LIST__ = $hotgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem">
         <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>">
           <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg">
         </a><br>
         <p class="f1">
           <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
         </p>
         市场价：<font class="market"><?php echo ($goods["market_price"]); ?>元</font><br>
         本店价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
<div class="blank"></div>
<div class="xm-box">
<h4 class="title"><span>精品推荐</span></h4>
<div id="show_best_area" class="clearfix">
    <?php if(is_array($bestgoods)): $i = 0; $__LIST__ = $bestgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="goodsItem">
         <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>">
           <img src="/shop/<?php echo ($goods["mid_thumb"]); ?>" alt="<?php echo ($goods["goods_name"]); ?>" class="goodsimg">
         </a><br>
         <p class="f1">
           <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo ($goods["id"]); ?>" title="<?php echo ($goods["goods_name"]); ?>"><?php echo ($goods["goods_name"]); ?></a>
         </p>
         市场价：<font class="market"><?php echo ($goods["market_price"]); ?>元</font><br>
         本店价：<font class="f1"><?php echo ($goods["shop_price"]); ?>元</font>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>
<div class="blank"></div>
<?php if(is_array($reccatesres)): $i = 0; $__LIST__ = $reccatesres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="xm-box">
<h4 class="title"><span><?php echo ($vo["catename"]); ?></span></h4>
<div id="show_hot_area" class="clearfix">
          <?php foreach ($vo['recgoods'] as $k => $v):?>
            <div class="goodsItem">
           <a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo $v['id'];?>">
             <img src="/shop<?php echo $v['mid_thumb'];?>" alt="1" class="goodsimg"></a><br>
           <p class="f1"><a href="http://127.0.0.1/shop/index.php/Home/goods/index/id/<?php echo $v['id'];?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></p>
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

</body></html>