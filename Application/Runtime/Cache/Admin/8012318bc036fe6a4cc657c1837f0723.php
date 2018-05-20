<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>lst</title>

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
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">品牌管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">


<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="10%">ID</th>
                                <th class="text-center">收货人</th>
																<th class="text-center">省</th>
																<th class="text-center">市</th>
																<th class="text-center">县</th>
																<th class="text-center">详细地址</th>
																<th class="text-center">电话号码</th>
																<th class="text-center">配送方式</th>
																<th class="text-center">总价</th>
																<th class="text-center">订单状态</th>
																<th class="text-center">支付状态</th>
																<th class="text-center">是否发货</th>
                                <th class="text-center" width="15%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
													<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center"><?php echo ($vo["id"]); ?></td>
                                <td align="center"><?php echo ($vo["shr"]); ?></td>
																<td align="center"><?php echo ($vo["province"]); ?></td>
																<td align="center"><?php echo ($vo["city"]); ?></a></td>
																<td align="center"><?php echo ($vo["country"]); ?></a></td>
																<td align="center"><?php echo ($vo["adress"]); ?></a></td>
																<td align="center"><?php echo ($vo["phone"]); ?></a></td>
																<td align="center"><?php echo ($vo["peisong"]); ?></a></td>
																<td align="center"><?php echo ($vo["tprice"]); ?></a></td>
																<td align="center">
																	<?php if($vo['order_status'] == 0): ?>未确认
																	<?php elseif($vo['order_status'] == 1): ?>
																	已确认
																	<?php elseif($vo['order_status'] == 2): ?>
																	退货
																	<?php else: ?>
																	已退货<?php endif; ?>
																</td>
																<td align="center">
																	<?php if($vo['pay_status'] == 0): ?>未支付
																	<?php else: ?>
																	已支付<?php endif; ?>
																</td>
																<td align="center">
																	<?php if($vo['fh_status'] == 0): ?>未发货
																	<?php else: ?>
																	已发货<?php endif; ?>
																</td>
																<td align="center">
                                    <a href="#" onClick="warning('确定要发货吗？', '/shop/index.php/Admin/Order/del/id/<?php echo ($vo["id"]); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-edit"></i> 发货
                                    </a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
										<div style="height:40px;">
                    <ul class="pagination" style="float:right; margin:10px 0 0 0; ">
                    <?php echo ($page); ?>
                    </ul>
                    </div>
                </div>
                <div>
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