<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../../Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../../Public/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="../../Public/css/faqstyle.css" type="text/css" media="all" />
<link href="../../Public/css/single.css" rel='stylesheet' type='text/css' />
<link href="../../Public/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="../../Public/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="../../Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="../../Public/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="../../Public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="../../Public/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="../../Public/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../../Public/js/move-top.js"></script>
<script type="text/javascript" src="../../Public/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index.html"><h1>One<span>Movies</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="http://localhost/thinkphp-3.2/stage/index/genres" method="post">
					<input type="text" name="Search" placeholder="请输入电影名称" required="">
					<input type="submit" value="搜索">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><?php echo ($rootname); ?></li>
					<li><a href="#" data-toggle="modal" data-target="#try">L/R</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
<!--登陆/注册信息-->
	<div class="modal video-modal fade" id="try" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					欢迎登陆电影点评网
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">注册</div>
							  </div>
							  <div class="form">
								<h3>登陆到您的账号</h3>
								<form action="http://localhost/thinkphp-3.2/stage/index/login" method="post">
								  <input type="text" name="Username" placeholder="请输入用户名" required="">
								  <input type="password" name="Password" placeholder="请输入登陆密码" required="">
								  <input type="submit" value="登陆">
								</form>
							  </div>

							  <div class="form">
								<h3>创建新账号</h3>
								<form action="http://localhost/thinkphp-3.2/stage/index/reg" method="post">
								  <input type="text" name="Username1" placeholder="请输入用户名" required="">
								  <input type="password" name="Password1" placeholder="请输入密码" required="">
								  <!-- <input type="email" name="Email" placeholder="邮箱地址" required=""> -->
								  <input type="text" name="Phone" placeholder="手机号" required="">
								  <input type="submit" value="确认注册">
								</form>
							  </div>
							  <!-- <div class="cta"><a href="#">忘记密码?</a></div> -->
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="http://localhost/thinkphp-3.2/stage/index/index">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<?php if(is_array($op)): $i = 0; $__LIST__ = $op;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tvo): $mod = ($i % 2 );++$i;?><div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="http://localhost/thinkphp-3.2/stage/index/genres?type=<?php echo ($tvo["type_id"]); ?>"><?php echo ($tvo["type_name"]); ?></a></li>
										</ul>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="series.html">tv - series</a></li>
							<li><a href="news.html">news</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Asia</a></li>
												<li><a href="genres.html">France</a></li>
												<li><a href="genres.html">Taiwan</a></li>
												<li><a href="genres.html">United States</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">China</a></li>
												<li><a href="genres.html">HongCong</a></li>
												<li><a href="genres.html">Japan</a></li>
												<li><a href="genres.html">Thailand</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Euro</a></li>
												<li><a href="genres.html">India</a></li>
												<li><a href="genres.html">Korea</a></li>
												<li><a href="genres.html">United Kingdom</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="short-codes.html">Short Codes</a></li>
							<li><a href="list.html">A - z list</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
<!-- banner -->
    
	<div id="slidey" style="display:none;">
		<ul>
			<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="../../Public/images/<?php echo ($vo["movie_photo"]); ?>" alt=" "><p class='title'><?php echo ($vo["movie_name"]); ?></p><p class='description'><?php echo ($vo["movie_introduce"]); ?></p></li><?php endforeach; endif; else: echo "" ;endif; ?>	
		</ul>  	
    </div>
    <script src="../../Public/js/jquery.slidey.js"></script>
    <script src="../../Public/js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ne): $mod = ($i % 2 );++$i;?><div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($ne["movie_id"]); ?>" class="hvr-shutter-out-horizontal"><img src="../../Public/images/<?php echo ($ne["movie_photo"]); ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($ne["movie_id"]); ?>" ><?php echo ($ne["movie_name"]); ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?php echo ($ne["movie_date"]); ?></p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>			
		</div>
	</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">分类</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
				
				<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">纪录片</a></li>
		        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">科幻片</a></li>
				<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">偶像剧</a></li>
				<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">战争片</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div ro le="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
						<?php if(is_array($banner1)): $i = 0; $__LIST__ = $banner1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
								<a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol["movie_id"]); ?>"  class="hvr-shutter-out-horizontal"><img src="../../Public/images/<?php echo ($vol["movie_photo"]); ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol["movie_id"]); ?>"><?php echo ($vol["movie_name"]); ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p><?php echo ($vol["movie_date"]); ?></p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					<?php if(is_array($banner2)): $i = 0; $__LIST__ = $banner2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol2): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
							<a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol2["movie_id"]); ?>"  class="hvr-shutter-out-horizontal"><img src="../../Public/images/<?php echo ($vol2["movie_photo"]); ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol2["movie_id"]); ?>"><?php echo ($vol2["movie_name"]); ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?php echo ($vol2["movie_date"]); ?></p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
					<?php if(is_array($banner3)): $i = 0; $__LIST__ = $banner3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol3): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
							<a href="http://localhost/thinkphp-3.2/Stage/Single/single?id=<?php echo ($vol3["movie_id"]); ?>" class="hvr-shutter-out-horizontal"><img src="../../Public/images/<?php echo ($vol3["movie_photo"]); ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol3["movie_id"]); ?>"><?php echo ($vol3["movie_name"]); ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?php echo ($vol3["movie_date"]); ?></p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
					<?php if(is_array($banner4)): $i = 0; $__LIST__ = $banner4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol4): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
							<a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol4["movie_id"]); ?>"  class="hvr-shutter-out-horizontal"><img src="../../Public/images/<?php echo ($vol4["movie_photo"]); ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($vol4["movie_id"]); ?>" ><?php echo ($vol4["movie_name"]); ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?php echo ($vol4["movie_date"]); ?></p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>	
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //general -->
<!-- Latest-tv-series -->
<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular">Most Popular Movies</h4>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
					<?php if(is_array($tvs)): $i = 0; $__LIST__ = $tvs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tv): $mod = ($i % 2 );++$i;?><li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="../../Public/images/<?php echo ($tv["movie_photo"]); ?>" alt=" " class="img-responsive" />
										<a class="w3_play_icon" href="#small-dialog">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header"><?php echo ($tv["movie_name"]); ?></p>
									<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span> <?php echo ($tv["movie_introduce"]); ?></p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> <?php echo ($tv["movie_date"]); ?> </p>
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="genres.html">Drama</a> | 
										<a href="genres.html">Adventure</a> | 
										<a href="genres.html">Family</a>								
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
								<?php if(is_array($tvs2)): $i = 0; $__LIST__ = $tvs2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tv2): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
										<a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($tv2["movie_id"]); ?>"  class="hvr-shutter-out-horizontal"><img src="../../Public/images/<?php echo ($tv2["movie_photo"]); ?>" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="http://localhost/thinkphp-3.2/Stage/index/single?movId=<?php echo ($tv2["movie_id"]); ?>" ><?php echo ($tv2["movie_name"]); ?></a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p><?php echo ($tv2["movie_date"]); ?></p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>	
									<div class="clearfix"> </div>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="../../Public/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="../../Public/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->  
		<script src="../../Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/148284736"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- //Latest-tv-series -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>订阅我们</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="您的邮箱..." required="">
								<input type="submit" value="发送">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="index.html"><h2>One<span>Movies</span></h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="genres.html">电影</a>
					</li>
					<li>
						<a href="faq.html">在线客服</a>
					</li>
					<li>
						<a href="horror.html">惊悚时刻</a>
					</li>
					<li>
						<a href="genres.html">冒险刺激</a>
					</li>
					<li>
						<a href="comedy.html">喜剧作品</a>
					</li>
					<li>
						<a href="icons.html">相关图标</a>
					</li>
					<li>
						<a href="contact.html">联系我们</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="../../Public/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>