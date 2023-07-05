	<!-- footer -->
	<div class="footer">	
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3 class="title">project guide</h3>
					<ul>
						<li><a href="#">Prof Kale Sir </a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3 class="title">PARTNERS</h3>
					 <ul>
						<li><a href="#">Shingote Omshree</a></li>
						<li><a href="#">Dhamale Ganesh</a></li>
						<li><a href="#">Pawar Akshay</a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3 class="title">More details</h3>
					<ul>
						<li><a href="<?php echo site_url('home/about');?>">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="<?php echo site_url('home/contact');?>">Registraion</a></li>
					</ul>
				</div>
				 <div class="col-md-3 footer-grid contact-grid">
						<h3 class="title">Contact us</h3>
						<ul>
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Samarth College of Computer Science</li>							
							<li class="adrs">Belhe</li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+000 100 444 1111</li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">samarth@gmail.com</a></li>
						</ul>
				 </div>
				 <div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="copy">
		<div class="container">
			<div class="copy-left">
				<p>Copyright © 2020 Crops. All rights reserved | Design by Developer<a href="http://w3layouts.com"></a></p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="fb"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#" class="gg"></a></li>
					<li><a href="#" class="pn"></a></li>					
				</ul>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('js/bootstrap.js');?>"></script>
</body>
</html>