<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Agrimarketing</title>
<link href="<?php echo  base_url()?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo  base_url()?>css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crops Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->

<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="logo">
		<div class="container">
			<div class="logo-info">
				<a href="<?php echo  site_url('home/index');?>">
					<h1>Agrimarketing</h1>	
				</a>
			</div>
		</div>	
	</div>
	<!--//header-->		
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/index');?>">Home</a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/about');?>">About</a></li>
					<li><a href="<?php echo  site_url('home/gallery');?>" class=" hvr-bounce-to-bottom">Gallery</a>
						<!--<ul class="dropdown-menu">
							<li><a class="hvr-bounce-to-bottom" href="<?php echo  site_url('home/gallery');?>">Gallery1</a></li>
							<li><a class="hvr-bounce-to-bottom" href="<?php echo  site_url('home/gallery');?>">Gallery2</a></li>
							<li><a class="hvr-bounce-to-bottom" href="<?php echo  site_url('home/gallery');?>gallery.html">Gallery3</a></li>           
						</ul>-->
					</li>	
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/register');?>">Buyer Registraion</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/login');?>"> Buyer Log in</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/contact');?>">Contact Us</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="#">Add Product</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/seller_register');?>">Seller Register</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo  site_url('home/seller_login');?>">Seller Log in</a>
					</li>
				</ul>	
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
	<!--//navigation-->
	<!--baner-->
	<div class="baner about-bnr">
		<div class="container">
			<div class="baner-grids">
				<div class="col-md-6 baner-top">
					<img src="<?php echo  base_url('images/img16.jpg');?>" alt=""/>
				</div>
				<div class="col-md-6 baner-top">
					<img src="<?php echo  base_url('images/img17.jpg');?>" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//baner-->