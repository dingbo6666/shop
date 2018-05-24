<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>购物流程</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/shop/Public/style/shopping_flow.js"></script></head>
<body>
<link href="/shop/Public/style/qq.css" rel="stylesheet" type="text/css" />
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
当前位置: <a href=".">首页</a> <code>&gt;</code> 购物流程
</div>
</div>
<div class="blank"></div>
<div class="block table">
  <div class="flowBox">
    <h6><span>商品列表</span></h6>
        <form id="formCart" name="formCart" method="post" action="flow.php">
          <?php if($goodsInfo){ ?>
           <table id="cart" width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <th bgcolor="#ffffff">商品名称</th>
                    <th bgcolor="#ffffff">属性</th>
                                          <th bgcolor="#ffffff">市场价</th>
                            <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
              <th bgcolor="#ffffff">操作</th>
            </tr>
            <?php
 $tprice=0; $tmaprice=0; foreach( $goodsInfo as $k=>$v):?>
                        <tr goods_id="<?php echo $v['goods_id'];?>" goods_attr_ids="<?php echo $v['goods_attr_ids'];?>">
              <td bgcolor="#ffffff" align="center" style="width:300px;">
                                                      <a href="goods.php?id=1" target="_blank"><img style="width:80px; height:80px;" src="/shop<?php echo $v['midThumb'];?>" border="0" title="苹果手机" /></a><br />
                    <a href="goods.php?id=1" target="_blank" class="f6"><?php echo $v['goodsName'];?></a>
                                                                                    </td>
                            <td  bgcolor="#ffffff">
                             <?php echo $v['attrStr'];?>
                            </td>
                                          <td align="center" mktprice="<?php echo $v['marketPrice'];?>" bgcolor="#ffffff">￥<?php $maprice=$v['marketPrice']*$v['number']; $tmaprice+=$maprice; echo $v['marketPrice'];?>元</td>
                            <td align="center" mprice="<?php echo $v['mprice'];?>" bgcolor="#ffffff">￥<?php echo $v['mprice'];?>元</td>
              <td align="center" bgcolor="#ffffff">
                              <span onclick="delnum(this);" style="border:1px solid #ccc; padding:1px 5px; cursor:pointer;">-</span>
                               <input type="text" readonly="readonly" name="goods_number[4]" id="goods_number_4" value="<?php echo $v['number'];?>" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)"/>
                               <span onclick="addnum(this);" style="border:1px solid #ccc; padding:1px 5px; cursor:pointer;">+</span>
                              </td>
              <td align="center" bgcolor="#ffffff">￥<?php  $xj=$v['number']*$v['mprice']; $tprice+=$xj; echo $xj;?>元</td>
              <td align="center" bgcolor="#ffffff">
                <a href="javascript:;" onclick="deltr(this);" class="f6">删除</a>
              </td>
            </tr>
            <?php endforeach;?>
                      </table>
            <?php }else{?>
            暂无商品数据
            <?php }?>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td bgcolor="#ffffff">
                            购物金额小计 ￥<span id="xjje"><?php echo $tprice;?></span>元，比市场价 ￥<span id="scje"><?php echo $tmaprice;?></span>元 节省了 ￥<span id="jsje"><?php echo $tmaprice-$tprice;?></span>元  </td>
              <td align="right" bgcolor="#ffffff">
                <input type="button" value="清空购物车" class="bnt_blue_1" onclick="clearCart();" />
              </td>
            </tr>
          </table>
          <input type="hidden" name="step" value="update_cart" />
        </form>
        <script type="text/javascript">
        function clearCart(){
          if(confirm('确定要清空购物车吗？')){
             $("#cart").html('暂无商品数据');
             $("#xjje").text(0);
             $("#scje").text(0);
             $("#jsje").text(0);
             $.get("/shop/index.php/Home/Flow/clearCart");
          }
        }
        function delnum(o){
          var input=$(o).next();
          var num=input.val();
          var xjje=$("#xjje").html();
          var scje=$("#scje").html();
          var tjsje=$("#jsje").html();
          var tr=$(o).parent().parent();
          var gi=tr.attr("goods_id");
          var gattr=tr.attr("goods_attr_ids");
          if(num>1){
            num=parseInt(num)-1;
             //ajax获取当前货品库存量
            getgoodsnum(gi,gattr,num);
            input.val(num);
            var mprice=$(o).parent().prev().attr('mprice');
            var mktprice=$(o).parent().prev().prev().attr('mktprice');
            var xj=parseInt(num)*mprice;
            xj='￥'+xj+'元';
            $(o).parent().next().html(xj);
            xjje=parseInt(xjje)-parseInt(mprice);
            scje=parseInt(scje)-parseInt(mktprice);
            var jsje=parseInt(mktprice)-parseInt(mprice);
            tjsje=parseInt(tjsje)-parseInt(jsje);
            $("#xjje").html(xjje);
            $("#scje").html(scje);
            $("#jsje").html(tjsje);
          }else{
            alert('购买数量必须大于1！');
            return false;
          }
          ajaxupdategn(gi,gattr,num);
        }
        function addnum(o){
          var input=$(o).prev();
          var num=input.val();
          var xjje=$("#xjje").html();
          var scje=$("#scje").html();
          var tjsje=$("#jsje").html();
          var tr=$(o).parent().parent();
          var gi=tr.attr("goods_id");
          var gattr=tr.attr("goods_attr_ids");
          num=parseInt(num)+1;
          //ajax获取当前货品库存量
          getgoodsnum(gi,gattr,num);
          input.val(num);
          var mprice=$(o).parent().prev().attr('mprice');
          var mktprice=$(o).parent().prev().prev().attr('mktprice');
          xjje=parseInt(xjje)+parseInt(mprice);
          scje=parseInt(scje)+parseInt(mktprice);
          var jsje=parseInt(mktprice)-parseInt(mprice);
          tjsje=parseInt(tjsje)+parseInt(jsje);
          $("#jsje").html(tjsje);
          $("#xjje").html(xjje);
          $("#scje").html(scje);
            var xj=parseInt(num)*mprice;
            xj='￥'+xj+'元';
            $(o).parent().next().html(xj);
            ajaxupdategn(gi,gattr,num);
        }
        function deltr(o){
          if(!confirm('确定要删除该商品吗？')){
            return false;
          }
          var xjje=$("#xjje").html();
          var scje=$("#scje").html();
          var tjsje=$("#jsje").html();
          var input=$(o).parent().prev().prev().find('input');
          var num=input.val();
          var mprice=$(o).parent().prev().prev().prev().attr('mprice');
          var mktprice=$(o).parent().prev().prev().prev().prev().attr('mktprice');
          var _tmprice=parseInt(mprice)*parseInt(num);
          var _tmktprice=parseInt(mktprice)*parseInt(num);
          var _tjs=(parseInt(mktprice)-parseInt(mprice))*parseInt(num);
          var tr=$(o).parent().parent();
          var gi=tr.attr("goods_id");
          var gattr=tr.attr("goods_attr_ids");
          xjje=parseInt(xjje)-parseInt(_tmprice);
          $("#xjje").html(xjje);
          scje=parseInt(scje)-parseInt(_tmktprice);
          $("#scje").html(scje);
          tjsje=parseInt(tjsje)-parseInt(_tjs);
          $("#jsje").html(tjsje);
          $(o).parent().parent().remove();
          ajaxupdategn(gi,gattr,0);
        }
        function ajaxupdategn(gi,gattr,num){
          if(gattr==""){
            $.get("/shop/index.php/Home/Flow/ajaxupdateGN/gi/"+gi+"/gn/"+num);
          }else{
            $.get("/shop/index.php/Home/Flow/ajaxupdateGN/gi/"+gi+"/gattr/"+gattr+"/gn/"+num);
          }
        }
        //ajax获取商品库存量
        function getgoodsnum(gid,gaid,num){
          if(gaid != ""){
            var url="/shop/index.php/Home/goods/getgoodsnum/gid/"+gid+"/gaid/"+gaid;
          }else{
            var url="/shop/index.php/Home/goods/getgoodsnum/gid/"+gid;
          }
          $.ajax({
            type:"get",
            url:url,
            success:function(data){
              if(data<num){
                alert('当前商品库存不足！');
                $("#jszx").attr("href","javascript:;");
              }else{
                $("#jszx").attr("href","/shop/index.php/Home/Flow/flow2");
              }

            }
          });
        }
        </script>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
          <tr>
            <td bgcolor="#ffffff"><a target="_blank" href="/shop/index.php"><img src="/shop/Public/images/continue.gif" alt="continue" /></a></td>
            <td bgcolor="#ffffff" align="right"><a id="jszx" href="/shop/index.php/Home/Flow/flow2"><img src="/shop/Public/images/checkout.gif" alt="checkout" /></a></td>
          </tr>
        </table>
  </div>
    <div class="blank"></div>
    <div class="blank5"></div>
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
        <li> <a href="#" target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a></li>
        <li><a href="#" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>
        <li><a href="#" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a></li>
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
    <div class="text" style="height:1px ; width:1px; overflow:hidden;">
      Tel: 123456
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=851818184&amp;Site=%E9%BC%8E%E6%96%B0%E6%96%87%E5%8C%96QQ851818184&amp;Menu=yes" target="_blank"><img src="/shop/Public/images/pa.gif" alt="QQ" border="0" height="16"> 851818184</a>
      <img src="/shop/Public/images/msn.gif" alt="MSN" border="0" height="17" width="18"> <a href="msnim:chat?contact=ecmoban@msn.com">ecmoban@msn.com</a>
      <br>
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
<link href="/shop/Public/style/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
	      </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_q/shop/Public/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
</html>