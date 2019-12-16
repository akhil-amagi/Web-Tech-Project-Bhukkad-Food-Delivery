<!DOCTYPE html>
<html>
<head>
<title>Food Delivery | Home Page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script src="js/jquery-1.11.1.min.js"></script>
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
</head> 
<body>
<section class="navbar">
<table>
<tr>
<td>
<span class="heading"><a href='#'><img src="images/logo1.jpg" alt="logo1" height="50px" width="50px"></a>
</td>
<th><a href='#'>BHUKKAD FOOD DELIVERY</a></th></span>
</tr>
</table>
</section>
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
	});
	</script>
		<div class="w3l_banner_nav">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
                                <h3 style="color: red;"><span>A la carte</span><span></span>Now Available</h3>
								<div class="more">
									<a href="login.php" class="button--saqui button--round-l button--text-thick" data-text="Order now">Order now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3 style="color: red;"><span>Try out</span><span>our</span>Special Items</h3>
								<div class="more">
									<a href="login.php" class="button--saqui button--round-l button--text-thick" data-text="Order now">Order now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
                                <h3 style="color: red;"><span>Introducing</span><span> Bhukkad </span>Food Truck</h3>
								<div class="more">
									<a href="tlogin.php" class="button--saqui button--round-l button--text-thick" data-text="Order now">Order now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
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
		</div>
		<div class="clearfix"></div>
	</div></td></tr></table></section>
	<div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			<div class="wthree_banner_bottom_left_grid_sub1">
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/pbm.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/naan.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos">
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/Truffles.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos1">
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
	<div class="top-brands">
		<div class="container">
			<h3>Bhukkad Special's</h3>
			<div class="agile_top_brands_grids">
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/Corner-House-Koramangala.jpg" alt=" " class="img-responsive"/></a>		
											<p>Corner House</p>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="login.php" method="post">
												<fieldset>
													<input type="hidden" name="item_name" value="Corner House" />
													<input type="submit" name="submit" value="Order Now" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/Treat-Indiranagar.jpg" alt=" " class="img-responsive"/></a>		
											<p>Treat</p>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="login.php" method="post">
												<fieldset>
													<input type="hidden" name="item_name" value="Traet" />
													<input type="submit" name="submit" value="Order Now" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/Toit.jpg" alt=" " class="img-responsive" /></a>
											<p>Toit</p>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="login.php" method="post">
												<fieldset>
													<input type="hidden" name="item_name" value="Toit" />
													<input type="submit" name="submit" value="Order Now" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/Koshys.jpg" alt=" " class="img-responsive" /></a>
											<p>Koshys</p>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="login.php" method="post">
												<fieldset>
													<input type="hidden" name="item_name" value="Nadan-Mutta-Curry" />
													<input type="submit" name="submit" value="Order Now" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<script src="js/bootstrap.min.js"></script>
<div class="footer-main-div">
    <div class="footer-social-icons">
        <ul>
            <li><a href="#" target="blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="blank"><i class="fab fa-google-plus"></i></a></li>
            <li><a href="#" target="blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
<div class="footer-menu-one">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</div>
<div class="footer-menu-two">
    <ul>
        <li><a href="#">Blog</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Media</a></li>
    </ul>
</div>
</div>
</body>
</html>
