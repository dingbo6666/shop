<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="Keywords" content="">
<title>商品详情页</title>
<link rel="shortcut icon" href="/mbmeilishuo/favicon.ico">
<link href="/shop/Public/style/base.css" rel="stylesheet" type="text/css" />
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css">
<link href="/shop/Public/style/table.css" rel="stylesheet" type="text/css" />
<script src="style/hm.js"></script><script type="text/javascript" src="/shop/Public/style/action.js"></script>
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
		<a href="/shop/index.php/Home/category/index/id/<?php echo $v['id'];?>" class="  f_l"><?php echo $v['catename'];?></a>
		</h1>
		<ul style="display:none">
		<?php foreach ($v['children'] as $k1 => $v1):?>
				 <a class="over_2" href="/shop/index.php/Home/category/index/id/<?php echo $v1['id'];?>"><?php echo $v1['catename'];?></a>

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
		<?php if(is_array($gpRes)): $i = 0; $__LIST__ = $gpRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodspic): $mod = ($i % 2 );++$i;?><li><img alt="" bimg="/shop/<?php echo ($goodspic["original"]); ?>" src="/shop/<?php echo ($goodspic["max_thumb"]); ?>" onmousemove="preview(this);"></li><?php endforeach; endif; else: echo "" ;endif; ?>

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
        </div>
      </div>
      <div class="box_1">
      <div id="com_v" class="  " style="padding:6px;">
       1111
      </div>
      <div class="none" id="com_h">
       <blockquote>
       <?php echo htmlspecialchars_decode($goodsInfo['goods_desc']);?>
        </blockquote>

       <blockquote>

    <table id="table-5">
    <?php if(is_array($uniAttr)): $i = 0; $__LIST__ = $uniAttr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uAttr): $mod = ($i % 2 );++$i;?><tr>
    <td><?php echo ($uAttr["attr_name"]); ?></td>
    <td><?php echo ($uAttr["attr_value"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
     </blockquote>
     <blockquote>

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

    <div class="blank5"></div>
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


<img src="/shop/Public/images/controlbar.htm" style="position: absolute; top: -999px;"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911455.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911455.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928892532.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928892532.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911596.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928911596.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928959652.jpg"><img style="position: absolute; left: -10000px; top: -10000px;" src="./images/140_P_1413928959652.jpg"><img src="/shop/Public/images/controlbar.htm" style="position: absolute; top: -999px;"><div class="MagicThumb-container" style="position: absolute; display: none; visibility: hidden;"><div style="font-size: 0px; height: 0px; outline: medium none; border: medium none; line-height: 0px; width: 710px; padding-left: 1px; padding-right: 1px;"></div><div style="display: inline; overflow: hidden; visibility: visible; color: rgb(255, 0, 0); font-size: 12px; font-weight: bold; font-family: Tahoma; position: absolute; width: 90%; text-align: right; right: 15px; top: 702px; z-index: 10;"></div><div class="MagicThumb-controlbar" style="position: absolute; top: -9999px; visibility: hidden; z-index: 11;"><a style="float: left; position: relative;" rel="close" href="#" title="Close"><span style="left: -36px; cursor: pointer;"></span></a></div></div><img class="MagicThumb-image" style="position: absolute; top: -9999px; display: none;" src="./images/140_P_1413928911455.jpg"><img src="/shop/Public/images/controlbar.htm" style="position: absolute; top: -999px;"></body></html>