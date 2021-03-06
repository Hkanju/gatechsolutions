﻿<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>GA Tech Solutions</title>
	<meta name="description" content="designed by kanju">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/GA.png' rel='icon' type='image/x-icon'/>
	
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
       // maxwidth: 1000,
        namespace: "centered-btns"
      });
    });
	
  </script>
    
</head>
<body>
<!--------------Header--------------->
<header> 
	<div id="logo"><a href="index.php"><img src="images/logo.png"/></a></div>
	<div id="search">
		<div class="button-search"></div>
		<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
	</div>
</header>

<!--------------Navigation--------------->

<nav>
	<ul id="nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>
		<li><a href="services.php">Services</a>
				<ul>
					<li><a href="#">Short Courses</a></li>
					<li><a href="#">Support</a></li>
				</ul>
		</li>
		<li><a href="products.php">Products</a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="contacts.php">Contact</a></li>
	</ul>
</nav>

</header>

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p>Home >> Blog >> Post</p>
				</section>
			</div>
		</div>
		
		<div class="row block05">
			<div id="main-content" class="col-2-3">
				<article>
					<div class="heading">
						<h2><a href="single.php">This is a heading</a></h2>
						<div class="info">Ported by Admin | 2 Comments | November 11 , 2012</div>
					</div>
					<div class="content">
						<img src="images/slide1.jpg" />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus. Nulla sed nisl mauris, id tristique tortor. Sed iaculis dapibus urna nec dictum. Proin non enim odio. Proin vitae turpis libero, eget feugiat enim. Sed fringilla facilisis convallis.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus. Nulla sed nisl mauris, id tristique tortor. Sed iaculis dapibus urna nec dictum. Proin non enim odio.</p>
						<p>Sed viverra odio at orci molestie id pharetra turpis lobortis. Nullam tempus nibh pulvinar lorem semper dignissim. Quisque hendrerit ornare enim, bibendum fermentum purus tincidunt quis. Suspendisse potenti. Fusce vitae enim varius ligula dignissim vehicula quis placerat risus. Etiam sit amet massa at lacus rutrum malesuada. Nullam sed enim quis lectus porta volutpat id id odio. Pellentesque vel elit lectus. Maecenas venenatis feugiat suscipit. Duis et adipiscing nunc. Proin elit mi, fermentum eu cursus egestas, gravida at enim. Praesent eu mauris vel diam gravida consequat. Donec tempor lorem in enim tincidunt quis rhoncus augue luctus.</p>
					</div>
				</article>
				<div class="comment">
					Your email address will not be published. Required fields are marked *
					<form>
						<div><input type="text" name="name" id="name"> Name *</div>
						<div><input type="email" name="email" id="email"> Email *</div>
						<div><input type="url" name="website" id="website"> Website</div>
						<div><textarea rows="10" name="comment" id="comment"></textarea></div>
						<div><input type="submit" name="submit" value="Submit"></div>
					</form>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<section>
					<div class="heading"><h2>About us</h2></div>
					<div class="content">
						<img src="images/thumb2.jpg" />
						<p>Free Html5 Templates created by <a href="http://www.zerotheme.com">Zerotheme</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
					</div>
				</section>
				<section>
					<div class="heading"><h2>Categories</h2></div>
					<div class="content">
						<ul>
							<li><a href="http://www.zerotheme.com">Free Html5 Templates</a></li>
							<li><a href="http://www.zerotheme.com">Free Responsive Themes</a></li>
							<li><a href="http://www.zerotheme.com">Free Html5 and Css3 Themes</a></li>
						</ul>
					</div>
				</section>
				<section>
					<div class="heading"><h2>Popular Post</h2></div>
					<div class="content">
						<div class="post">
							<img src="images/thumb1.png"/>
							<h4><a href="single.php">Lorem ipsum dolor sit amet</a></h4>
							<p>November 11 ,2012</p>
						</div>
						<div class="post">
							<img src="images/thumb2.png"/>
							<h4><a href="single.php">Aliquam viverra convallis</a></h4>
							<p>November 11 ,2012</p>
						</div>
						<div class="post">
							<img src="images/thumb3.png"/>
							<h4><a href="single.php">TSed accumsan libero</a></h4>
							<p>November 11 ,2012</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrapfooter">
	<p>Copyright © 2012 - <a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.php" target="_blank">Free Responsive Html5 Templates</a> by <a href="http://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
	</div>
</footer>

</body></html>