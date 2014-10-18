<!DOCTYPE html>
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
	
		<script src="js/contacts.js"></script>
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
					<li><a href="#">Courses</a></li>
					<li><a href="#">Support</a></li>
				</ul>
		</li>
		<li><a href="products.php">Products</a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="contacts.php">Contact</a></li>
	</ul>
</nav>
		
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p><a href="index.php">Home</a> >> contacts</p>
				</section>
			</div>
		</div>
		
		<div class="row block05">
			<div id="main-content" class="col-2-3">
				<div class="row block04">
			<div class="col16">
				<section>
				<div class="heading"><h2><a href="#">Dont hesitate to tell us what you feel about GA-Tech</a></h2></div>
					
				</section>
			</div>
		</div>
				<div class="comment">
					Your email address will not be published. Required fields are marked *
					<form action="contacts.php" onsubmit="return validate()">
						<div><input type="text" name="name" id="name"> Name *</div>
						<div><input type="email" name="email" id="email"> Email *</div>
						<div><input type="url" name="website" id="website"> Website</div>
						<div><h2></h2></div>
						<div><textarea rows="10" name="comment" id="comment" placeholder="Your message here." onfocus='this.select()'></textarea></div>
						<div><input type="submit" name="submit" value="Submit" style="background:#a49a00; color:#ff;"></div>
					</form>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<section>
				<div class="row block04">
			<div class="col16">
				
					<h2> contacts info:</h2>
				
			</div>
		</div>
					
					<div class="content">
					<table>
					<tr><td style="font-weight:bold;">Address:</td><td>ABC</td></tr>
					<tr><td style="font-weight:bold;">Phone:</td><td>ABC</td></tr>
					<tr><td style="font-weight:bold;">Email:</td><td>ABC</td></tr>
					<tr><td style="font-weight:bold;">Web:</td><td>ABC</td></tr>
					</table>
					
					</div>
				</section>
				
				
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="zerogrid">
	
	
	<div id="copyright">
	<p>Copyright © 2014 - GA-Tech Solutions</p>
</div>
</footer>

</body></html>