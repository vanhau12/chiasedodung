<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ela Admin - HTML5 Admin Template</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/datatable/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

	<style>
		body {
			font-family: "Poppins", sans-serif;
			padding: 0;
			margin: 0;
			font-size: 14px;
		}
		p,a {
			font-family: "Poppins", sans-serif;
			line-height: 1;
			font-size: 15px;
			margin-bottom: 0px;

			font-weight: 300;
		}
		.error div{
			padding: 5px 0px;
			color: red; 
		</style>

	</head>
	<body>
		<!-- Left Panel -->

		<aside id="left-panel" class="left-panel">
			<nav class="navbar navbar-expand-sm navbar-default">
				<div id="main-menu" class="main-menu collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="<?= base_url() ?>page_controller/viewHomeAdmin"><i class="menu-icon fa fa-laptop"></i>Trang chủ </a>
						</li>
						<li class="menu-title">DANH MỤC QUẢN LÝ</li><!-- /.menu-title -->
						<li >
							<a href="<?= base_url() ?>page_controller/viewDuyet" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Danh sách đồ chờ duyệt</a>
                        <!-- <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul> -->
                    </li>
                    <li >
                    	<a href="<?= base_url() ?>Nguoidung" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản lý người dùng</a>
                        <!-- <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="#">Thêm thành viên</a></li>
                            <li><i class="fa fa-table"></i><a href="quanlynguoidung.html">Danh sách thành viên</a></li>
                        </ul> -->
                    </li>
                    <li >
                    	<a href="<?= base_url() ?>page_controller/viewQLDD" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Quản lý đồ dùng</a>
                        <!-- <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul> -->
                    </li>

                    <!-- hiện phần icons -->
                    <!-- <li class="menu-title">Icons</li><!-- /.menu-title -->

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul> -->

                        <!-- Hết phần icons -->

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    	<!-- Header-->
    	<header id="header" class="header">
    		<div class="top-left">
    			<div class="navbar-header">
    				<a class="navbar-brand" href="./"><img src="<?= base_url() ?>images/logo.png" alt="Logo"></a>
    				<a class="navbar-brand hidden" href="./"><img src="<?= base_url() ?>images/logo2.png" alt="Logo"></a>
    				<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    			</div>
    		</div>
    		<div class="top-right">
    			<div class="header-menu">
                    <!-- <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->

                    <div class="user-area dropdown float-right">
                    	<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    		<img class="user-avatar rounded-circle" src="<?= base_url() ?>images/admin.jpg" alt="User Avatar">
                    	</a>

                    	<div class="user-menu dropdown-menu">
                    		<a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                    		<a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                    		<a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                    		<a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    	</div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->



        <div class="content">
        	<div class="animated fadeIn">
        		<div class="row">
        			<div class="col-md-8">
        				<div class="card-body card-block">
        					<form action="<?= base_url() ?>Nguoidung/createUser" method="post" enctype="multidata/form-data">
        						<div class="row form-group">
        							<div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h2>Đăng ký thành viên</h2>
        							</label>
        						</div>
        						<?php if ($this->session->has_userdata('success')): ?>
        							<div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;"><?= $this->session->userdata('success') ?></h4>
        							</label>
        						</div>
        					<?php endif ?>
				        				</div>
				        				<hr/>

				        				<div class="row form-group">
				        					<div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Họ tên</b></label>
				        					</div>
				        					<div class="col-12 col-md-9"><input type="text" name="ten" required="" placeholder="Họ và tên..." class="form-control"><span class="help-block"></span>
				        						<div class="error"><?php echo form_error('ten'); ?></div>
				        					</div>
				        				</div>
				        				<hr/>
				        				<div class="row form-group">
				        					<div class="col col-md-3"><label for="hf-email" class=" form-control-label"><b>Email</b></label></div>
				        					<div class="col-12 col-md-9"><input type="email" id="hf-email" name="email" required=""placeholder="Enter Email..." class="form-control"><span class="help-block"></span>
				        						<div class="error"><?php echo form_error('email'); ?></div>
				        					</div>
				        				</div>
				        				<hr/>
				        				<div class="row form-group">
				        					<div class="col col-md-3"><label for="hf-password" class=" form-control-label"><b>Mật khẩu</b></label></div>
				        					<div class="col-12 col-md-9"><input type="password" name="matkhau" required="" placeholder="Mật khẩu..." class="form-control"><span class="help-block"></span>	<div class="error"><?php echo form_error('matkhau'); ?></div>
				        				</div>
				        			</div>
				        			<hr/>
				        			<!-- nhập lại ko matches đc -->
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Lại</b></label>
                                		</div>
                                		<div class="col-12 col-md-9"><input type="text" name="lai" placeholder="Jane Doe" class="form-control"><span class="help-block"></span>
                                			<div class="error"><?php echo form_error('lai'); ?></div>
                                		</div>
                                    </div>
                                    <hr/> -->
                                    <div class="row form-group">
                                    	<div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Số điện thoại</b></label>
                                    	</div>
                                    	<div class="col-12 col-md-9"><input type="text" name="sdt"required="" placeholder="Số điện thoại..." class="form-control"><span class="help-block"></span>
                                    		<div class="error"><?php echo form_error('sdt'); ?></div>
                                    	</div>
                                    </div>
                                    <hr/>
                                    <div class="row form-group">
                                    	<div class="col col-md-3"><label for="select" class=" form-control-label"><b>Quyền</b></label></div>
                                    	<div class="col-12 col-md-9">
                                    		<select name="quyen" id="select" class="form-control">
                                    			<option value="0">Người dùng</option>
                                    			<option value="1">Quản lý</option>
                                    		</select>
                                    	</div>
                                    </div>
                                    <hr/>
                                    <div class="form-actions form-group text-center"><button type="submit" class="btn btn-success btn-default" name="submit">Thêm thành viên</button></div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


            <div class="clearfix"></div>

            <footer class="site-footer">
            	<div class="footer-inner bg-white">
            		<div class="row">
            			<div class="col-sm-6">
            				Copyright &copy; 2018 Ela Admin
            			</div>
            			<div class="col-sm-6 text-right">
            				Designed by <a href="https://colorlib.com">Colorlib</a>
            			</div>
            		</div>
            	</div>
            </footer>

        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="<?= base_url() ?>assets/js/main.js"></script>


        <script src="<?= base_url() ?>assets/js/lib/data-table/datatables.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/jszip.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="<?= base_url() ?>assets/js/init/datatables-init.js"></script>


        <script type="text/javascript">
        	$(document).ready(function() {
        		$('#bootstrap-data-table-export').DataTable();
        	} );
        </script>


    </body>
    </html>
