<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PÁGINA DE INICIO</title>

	<link rel="shortcut icon" href="image/fav-icon.png" type="image/x-icon">

	<link rel="stylesheet" href="public/front/css/bootstrap.min.css">

	<link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/assets/css/themify-icons.css">
	<link rel="stylesheet" href="public/assets/css/icofont.css">
	<link rel="stylesheet" href="public/assets/css/animate.css">

	<link rel="stylesheet" href="public/vendors/revolution/css/settings.css">
	<link rel="stylesheet" href="public/vendors/revolution/css/layers.css">
	<link rel="stylesheet" href="public/vendors/revolution/css/navigation.css">

	<link rel="stylesheet" href="public/vendors/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="public/vendors/owl-carousel/assets/owl.carousel.min.css">

	<link rel="stylesheet" href="public/front/css/style.css">
	<link rel="stylesheet" href="public/front/css/responsive.css">

	<style>
		.hero-area-fix {
			position: relative;
			width: 100%;
			content: '';
			background: url('public/assets/images/slider.png') no-repeat scroll center center;
			background-size: cover;
			min-height: 900px;
			z-index: 1;
		}
	</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="120">

<!--================Header Area =================-->
<header class="main_header_area">
	<div class="main_menu_area">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="public/assets/images/icon/logo.png" alt=""></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="#feature">FETURES</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#screenshot">SCREENSHOT</a></li>
						<li><a href="#price">Price</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!--================End Header Area =================-->

<!--================Slider Area =================-->
<section class="hero-area-fix main_slider_area">
</section>
<!--================End Slider Area =================-->

<!--================App Feature Area =================-->
<section class="app_feature_area" id="feature">
	<div class="container">
		<div class="main_title">
			<h2>POWERFUL APPS FETURES</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="row app_feature_inner">
			<div class="col-md-3">
				<div class="app_feature_item_inner">
					<div class="app_feature_item">
						<div class="round_icon">
							<i class="fa fa-diamond"></i>
						</div>
						<a href="#"><h4>Unique Design</h4></a>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					</div>
					<div class="app_feature_item">
						<div class="round_icon">
							<i class="fa fa-stack-overflow"></i>
						</div>
						<a href="#"><h4>Unique Design</h4></a>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="app_round_image">
					<img class="round_c" src="public/img/round-circle.png" alt="">
					<img class="app_mobile" src="public/img/app-mobile.png" alt="">
				</div>
				<div class="app_feature_item app_middle">
					<div class="round_icon">
						<i class="fa fa-bar-chart"></i>
					</div>
					<a href="#"><h4>Unique Design</h4></a>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration .</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="app_feature_item_inner left_feature">
					<div class="app_feature_item">
						<div class="round_icon">
							<i class="fa fa-cloud-download"></i>
						</div>
						<a href="#"><h4>Unique Design</h4></a>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					</div>
					<div class="app_feature_item">
						<div class="round_icon">
							<i class="fa fa-comments-o"></i>
						</div>
						<a href="#"><h4>Unique Design</h4></a>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End App Feature Area =================-->

<!--================Choose Us Area =================-->
<section class="choose_us_area">
	<div class="col-md-6">
		<div class="row left_choose_image">
			<ul>
				<li><img src="public/img/mockup-img/m-image-1.png" alt=""></li>
				<li><img src="public/img/mockup-img/m-image-2.png" alt="" data-parallax='{"x": 25, "y": -50}'></li>
				<li><img src="public/img/mockup-img/m-image-3.png" alt="" data-parallax='{"x": 50, "y": -100}'></li>
				<li><img src="public/img/mockup-img/m-image-4.png" alt="" data-parallax='{"x": 90, "y": -180}'></li>
				<li><img src="public/img/mockup-img/m-image-5.png" alt="" data-parallax='{"x": 20, "y": -30}'></li>
				<li><img src="public/img/mockup-img/m-image-6.png" alt="" data-parallax='{"x": 90, "y": -100}'></li>
				<li><img src="public/img/mockup-img/m-image-7.png" alt=""></li>
				<li><img src="public/img/mockup-img/m-image-8.png" alt="" data-parallax='{"x": 90, "y": -180}'></li>
			</ul>
		</div>
	</div>
	<div class="col-md-6">
		<div class="right_choose_image">
			<div class="left_title">
				<h2>WHY CHOOSE US ?</h2>
				<p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue,</p>

				<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			<div class="row choose_item_inner">
				<div class="col-md-6 col-xs-6">
					<div class="choose_item">
						<div class="media">
							<div class="media-left">
								<a href="#"><i class="icofont icofont-star"></i></a>
							</div>
							<div class="media-body">
								<h4>Top Rated</h4>
								<p>There are high ranke.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="choose_item">
						<div class="media">
							<div class="media-left">
								<a href="#"><i class="icofont icofont-star"></i></a>
							</div>
							<div class="media-body">
								<h4>Fetured App</h4>
								<p>There are high ranke.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="choose_item">
						<div class="media">
							<div class="media-left">
								<a href="#"><i class="icofont icofont-star"></i></a>
							</div>
							<div class="media-body">
								<h4>Easy To Share</h4>
								<p>There are high ranke.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="choose_item">
						<div class="media">
							<div class="media-left">
								<a href="#"><i class="icofont icofont-star"></i></a>
							</div>
							<div class="media-body">
								<h4>Best Apps</h4>
								<p>There are high ranke.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Choose Us Area =================-->

<!--================Satisfaction Area =================-->
<section class="satisfaction_area" id="about">
	<div class="container">
		<div class="main_title">
			<h2>AIM CLIENT SATISFACTION</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="row satisfaction_item_inner">
			<div class="col-md-4 col-xs-6">
				<div class="satisfaction_item">
					<div class="sat_icon">
						<i class="fa fa-clone" aria-hidden="true"></i>
					</div>
					<a href="#"><h4>Easy To Use</h4></a>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-6">
				<div class="satisfaction_item">
					<div class="sat_icon">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
					<a href="#"><h4>24/7 Support</h4></a>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-6">
				<div class="satisfaction_item">
					<div class="sat_icon">
						<i class="fa fa-folder-open" aria-hidden="true"></i>
					</div>
					<a href="#"><h4>Well Documentation</h4></a>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Satisfaction Area =================-->

<!--================Video Area =================-->
<section class="video_area">
	<div class="container">
		<div class="video_inner">
			<img src="public/img/video-img.png" alt="">
			<div class="video_text">
				<a class="popup-youtube" href="https://www.youtube.com/watch?v=WVPRkcczXCY"><i class="icofont icofont-play-alt-2"></i></a>
				<h5>Play Video</h5>
			</div>
		</div>
		<div class="user_slider_inner">
			<div class="user_slider owl-carousel">
				<div class="item">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#"><h4>Mr. Jonathon Smith</h4></a>
					<h5>CEO, Hazrat Group</h5>
					<img class="img-circle" src="public/img/user/user-1.png" alt="">
				</div>
				<div class="item">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#"><h4>Mr. Jonathon Smith</h4></a>
					<h5>CEO, Hazrat Group</h5>
					<img class="img-circle" src="public/img/user/user-1.png" alt="">
				</div>
				<div class="item">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#"><h4>Mr. Jonathon Smith</h4></a>
					<h5>CEO, Hazrat Group</h5>
					<img class="img-circle" src="public/img/user/user-1.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Video Area =================-->

<!--================MacBook Mockup Area =================-->
<section class="install_app_area">
	<div class="col-md-6">
		<div class="row">
			<div class="install_left_content">
				<div class="left_title">
					<h2>NOW INSTALL AVAILABLE ON</h2>
				</div>
				<div class="install_content">
					<h5>Create Your Apps Galary</h5>
					<p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
					<a class="gradient_bg_btn" href="#"><i class="fa fa-android" aria-hidden="true"></i>Android </a>
					<a class="gradient_bor_btn" href="#"><i class="fa fa-apple" aria-hidden="true"></i>App Store</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="install_mockup_img">
				<img src="public/img/macbook-res.png" alt="">
			</div>
		</div>
	</div>
</section>
<!--================End MacBook Mockup Area =================-->

<!--================App Screen Area =================-->
<section class="app_screen_area" id="screenshot">
	<div class="container">
		<div class="main_title">
			<h2>AIM CLIENT SATISFACTION</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="app_screen_inner">
			<div class="app_screen_slider owl-carousel">
				<div class="item"><img src="public/img/screenshot/screenshot-1.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-2.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-3.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-1.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-2.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-3.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-1.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-2.jpg" alt=""></div>
				<div class="item"><img src="public/img/screenshot/screenshot-3.jpg" alt=""></div>
			</div>
		</div>
	</div>
</section>
<!--================End App Screen Area =================-->

<!--================Pricing Table Area =================-->
<section class="price_table_area" id="price">
	<div class="container">
		<div class="main_title">
			<h2>PRICING TABLE</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="price_table_inner">
			<div class="price_item">
				<div class="price_header">
					<h3>BASIC</h3>
					<h2>$00</h2>
					<h6>/month</h6>
				</div>
				<ul>
					<li><a href="#">Free Useable</a></li>
					<li><a href="#">Easily Can Useable 10GB</a></li>
					<li><a href="#">Free Secuirity Service</a></li>
					<li><a href="#">Dedicated Useable Account</a></li>
				</ul>
				<a class="price_btn" href="#">PURCHASE NOW</a>
			</div>
			<div class="price_item">
				<div class="price_header">
					<h3>PREMIUM</h3>
					<h2>$50</h2>
					<h6>/month</h6>
				</div>
				<ul>
					<li><a href="#">Free Useable</a></li>
					<li><a href="#">Easily Can Useable 10GB</a></li>
					<li><a href="#">Free Secuirity Service</a></li>
					<li><a href="#">Dedicated Useable Account</a></li>
				</ul>
				<a class="price_btn" href="#">PURCHASE NOW</a>
			</div>
			<div class="price_item">
				<div class="price_header">
					<h3>EXCLUSIVE</h3>
					<h2>$90</h2>
					<h6>/month</h6>
				</div>
				<ul>
					<li><a href="#">Free Useable</a></li>
					<li><a href="#">Easily Can Useable 10GB</a></li>
					<li><a href="#">Free Secuirity Service</a></li>
					<li><a href="#">Dedicated Useable Account</a></li>
				</ul>
				<a class="price_btn" href="#">PURCHASE NOW</a>
			</div>
		</div>
	</div>
</section>
<!--================End Pricing Table Area =================-->

<!--================Team Members Area =================-->
<section class="team_members_area">
	<div class="container">
		<div class="main_title">
			<h2>TEAM MEMBER</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="team_slider owl-carousel">
			<div class="item">
				<div class="team_slider_item">
					<img src="public/img/team-slider/ten-team-1.jpg" alt="">
					<div class="team_hover">
						<div class="team_hover_inner">
							<div class="team_hover_inner">
								<div class="team_inner_text">
									<h4>ROBERTO PE</h4>
									<h5>Developer</h5>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="team_slider_item">
					<img src="public/img/team-slider/ten-team-2.jpg" alt="">
					<div class="team_hover">
						<div class="team_hover_inner">
							<div class="team_hover_inner">
								<div class="team_inner_text">
									<h4>ROBERTO PE</h4>
									<h5>Developer</h5>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="team_slider_item">
					<img src="public/img/team-slider/ten-team-3.jpg" alt="">
					<div class="team_hover">
						<div class="team_hover_inner">
							<div class="team_hover_inner">
								<div class="team_inner_text">
									<h4>ROBERTO PE</h4>
									<h5>Developer</h5>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="team_slider_item">
					<img src="public/img/team-slider/ten-team-4.png" alt="">
					<div class="team_hover">
						<div class="team_hover_inner">
							<div class="team_hover_inner">
								<div class="team_inner_text">
									<h4>ROBERTO PE</h4>
									<h5>Developer</h5>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Team Members Area =================-->

<!--================Question Area =================-->
<section class="question_area">
	<div class="container">
		<div class="main_title">
			<h2>FREE QUENTLY ASKED QUESTION</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="left_question_inner">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										1. Is it a long established fact that a reader will be distracted ?
										<i class="fa fa-minus" aria-hidden="true"></i>
										<i class="fa fa-plus" aria-hidden="true"></i>
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										2. Is it a long established fact that a reader will be distracted ?
										<i class="fa fa-minus" aria-hidden="true"></i>
										<i class="fa fa-plus" aria-hidden="true"></i>
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										3. Established fact that a reader will be distracted ?
										<i class="fa fa-minus" aria-hidden="true"></i>
										<i class="fa fa-plus" aria-hidden="true"></i>
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingfour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
										4. Is it a long established fact that a reader ?
										<i class="fa fa-minus" aria-hidden="true"></i>
										<i class="fa fa-plus" aria-hidden="true"></i>
									</a>
								</h4>
							</div>
							<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
								<div class="panel-body">
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="right_question_img">
					<img src="public/img/question-tab.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Question Area =================-->

<!--================Latest Blog Area =================-->
<section class="latest_blog_area" id="blog">
	<div class="container">
		<div class="main_title">
			<h2>LATEST NEWS FROM BLOG</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
		</div>
		<div class="row latest_blog_inner">
			<div class="col-md-6">
				<div class="l_blog_big_item">
					<div class="l_blog_img">
						<div class="l_blog_slider owl-carousel">
							<div class="item">
								<img src="public/img/blog/l-blog/l-blog-1.jpg" alt="">
							</div>
							<div class="item">
								<img src="public/img/blog/l-blog/l-blog-1.jpg" alt="">
							</div>
							<div class="item">
								<img src="public/img/blog/l-blog/l-blog-1.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="l_blog_text">
						<div class="l_blog_text_inner">
							<div class="blog_date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>12 July 2016</a>
								<a href="#"><i class="fa fa-heart" aria-hidden="true"></i>235</a>
								<a href="#">25 Comment</a>
							</div>
							<a href="#"><h4>Ontouch App news from blog</h4></a>
							<p>Lorem ipsum dolor sit amet, to consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna to liqua.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="right_l_blog">
					<div class="media">
						<div class="media-left">
							<img src="public/img/blog/l-blog/l-blog-2.jpg" alt="">
						</div>
						<div class="media-body">
							<a href="#"><h4>On Graphics Design Post</h4></a>
							<a href="#"><h5><i class="fa fa-calendar" aria-hidden="true"></i>16 JUNE 2016</h5></a>
							<p>It is a long established fact that a reader will be dis-tracted by the readable content.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<img src="public/img/blog/l-blog/l-blog-3.jpg" alt="">
						</div>
						<div class="media-body">
							<a href="#"><h4>On Graphics Design Post</h4></a>
							<a href="#"><h5><i class="fa fa-calendar" aria-hidden="true"></i>16 JUNE 2016</h5></a>
							<p>It is a long established fact that a reader will be dis-tracted by the readable content.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<img src="public/img/blog/l-blog/l-blog-4.jpg" alt="">
						</div>
						<div class="media-body">
							<a href="#"><h4>On Graphics Design Post</h4></a>
							<a href="#"><h5><i class="fa fa-calendar" aria-hidden="true"></i>16 JUNE 2016</h5></a>
							<p>It is a long established fact that a reader will be dis-tracted by the readable content.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Latest Blog Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area" id="contact">
	<div class="subscrib_area">
		<div class="container">
			<div class="subscrib_inner">
				<div class="main_title">
					<h2>SUBSCRIPTION NOW</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="&#xf003;   Enter Your E-Mail">
					<span class="input-group-btn">
                                <button class="btn btn-default" type="button">SEND</button>
                            </span>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_widget_area">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-xs-6">
					<aside class="f_widget home_widget">
						<div class="f_title">
							<h3>App Home</h3>
						</div>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Price</a></li>
							<li><a href="#">Screenshot</a></li>
							<li><a href="#">Download</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-md-2 col-xs-6">
					<aside class="f_widget home_widget">
						<div class="f_title">
							<h3>Support</h3>
						</div>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Offer</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-md-8 col-xs-12">
					<aside class="f_widget contact_widget">
						<div class="f_title">
							<h3>Contact Us</h3>
						</div>
						<form class="row contact_widget_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-6">
								<div class="row">
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
									</div>
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
									</div>
									<div class="form-group col-md-12">
										<input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
									</div>
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="form-group col-md-12">
										<textarea class="form-control" name="message" id="message" rows="1" placeholder="Your Message......."></textarea>
									</div>
								</div>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" value="submit your quote" class="btn submint_btn form-control">SEND NOW</button>
							</div>
						</form>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_copy_right">
		<div class="container">
			<div class="pull-left">
				<p class="copyright">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">CODOPA</a>
				</p>
			</div>
			<div class="pull-right">
				<ul>
					<li><a href="#">Term & Condition</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!--================End Footer Area =================-->

<script src="public/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="public/assets/js/bootstrap.min.js"></script>

<script src="public/vendors/waypoint/waypoints.min.js"></script>
<script src="public/vendors/typedjs/typed.min.js"></script>
<script src="public/vendors/ripples/jquery.ripples-min.js"></script>
<script src="public/vendors/parallax/jquery.parallax-scroll.js"></script>
<script src="public/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="public/vendors/flexslider/flex-slider.js"></script>
<script src="public/vendors/flexslider/mixitup.js"></script>
<script src="public/vendors/swiper/js/swiper.min.js"></script>
<script src="public/vendors/flipster-slider/jquery.flipster.min.js"></script>

<script type="text/javascript" src="public/assets/js/scrollIt.min.js"></script>
<script type="text/javascript" src="public/assets/js/wow.js"></script>
<script>
	let nav_offset_top;

	$(window).scroll(function() {
		let scroll = $(window).scrollTop();
		if (scroll >= nav_offset_top ) {
			$(".main_header_area, .dash_tp_menu_area, .hosting_menu, .mobile_menu_inner").addClass("navbar_fixed");
		} else {
			$(".main_header_area, .dash_tp_menu_area, .hosting_menu, .mobile_menu_inner").removeClass("navbar_fixed");
		}
	});

	$('.menu_icon, .close_icon').on('click',function() {
		let $offmenu = $(".offcanvas_menu");
		if ($offmenu.hasClass('open')) {
			$offmenu.removeClass('open');
		} else {
			$offmenu.addClass('open');
		}
		return false;
	});

	function user_slider() {
		$('.user_slider').owlCarousel({
			loop:true,
			margin: 30,
			items: 1,
			nav:false,
			autoplay: true,
			smartSpeed: 1500,
			dots: false,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsiveClass: true
		});
	}

	function screen_slider() {
		$('.app_screen_slider').owlCarousel({
			loop:true,
			margin: 40,
			items: 3,
			nav:false,
			autoplay: true,
			smartSpeed: 1500,
			dots: true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 2,
					margin: 20,
				},
				600: {
					items: 3,
					margin: 40,
				}
			}
		});
	}

	function l_blog_slider() {
		$('.l_blog_slider').owlCarousel({
			loop:true,
			margin: 0,
			items: 1,
			nav:true,
			autoplay: true,
			smartSpeed: 1500,
			dots: true,
			navContainer: '.l_blog_text_inner',
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsiveClass: true
		});
	}

	function team_slider() {
		$('.team_slider, .team_slider_two').owlCarousel({
			loop:true,
			margin: 30,
			items: 4,
			nav:false,
			autoplay: true,
			smartSpeed: 1500,
			dots: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
				},
				480: {
					items: 2,
				},
				700: {
					items: 3,
				},
				1200: {
					items: 4,
				}
			}
		});
	}

	$(document).ready(function() {
		$('.hero-area-fix').ripples({
			resolution: 712,
			dropRadius: 20,
			perturbance: 0.04,
		});

		$.scrollIt();

		new WOW().init();

		nav_offset_top = $('header').height();

		user_slider();

		screen_slider();

		l_blog_slider();

		team_slider();
	});

	$("header .nav.navbar-nav li a").on("click", function(event) {
		let $anchor = $(this);
		$("header .nav.navbar-nav li").removeClass("active");
		$(this).parent().addClass("active");
		$("html, body").stop().animate({
			scrollTop: $($anchor.attr("href")).offset().top - 85
		}, 1500);
		event.preventDefault();
	});

	$(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
</script>
</body>