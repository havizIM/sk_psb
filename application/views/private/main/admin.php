
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin</title>
	<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico">
	<link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="img/x-icon">

	<!-- Data table CSS -->
	<link href="<?= base_url() ?>assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/themify-icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/animate.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/linea-icon.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/pe-icon-7-styles.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/filter.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/dist/css/lightgallery.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css">

	<link href="<?= base_url() ?>assets/vendors/loaders/loaders.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/vendors/loaders/loaders-palette.css" rel="stylesheet" type="text/css">
	
	<link href="<?= base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-gold">

        <!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="<?= base_url() ?>assets/img/logo.png" alt="brand"/>
							<span class="brand-text">PSB TK TBS</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown full-width-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert top-nav-icon"></i></a>
						<ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li class="product-nicescroll-bar row">
								<ul class="pa-20">
									<li class="col-md-6 col-xs-12 preview-carousel">
										<a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">About Application</span></div><div class="clearfix"></div></a>
										<hr class="light-grey-hr ma-0"/>
										<div class="product-carousel owl-carousel owl-theme text-center">
											<a href="#">
												<img src="<?= base_url() ?>assets/img/chair.jpg" alt="chair">
												<span>Circle chair</span>
											</a>
											<a href="#">
												<img src="<?= base_url() ?>assets/img/chair2.jpg" alt="chair">
												<span>square chair</span>
											</a>
											<a href="#">
												<img src="<?= base_url() ?>assets/img/chair3.jpg" alt="chair">
												<span>semi circle chair</span>
											</a>
											<a href="#">
												<img src="<?= base_url() ?>assets/img/chair4.jpg" alt="chair">
												<span>wooden chair</span>
											</a>
											<a href="#">
												<img src="<?= base_url() ?>assets/img/chair2.jpg" alt="chair">
												<span>square chair</span>
											</a>								
										</div>
									</li>
								</ul>
							</li>	
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?= base_url() ?>assets/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="btn-logout"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left" style="background-image: url('<?= base_url() ?>assets/img/sidebar4.jpg')">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main Menu</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="#/dashboard"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">dashboard</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="#/pengaturan"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">pengaturan</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="#/pendaftaran"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">pendaftaran</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="#/pembayaran"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">pembayaran</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="#/laporan/pendaftaran"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">laporan</span></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		
		<!-- Main Content -->
		<div class="page-wrapper" id="page_content">
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?= base_url() ?>assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/dist/js/dataTables-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="<?= base_url() ?>assets/dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="<?= base_url() ?>assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="<?= base_url() ?>assets/vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?= base_url() ?>assets/dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Init JavaScript -->
	<script src="<?= base_url() ?>assets/dist/js/init.js"></script>

	<script src="<?= base_url() ?>src/private/additional.js"></script>
	<script src="<?= base_url() ?>src/private/main.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			mainController.init()
		})
	</script>
	
	
</body>

</html>
