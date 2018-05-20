<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/shop/Public/style/common.js"></script><script type="text/javascript" src="/shop/Public/style/shopping_flow.js"></script>
 <script type="text/javascript" src="/shop/Public/style/jquery-1.4.2.min.js"></script>
</head>
<body>
<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
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
  <div class="header_top logo_wrap"> <a class="logo_new" href="mbmeilishuo/index.php"><img src="/shop/Public/images/logo.gif"></a>
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
    <ul class="cart_info">
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
当前位置: <a href=".">首页</a> 购物流程
</div>
</div>
<div class="blank"></div>

<div class="block table">
  <form action="/shop/index.php/Home/Flow/flow3" method="post" >
        <div class="flowBox">
<h6><span>收货人信息</span></h6>
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
  <tr>
    <td bgcolor="#ffffff">收货人:</td>
    <td bgcolor="#ffffff"><input name="shr" type="text" value="<?php echo ($shrInfos["shr"]); ?>" ></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff">收货地址:</td>
    <td colspan="3" bgcolor="#ffffff">
      <div class="info">
        <div>
        <select id="s_province" name="province">
        </select>  
          <select id="s_city" name="city" >
          </select>  
          <select id="s_county" name="county">
          </select>
          <script class="resources library" src="/shop/Public/style/area.js" type="text/javascript"></script>
          <script type="text/javascript">_init_area();</script>
          </div>
          <div id="show"></div>
      </div>
      <script type="text/javascript">
      var Gid  = document.getElementById ;
      var showArea = function(){
        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
        Gid('s_city').value + " - 县/区" +
        Gid('s_county').value + "</h3>"
                    }
      Gid('s_county').setAttribute('onchange','showArea()');

      </script>
      <script type="text/javascript">
    //选定状态
      $("#s_province option:first").text("<?php echo ($shrInfos["province"]); ?>");
      $("#s_province option:first").val("<?php echo ($shrInfos["province"]); ?>");
      $("#s_city option:first").text("<?php echo ($shrInfos["city"]); ?>");
      $("#s_city option:first").val("<?php echo ($shrInfos["city"]); ?>");
      $("#s_county option:first").text("<?php echo ($shrInfos["county"]); ?>");
      $("#s_county option:first").val("<?php echo ($shrInfos["county"]); ?>");
      </script>

    </td>
  </tr>
  <tr>
    <td bgcolor="#ffffff">详细地址:</td>
    <td bgcolor="#ffffff"><input name="adress" value="<?php echo ($shrInfos["adress"]); ?>" type="text" style="width:400px;" ></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff">联系电话:</td>
    <td bgcolor="#ffffff"><input name="phone"  value="<?php echo ($shrInfos["phone"]); ?>" type="text" ></td>
  </tr>
</table>
<h6><span>支付方式</span></h6>
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
  <tr>
    <td bgcolor="#ffffff"><input name="pay" value="余额" type="radio">余额支付</td>
    <td bgcolor="#ffffff">您的账户余额:<?php echo ($memres["money"]); ?>元</td>
  </tr>
</table>

<h6><span>配送方式</span></h6>
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr>
    <th bgcolor="#ffffff">快递</th>
    <th bgcolor="#ffffff">运费</th>
    <th bgcolor="#ffffff">说明</th>
  </tr>
  <tr>
    <td bgcolor="#ffffff"><input name="peisong" value="邮政小包" type="radio">邮政小包</td>
    <td bgcolor="#ffffff">10元</td>
    <td bgcolor="#ffffff">邮政小包</td>
  </tr>
  <tr>
    <td bgcolor="#ffffff"><input name="peisong" value="百世汇通" type="radio">百世汇通</td>
    <td bgcolor="#ffffff">10元</td>
    <td bgcolor="#ffffff">百世汇通</td>
  </tr>
</table>
<h6><span>商品清单</span></h6>
<table id="cart" width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th bgcolor="#ffffff">商品名称</th>
                    <th bgcolor="#ffffff">属性</th>
                            <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
            </tr>
            <?php
 $tprice=0; foreach ($goodsInfo as $k => $v):?>
              <tr goods_id="38" goods_attr_ids="200,190">
              <td style="width:300px;" bgcolor="#ffffff" align="center">
                                                      <a href="goods.php?id=1" target="_blank"><img style="width:80px; height:80px;" src="/shop<?php echo $v['midThumb'];?>" title="苹果手机" border="0"></a><br>
                    <a href="goods.php?id=1" target="_blank" class="f6"><?php echo $v['goodsName'];?></a>
                                                                                    </td>
                            <td bgcolor="#ffffff">
                             <?php echo $v['attrStr'];?>                           </td>
                            <td mprice="340" bgcolor="#ffffff" align="center">￥<?php echo $v['mprice'];?>元</td>
              <td bgcolor="#ffffff" align="center">
                               <?php echo $v['number'];?>
                              </td>
              <td bgcolor="#ffffff" align="center">￥<?php  $xj=$v['number']*$v['mprice']; $tprice+=$xj; echo $xj;?>元</td>
            </tr>
            <?php endforeach;?>

                      </tbody></table>
</div>
<div class="flowBox">
    <h6><span>费用总计</span></h6>
          <div id="ECS_ORDERTOTAL">
<table width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
    <tbody>
    <tr>
    <td bgcolor="#ffffff" align="right">
      商品总价: <font class="f4_b">￥<?php echo $tprice;?>元 <input type="hidden" name="gtprice" value="<?php echo $tprice;?>"></font>
      <input type="hidden" name="yprice" value="10">
                                              </td>
  </tr>
    <tr>
    <td bgcolor="#ffffff" align="right"> 应付款金额: <font class="f4_b">￥<?php echo $tprice;?>元</font>
      </td>
  </tr>
</tbody></table>
</div>
            <div style="margin:8px auto;" align="center">
            <input src="/shop/Public/images/bnt_subOrder.gif" type="image">
            </div>
    </div>
</form>
</div>
<div class="footer">
  <div class="foot_con">
    <div class="f_list service_info">
      <div class="kefu"> <span class="tel_ico"></span>
        <p class="f20_f">18456875874</p>
        <p class="f14_f mt4_f">联系我们</p>
      </div>
      <ol class="business">
        <li>周一至周五：09:00-17:00</li>
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
    <div class="record"> © 2018 Ding  &nbsp; <a href="#" target="_blank">暂无内容</a>&nbsp; <a href="#" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11111111号&nbsp; 京公网安备11111111&nbsp;<br>
      客服邮箱：暂无&nbsp;&nbsp;客服电话：18525703670&nbsp; 文明办网文明上网举报电话：010-0000000 &nbsp; <a href="#" target="_blank">违法不良信息举报中心</a> </div>
  </div>
  <div class="blank10"></div>
</div>
<script src="/shop/Public/style/jquery.min.js"></script>
<script type="text/javascript" src="/shop/Public/style/login.js"></script>

<div class="blank"></div>
</html>