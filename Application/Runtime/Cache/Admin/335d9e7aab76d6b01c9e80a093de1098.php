<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>add</title>

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
                            <img src="http://127.0.0.1/shop/Application/Admin/Public/images/logo.jpg" alt="">
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
                                    <img src="http://127.0.0.1/shop/Application/Admin/Public/images/adam-jansen.png">
                                </div>
                                <section>
                                    <h2><span class="profile">
                                      <span>
                                        <?php echo (session('uname')); ?>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			      <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">

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
                <span class="menu-text">推荐位管理</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/shop/index.php/Admin/Recpos/lst">
                      <span class="menu-text">推荐位列表</span>
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
                    <a href="/shop/index.php/Admin/Order/lst">
                      <span class="menu-text">订单列表</span>
                      <i class="menu-expand"></i>
                    </a>
                  </li>
                  <li>
                    <a href="/shop/index.php/Admin/Ordergoods/lst">
                      <span class="menu-text">订单详情</span>
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
                        <a href="/shop/index.php/Admin/Attr/lst">属性列表</a>
                    </li>
                                        <li class="active">添加属性</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增属性</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="attr_name" placeholder="" name="attr_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
												<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性类型</label>
														<div class="col-sm-6 radio">
                                <label>
                                    <input type="radio" checked="checked" value="0" name="attr_type">
                                    <span class="text">唯一</span>
                                </label>
                                <label>
                                    <input type="radio" class="inverted" value="1" name="attr_type">
                                    <span class="text">单选</span>
                                </label>
                            </div>
                        </div>
												<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性可选值</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="5" name="attr_values" ></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填 多个以“,”隔开</p>
                        </div>
												<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属类型</label>
                            <div class="col-sm-6">
                                <select name="type_id">
    															<?php if(is_array($typeres)): $i = 0; $__LIST__ = $typeres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo['id'] == $typeid): ?>selected='selected'<?php endif; ?> value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
																</select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
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



</body></html>