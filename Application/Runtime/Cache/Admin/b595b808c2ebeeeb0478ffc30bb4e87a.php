<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>后台</title>

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
            </ul>
      </li>
      <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
              <ul class="submenu">
                  <li>
                    <a href="/admin/user/index.html">
                      <span class="menu-text">文章列表</span>
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
                    <a href="/admin/user/index.html">
                      <span class="menu-text">站点配置</span>
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
                                        <li class="active">控制面板</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

				<div style="text-align:center; line-height:1000%; font-size:24px;">
                大型商城项目<br /><p style="color:#aaa;"></p></div>
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