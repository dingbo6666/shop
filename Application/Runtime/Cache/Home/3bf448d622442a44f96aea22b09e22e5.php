<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">

<title>登录</title>

<link rel="shortcut icon" href="mbmeilishuo/favicon.ico">
<link href="/shop/Public/style/style.css" rel="stylesheet" type="text/css">
</head>
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

<div class="block block1">
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href="http://127.0.0.1/shop/index.php/home/index/index">首页</a> <code>&gt;</code> 用户中心
</div>
</div>
<div class="blank"></div>

<div class="usBox clearfix">
  <div class="usBox_1 f_l">
    <div class="login_tab">
    <ul>
        <li class="active"><a href="http://127.0.0.1/shop/index.php/Home/User/login.html">用户登录</a></li>
        <li><a href="http://127.0.0.1/shop/index.php/Home/User/reg.html">用户注册</a></li>
    </ul>
    </div>
   <form name="formLogin" action="" method="post" >
        <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
          <tbody><tr>
            <td align="right" width="25%">用户名</td>
            <td width="65%"><input name="username" size="25" class="inputBg" type="text"></td>
          </tr>
          <tr>
            <td align="right">密码</td>
            <td>
            <input name="password" size="15" class="inputBg" type="password">            </td>
          </tr>
                    <tr>
            <td align="right">验证码</td>
            <td><input size="8" name="captcha" class="inputBg" type="text">
            <img src="/shop/index.php/Home/User/verify" height="30" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src='/shop/index.php/Home/User/verify?'+Math.random()"> </td>
          </tr>
                    <tr>
            <td> </td>
            <td><input value="1" name="remember" id="remember" type="checkbox"><label for="remember">请保存我这次的登录信息。</label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
            <input name="submit" value="" class="us_Submit" type="submit">            </td>
          </tr>
      </tbody></table>
    </form>
    <div class="blank"></div>
  </div>

</div>

</div>
<div class="blank"></div>
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
</body></html>