<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="Keywords" content="">
<meta name="Description" content="国庆大促，下单再减10%">
<title>商品详情页</title>
<link rel="shortcut icon" href="/mbmeilishuo/favicon.ico">
<link href="/shop/Public/style/base.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="/mbmeilishuo/animated_favicon.gif" type="image/gif">
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css">
<script src="style/hm.js"></script><script type="text/javascript" src="/shop/Public/style/common.js"></script><script type="text/javascript" src="/shop/Public/style/action.js"></script>
<script type="text/javascript" src="/shop/Public/style/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body style="cursor: auto;">
<link href="style/qq.htm" rel="stylesheet" type="text/css">

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
 <script type="text/javascript" src="/shop/Public/style/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/shop/Public/style/jquery.jqzoom.js"></script>
<script type="text/javascript" src="/shop/Public/style/base.js"></script>

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
        <input name="keywords" id="keyword"  value="请输入你想要搜索的内容" class="searchKey" type="text">
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
当前位置: <a href="/shop/index.php">首页</a> <code>&gt;</code>
<?php if(is_array($pos)): $i = 0; $__LIST__ = $pos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><a href="/shop/index.php/Home/goods/index/id/<?php echo ($cate["id"]); ?>"><?php echo ($cate["catename"]); ?></a> <code>&gt;</code><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">

  <div class="AreaL">

  <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <dl class="clearfix" style=" overflow:hidden;">
   <div class="box1 cate" id="cate">
<?php foreach ($navRes as $k => $v):?>
					<h1 onclick="tab(<?php echo $k;?>)" <?php if($k==0){echo 'style="border-top:none"';}?> >


		<span class="f_l"><img src="/shop/Public/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="/mbmeilishuo/category.php?id=22" class="  f_l"><?php echo $v['catename'];?></a>
		</h1>
		<ul style="display:none">
		<?php foreach ($v['children'] as $k1 => $v1):?>
				 <a class="over_2" href="/mbmeilishuo/category.php?id=23"><?php echo $v1['catename'];?></a>

<div class="clearfix">
</div>
<?php endforeach;?>
				</ul>
		<div style="clear:both"></div>
	<?php endforeach;?>
</div>
<div style="clear:both"></div>
</dl></div>

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
</script>

    <div style="display: block;" class="box" id="history_div"> <div class="box_1">
 <h3><span>浏览历史</span></h3>

  <div class="boxCenterList clearfix" id="history_list">
    <ul class="clearfix"><li class="goodsimg"><a href="/mbmeilishuo/goods.php?id=208" target="_blank"><img src="/shop/Public/images/208_thumb_G_1419373849576.png" alt="简约纯色时尚保暖" class="B_blue"></a></li><li><a href="/mbmeilishuo/goods.php?id=208" target="_blank" title="简约纯色时尚保暖">简约纯色时尚保暖</a><br>本店售价：<font class="f1">100元</font><br></li></ul><ul id="clear_history"><a onclick="clear_history()">[清空]</a></ul>  </div>
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
</script>  </div>


  <div class="AreaR">

   <div id="goodsInfo" class="clearfix">

     <div class="imgInfo">
     <center>
<div id="preview" class="spec-preview">
<span class="jqzoom"><img jqimg="/shop/<?php echo ($goodsInfo["original"]); ?>" src="/shop/<?php echo ($goodsInfo["max_thumb"]); ?>" /></span>
</div>
<!--缩图开始-->
<div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
  <div class="items">
    <ul>
		<?php if(is_array($gpRes)): $i = 0; $__LIST__ = $gpRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodspic): $mod = ($i % 2 );++$i;?><li><img alt="佳能" bimg="/shop/<?php echo ($goodspic["original"]); ?>" src="/shop/<?php echo ($goodspic["max_thumb"]); ?>" onmousemove="preview(this);"></li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
  </div>
</div>
<!--缩图结束-->
</center>
     </div>

     <div class="textInfo">
     <form action="/shop/index.php/Home/Flow/addToCar" method="post" name="ECS_FORMBUY" >
     <input name="goods_id" value="<?php echo ($goodsId); ?>" type="hidden">
	  <h1 class="clearfix">
      <?php echo ($goodsInfo["goods_name"]); ?> </h1>

	  <ul class="ul2 clearfix">
        <li class="clearfix" style="width:100%">
       <dd>


       <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE"><?php echo ($mprice); ?>元</font>


	          <font class="market"><?php echo ($goodsInfo["market_price"]); ?>元</font>
              </dd>
       </li>

             <li class="clearfix">
       <dd>
       <strong>商品货号：</strong><?php echo ($goodsInfo["goods_sn"]); ?>
       </dd>
       </li>
                      <li class="clearfix">
       <dd>

                  <strong>商品库存：</strong>
          99
       </dd>
       </li>
                    <li class="clearfix">
       <dd>

       <strong>商品品牌：</strong><a target="_blank" href="<?php echo ($goodsInfo["brand_url"]); ?>"><?php echo ($goodsInfo["brand_name"]); ?></a>

       </dd>
       </li>
                       <li class="clearfix">
       <dd>

       <strong>商品重量：</strong><?php echo ($goodsInfo["goods_weight"]); ?> <?php echo ($goodsInfo["weight_unit"]); ?>
       </dd>
      </li>

	  </ul>

	  <ul>


  <li class="clearfix">
       <dd>
        <?php if(is_array($levelPrice)): $i = 0; $__LIST__ = $levelPrice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level): $mod = ($i % 2 );++$i; echo ($level["levelname"]); ?>：<font class="f1" id="ECS_RANKPRICE_1" style=" padding-right:10px;"><?php echo ($level["price"]); ?>元</font><?php endforeach; endif; else: echo "" ;endif; ?>
         </dd>
      </li>

                            </ul>
         <ul class="bnt_ul">
         <?php foreach ($radioAttr as $k => $v):?>
            <li class="padd loop">
      <strong><?php echo $v[0]['attr_name'];?>：</strong>
      	<?php foreach ($v as $k1 => $v1):?>
        <input class="gattr" <?php if($k1==0){echo 'checked="checked"';}?> name="goods_attr[<?php echo $k;?>]" type="radio" value="<?php echo $v1['id'];?>"  /><?php echo $v1['attr_value']; if($v1['attr_price']>0){echo '【加'.$v1['attr_price'].'】';} if($v1['attr_price']<0){echo '【减'.$v1['attr_price'].'】';}?>
         <?php endforeach;?>
      	</li>
        <?php endforeach;?>


           <li class="clearfix">
       <dd>
       <strong>购买数量：</strong>
       <font id="delnum" style="border:1px solid #ccc;  padding:2px 4px; cursor:pointer;">-</font>
        <input name="number" id="number" value="1" size="4" style="border:1px solid #ccc; text-align:center; " type="text">
        <font id="addnum" style="border:1px solid #ccc;  padding:2px 4px; cursor:pointer;">+</font>
         <strong>库存状态：</strong><font id="product" class="f1"></font>
       </dd>
       </li>

      <li class="padd">
      <button id="addcart">加入购物车</button>

      </li>

      </ul>
      </form>
     </div>
   </div>
   <div class="blank"></div>
   <script type="text/javascript">
    var num=$("#number").val();
    $("#delnum").click(function(){
      num=parseInt(num)-1;
      getgoodsnum();
      if(num>=1){
        $("#number").val(num);
      }else{
        alert('购买数量必须大于1！');
        return false;
      }
    });

    $("#addnum").click(function(){
      num=parseInt(num)+1;
      getgoodsnum();
      $("#number").val(num);
    });

    //ajax获取商品库存量
    function getgoodsnum(){
      var gid=<?php echo ($goodsId); ?>;
      var gaid=[];
      $(".gattr").each(function(k,v){
        if($(this).attr("checked")){
          gaid.push($(this).val());
        }
      });
      gaid.sort();
      gaid=gaid.join(",");
      if(gaid != ""){
        var url="/shop/index.php/Home/Goods/getgoodsnum/gid/"+gid+"/gaid/"+gaid;
      }else{
        var url="/shop/index.php/Home/Goods/getgoodsnum/gid/"+gid;
      }
      $.ajax({
        type:"get",
        url:url,
        success:function(data){
          //当前购买数量
          var num=$("#number").val();
          if(parseInt(data)>=parseInt(num)){
            $("#product").html("有货");
            $("#addcart").removeAttr("disabled");
          }else{
            $("#product").html("无货");
            alert('当前货品数量不足！');
            $("#addcart").attr("disabled","disabled");
            return false;
          }
        }
      });
    }
    $(".gattr").click(function(){
      getgoodsnum();
    });
    getgoodsnum();
   </script>

     <div class="box">

      <div style="padding:0 0px;">
        <div id="com_b" class="history clearfix">
        <h2 style="cursor: pointer;">商品描述</h2>
        <h2 style="cursor: pointer;" class="h2bg">商品属性</h2>
         <h2 style="cursor: pointer;" class="h2bg">商品标签</h2>
           <h2 style="cursor: pointer;" class="h2bg">相关商品</h2>
                </div>
      </div>    <div class="box_1">
      <div id="com_v" class="  " style="padding:6px;">
       1111
        </div>
      <div class="none" id="com_h">
       <blockquote>

       <?php echo htmlspecialchars_decode($goodsInfo['goods_desc']);?>
        </blockquote>

       <blockquote>

     	    <table  border="0" bgcolor="#ccc"
    cellpadding="0" cellspacing="1">
    <?php if(is_array($uniAttr)): $i = 0; $__LIST__ = $uniAttr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uAttr): $mod = ($i % 2 );++$i;?><tr>
    <td bgcolor="white"><?php echo ($uAttr["attr_name"]); ?></td><td  bgcolor="white"><?php echo ($uAttr["attr_value"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
     </blockquote>
     <blockquote>

     <div class="box">
     <div class="box_1">
      44444
     </div>
    </div>
    <div class="blank5"></div>
     </blockquote>

     <blockquote>

     </blockquote>

      </div>
     </div>
    </div>

  <div class="blank"></div>
   <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>

     <div class="box">
     <div class="box_1">
      <h3><span class="text">购买过此商品的人还购买过</span></h3>
      <div class="boxCenterList clearfix ie6" style="padding:2px;">
               <div class="goodsItem" style="padding: 10px 2px 15px 2px;">
         <a href="/mbmeilishuo/goods.php?id=138"><img src="/shop/Public/images/138_thumb_G_1413929827659.jpg" alt="现货发售 马海毛保暖毛衣" class="goodsimg"></a><br>
         <p><a href="/mbmeilishuo/goods.php?id=138" title="现货发售 马海毛保暖毛衣">现货发售 马海毛保暖毛衣</a></p>
                 <font class="shop_s">120元</font>
                </div>
                <div class="goodsItem" style="padding: 10px 2px 15px 2px;">
         <a href="/mbmeilishuo/goods.php?id=136"><img src="/shop/Public/images/136_thumb_G_1413930502490.jpg" alt="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴" class="goodsimg"></a><br>
         <p><a href="/mbmeilishuo/goods.php?id=136" title="米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸靴">米兰时装周同款 法式优雅女人味性感尖头及踝靴 细跟高跟短靴裸...</a></p>
                 <font class="shop_s">110元</font>
                </div>
                <div class="goodsItem" style="padding: 10px 2px 15px 2px;">
         <a href="/mbmeilishuo/goods.php?id=141"><img src="/shop/Public/images/141_thumb_G_1413926445469.jpg" alt="高质感毛呢大衣" class="goodsimg"></a><br>
         <p><a href="/mbmeilishuo/goods.php?id=141" title="高质感毛呢大衣">高质感毛呢大衣</a></p>
                 <font class="shop_s">110元</font>
                </div>
                <div class="goodsItem" style="padding: 10px 2px 15px 2px;">
         <a href="/mbmeilishuo/goods.php?id=134"><img src="/shop/Public/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装" class="goodsimg"></a><br>
         <p><a href="/mbmeilishuo/goods.php?id=134" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装">韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气...</a></p>
                 <font class="shop_s">110元</font>
                </div>
              </div>
     </div>
    </div>
    <div class="blank5"></div>
    <div id="ECS_COMMENT"> <div class="box">
     <div class="box_1">
      <h3><span class="text">用户评论</span>(共<font class="f1">0</font>条评论)</h3>
      <div class="boxCenterList clearfix" style="height:1%;">
       <ul class="comments">
               <li>暂时还没有任何用户评论</li>
               </ul>

       <div id="pagebar" class="f_r">
        <form name="selectPageForm" action="/mbmeilishuo/goods.php" method="get">
                <div id="pager">
          总计 0 个记录，共 1 页。 <span> <a href="javascript:gotoPage(1,140,0)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
                    </div>
                </form>
      </div>

      <div class="blank5"></div>

      <div class="commentsList">
      <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
       <table border="0" cellpadding="0" cellspacing="5" width="710">
        <tbody><tr>
          <td align="right" width="64">用户名：</td>
          <td width="631">匿名用户</td>
        </tr>
        <tr>
          <td align="right">E-mail：</td>
          <td>
          <input name="email" id="email" maxlength="100" class="inputBorder" type="text">
          </td>
        </tr>
        <tr>
          <td align="right">评价等级：</td>
          <td>
          <input name="comment_rank" value="1" id="comment_rank1" type="radio"> <img src="/shop/Public/images/stars1.gif">
          <input name="comment_rank" value="2" id="comment_rank2" type="radio"> <img src="/shop/Public/images/stars2.gif">
          <input name="comment_rank" value="3" id="comment_rank3" type="radio"> <img src="/shop/Public/images/stars3.gif">
          <input name="comment_rank" value="4" id="comment_rank4" type="radio"> <img src="/shop/Public/images/stars4.gif">
          <input name="comment_rank" value="5" checked="checked" id="comment_rank5" type="radio"> <img src="/shop/Public/images/stars5.gif">
          </td>
        </tr>
        <tr>
          <td align="right" valign="top">评论内容：</td>
          <td>
          <textarea name="content" class="inputBorder" style="height:50px; width:620px;"></textarea>
          <input name="cmt_type" value="0" type="hidden">
          <input name="id" value="140" type="hidden">
          </td>
        </tr>
        <tr>
          <td colspan="2">
                    <div style="padding-left:15px; text-align:left; float:left;">
          验证码：<input name="captcha" class="inputBorder" style="width:50px; margin-left:5px;" type="text">
          <img src="/shop/Public/images/captcha.png" alt="captcha" onclick="this.src='captcha.php?'+Math.random()" class="captcha">
          </div>
                         <input name="" value="评论咨询" class="f_r bnt_blue_1" style=" margin-right:8px;" type="submit">
          </td>
        </tr>
      </tbody></table>
      </form>
      </div>

      </div>
     </div>
    </div>
    <div class="blank5"></div>

</div>
  </div>

</div>
<include file="Common/footer">
</div>
<div class="blank"></div>

<link href="style/qq.css" rel="stylesheet" type="text/css">
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


<img src="/shop/Public/images/controlbar.htm" style="position: absolute; top: -999px;"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911455.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911455.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928892532.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928892532.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911596.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911596.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928959652.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928959652.jpg"><img src="/shop/Public/images/controlbar.htm" style="position: absolute; top: -999px;"><div class="MagicThumb-container" style="position: absolute; display: none; visibility: hidden;"><div style="font-size: 0px; height: 0px; outline: medium none; border: medium none; line-height: 0px; width: 710px; padding-left: 1px; padding-right: 1px;"></div><div style="display: inline; overflow: hidden; visibility: visible; color: rgb(255, 0, 0); font-size: 12px; font-weight: bold; font-family: Tahoma; position: absolute; width: 90%; text-align: right; right: 15px; top: 702px; z-index: 10;"></div><div class="MagicThumb-controlbar" style="position: absolute; top: -9999px; visibility: hidden; z-index: 11;"><a style="float: left; position: relative;" rel="close" href="#" title="Close"><span style="left: -36px; cursor: pointer;"></span></a></div></div><img class="MagicThumb-image" style="position: absolute; top: -9999px; display: none;" src="./images/140_P_1413928911455.jpg"><img src="/shop/Public/images/controlbar.htm" style="position: absolute; top: -999px;"></body></html>