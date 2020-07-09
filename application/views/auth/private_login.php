
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Administrator Login</title>
		<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico">
        <!-- <link rel="icon" href="<?= base_url() ?>assets/img/x-icon" type=""> -->
		
		<!-- vector map CSS -->
		<link href="<?= base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
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

		<!-- Custom CSS -->
		<link href="<?= base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="<?= base_url() ?>assets/img/logo.png" alt="brand"/>
						<span class="brand-text">PSB TK TBS</span>
					</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Log in to Application</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form id="form_login">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
													<input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<div class="clearfix"></div>
													<input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" type="checkbox">
														<label for="checkbox_2"> Show Password</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-success  btn-rounded">Log in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?= base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?= base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/vendors/loaders/blockui.min.js"></script>
		<script src="<?= base_url() ?>assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?= base_url() ?>assets/dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
        <script src="<?= base_url() ?>assets/dist/js/init.js"></script>
        
        <script src="<?= base_url() ?>src/private/additional.js"></script>
        <script src="<?= base_url() ?>src/private/auth.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                authController.init()
            })
        </script>
	</body>
</html>
