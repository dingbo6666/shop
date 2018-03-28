<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>edit</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/shop/Application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/Application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/Application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/shop/Application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/shop/Application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/Application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/Application/Admin/Public/style/animate.css" rel="stylesheet">

</head>
<body>
	<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="http://127.0.0.1/shop/Application/Admin/Public/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/shop/Application/Admin/Public/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile">
                                      <span>
                                        <?php echo (session('username')); ?>
                                      </span>
                                    </span>
                                  </h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/shop/index.php/Admin/Admin/logout">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/shop/index.php/Admin/Admin/edit/id/<?php echo (session('uid')); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>


	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			      <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
              <a href="#" class="menu-dropdown">
                  <i class="menu-icon fa fa-gear"></i>
                  <span class="menu-text">管理员管理</span>
                  <i class="menu-expand"></i>
              </a>
                <ul class="submenu">
                    <li>
                      <a href="/shop/index.php/Admin/admin/lst">
                        <span class="menu-text">管理员列表</span>
                        <i class="menu-expand"></i>
                      </a>
                    </li>
              </ul>
        </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品模块</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/shop/index.php/Admin/Cate/lst">
                      <span class="menu-text">分类管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Brand/lst">
                      <span class="menu-text">品牌管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Goods/lst">
                      <span class="menu-text">商品管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Type/lst">
                      <span class="menu-text">商品类型</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">导航设置</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/shop/index.php/Admin/Nav/lst">
                      <span class="menu-text">导航管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">文章模块</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/shop/index.php/Admin/Category/lst">
                      <span class="menu-text">栏目管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Article/lst">
                      <span class="menu-text">文章管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">广告模块</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/shop/index.php/Admin/Adpos/lst">
                      <span class="menu-text">广告位管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Ad/lst">
                      <span class="menu-text">广告管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">会员模块</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/admin/user/index.html">
                      <span class="menu-text">会员管理</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/MemberLevel/lst">
                      <span class="menu-text">会员等级</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/admin/user/index.html">
                      <span class="menu-text">订单列表</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统管理</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/shop/index.php/Admin/Config/config">
                      <span class="menu-text">站点配置</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Config/lst">
                      <span class="menu-text">配置列表</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
            </ul>
      </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="/shop/index.php/Admin/Index/index">系统</a>
                    </li>
                                        <li>
                        <a href="/shop/index.php/Admin/Ad/lst">广告列表</a>
                    </li>
                                        <li class="active">修改广告</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改广告</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?php echo ($ads["id"]); ?>">
											<input type="hidden" name="oldpicurl" value="<?php echo ($ads["picurl"]); ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属广告位</label>
														<div class="col-sm-6">
                                <select name="posid">
                                    <option value="">请选择</option>
                                    <?php if(is_array($adposres)): $i = 0; $__LIST__ = $adposres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($ads['posid'] == $vo['id']): ?>selected<?php endif; ?> value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["pname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
												<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">是否启用</label>
                            <div class="col-sm-6">
                                <label>
                                    <input name="ison" value="1" <?php if($ads['ison'] == 1): ?>checked="checked"<?php endif; ?> class="checkbox-slider colored-darkorange" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
												<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">广告名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="adname" value="<?php echo ($ads["adname"]); ?>" placeholder="" name="adname" required="" type="text">
                            </div>
                        </div>
												<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">广告类型</label>
                            <div class="col-sm-6">
															<?php if($ads['type'] == 1): ?><label>
                                    <input name="type" value="1" checked="checked" class="inverted" type="radio">
                                    <span class="text">图片</span>
                                </label>
																<?php else: ?>
                                <label>
                                    <input name="type" value="2" checked="checked" class="inverted" type="radio">
                                    <span class="text">轮播</span>
                                </label><?php endif; ?>
                            </div>
                        </div>
												<?php if($ads['type'] == 1): ?><div id="pic">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">图片</label>
                            <div class="col-sm-6">
                                <label>
                                    <input name="picurl" class="checkbox-slider colored-darkorange" type="file" style="display:inline; width:200px;">
                                    <?php if($ads['picurl'] != ''): ?><img src="/shop/<?php echo ($ads["picurl"]); ?>" height="30"><?php else: ?>暂无广告图<?php endif; ?>
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">链接地址</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="link" placeholder="" value="<?php echo ($ads["link"]); ?>" name="link"  type="text">
                            </div>
                        </div>
                        </div>
                        <?php else: ?>
                        <?php if(is_array($adpicres)): $k = 0; $__LIST__ = $adpicres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div id="<?php echo ($vo["id"]); ?>" class="form-group img">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><a onclick="imgad(this);" href="javascript:;"><?php if($k == 1): ?>[+]<?php else: ?>[-]<?php endif; ?></a></label>
                                <div class="col-sm-6">
                                    <label>
                                        <span>图片：</span><input name="old_imgurl[]" style="display:inline;" class="checkbox-slider colored-darkorange" type="file">
                                        <span>地址：</span><input name="old_links[<?php echo ($vo["id"]); ?>]" style="display:inline; width:400px;" class="form-control"  placeholder="" value="<?php echo ($vo["links"]); ?>" type="text">
                                    </label>
                                    <img src="/shop<?php echo ($vo["imgurl"]); ?>" height="26">
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

	    <!--Basic Scripts-->
    <script src="http://127.0.0.1/shop/Application/Admin/Public/style/jquery_002.js"></script>
    <script src="http://127.0.0.1/shop/Application/Admin/Public/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/shop/Application/Admin/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://127.0.0.1/shop/Application/Admin/Public/style/beyond.js"></script>
		<script type="text/javascript">
    function imgad(o){
        var div=$(o).parent().parent();
        if($(o).html() == '[+]'){
            var newdiv=div.clone();
            newdiv.find('a').html('[-]');
            newdiv.find('input').attr("value","");
            newdiv.find('input').eq(0).attr("name","imgurl[]");
            newdiv.find('input').eq(1).attr("name","links[]");
            newdiv.find('img').remove();
            div.after(newdiv);
        }else{
            if(confirm('确定要删除该广告图片吗？')){
                var id=div.attr('id');
                $.ajax({
                type:"GET",
                url:"/shop/index.php/Admin/Ad/ajaxdeladpic/id/"+id,
                success:function(data){
                    div.remove();
                }
            });
            }
        }
    }
    </script>


</body></html>