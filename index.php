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
	
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
		 <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jssor.core.js"></script>
		<script type="text/javascript" src="js/jssor.utils.js"></script>
		<script type="text/javascript" src="js/jssor.slider.js"></script>
	
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
				<!--
				<ul>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Support</a></li>
				</ul>
				-->
		</li>
		<li><a href="products.php">Products</a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="contacts.php">Contact</a></li>
	</ul>
</nav>



<!--------------Slideshow--------------->
<section class="featured">
 <script>
        //Reference http://www.jssor.com/development/tip-make-responsive-slider.php

        var _CaptionTransitions = [];
        _CaptionTransitions["CLIP|L"] = { $Duration: 600, $Clip: 1, $Easing: $JssorEasing$.$EaseInOutCubic };
        _CaptionTransitions["RTT|10"] = { $Duration: 600, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
        _CaptionTransitions["ZMF|10"] = { $Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
        _CaptionTransitions["FLTTR|R"] = { $Duration: 600, x: -0.2, y: -0.1, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 1.3} };
    </script> 
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/tip-make-responsive-slider.php

            var _CaptionTransitions = [];
            _CaptionTransitions["CLIP|L"] = { $Duration: 600, $Clip: 1, $Easing: $JssorEasing$.$EaseInOutCubic };
            _CaptionTransitions["RTT|10"] = { $Duration: 600, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["ZMF|10"] = { $Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["FLTTR|R"] = { $Duration: 600, x: -0.2, y: -0.1, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 1.3} };

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0),

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("rslides_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {

                //reserve blank width for margin+padding: margin+padding-left (10) + margin+padding-right (10)
                var paddingWidth = 20;

                //minimum width should reserve for text
                var minReserveWidth = 150;

                var parentElement = jssor_slider1.$Elmt.parentNode;

                //evaluate parent container width
                var parentWidth = parentElement.clientWidth;

                if (parentWidth) {

                    //exclude blank width
                    var availableWidth = parentWidth - paddingWidth;

                    //calculate slider width as 70% of available width
                    var sliderWidth = availableWidth * 0.7;

                    //slider width is maximum 600
                    sliderWidth = Math.min(sliderWidth, 1000);

                    //slider width is minimum 200
                    sliderWidth = Math.max(sliderWidth, 200);

                    //evaluate free width for text, if the width is less than minReserveWidth then fill parent container
                    if (availableWidth - sliderWidth < minReserveWidth) {

                        //set slider width to available width
                        sliderWidth = availableWidth;

                        //slider width is minimum 200
                        sliderWidth = Math.max(sliderWidth, 200);
                    }

                    jssor_slider1.$SetScaleWidth(sliderWidth);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <div >
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
        <div id="rslides_container" style="position: relative;  width: 1000px; height: 550px; margin-bottom:2px;" >
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: relative;  width: 1460px; height: 550px;
                overflow: hidden;">
                <div><img u="image" src="images/slides/slide1.png" />
                    <div u="caption" t="CLIP|L" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Lets</div>
                    <div u="caption" t="CLIP|L" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Watch,</div>
                    <div u="caption" t="CLIP|L" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#08466C;line-height:40px;">=>Talk!</div>
                    <div class="flex-caption">
                    <h4>Video Conference</h4> </br>
					<p>We provide video conference configurations for your company and organisation. Let you easy the communication. </p> </br>
					<p class="more"><a class="button" href="services/video.php">Read more</a></p>
                </div>
                </div>
                <div><img u="image" src="images/slides/slide2.png" />
                    <div u="caption" t="ZMF|10" style="position:absolute;left:100px;top:80px;width:120px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Let</div>
                    <div u="caption" t="ZMF|10" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#08466C;line-height:40px;">you</div>
                    <div u="caption" t="ZMF|10" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#08466C;line-height:40px;">connect!</div>
					<div class="flex-caption">
                    <h4>Internet Connectivity (VSAT) </h4> </br>
					<p>We gives you the complete technology integrator that provides sales, supply, service and installation . </p>  </br>
					<p class="more"><a class="button" href="services/installation.php">Read more</a></p></br>
                </div>
				</div>
                <div><img u="image" src="images/slides/slide3.png" />
                    <div u="caption" t="RTT|10" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Its</div>
                    <div u="caption" t="RTT|10" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Digital</div>
                    <div u="caption" t="RTT|10" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Talks!</div>
					<div class="flex-caption">
                    <h4>VOIP</h4> </br>
					<p>The information about this slide will be put after the developer has finished the whole design. Please keep on waiting.. </p>  </br>
					<p class="more"><a class="button" href="services/voice.php">Read more</a></p></br>
                </div>
				</div>
                <div><img u="image" src="images/slides/slide4.png" />
                    <div u="caption" t="FLTTR|R" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Make</div>
                    <div u="caption" t="FLTTR|R" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Easy</div>
                    <div u="caption" t="FLTTR|R" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#08466C;line-height:40px;">Communication!</div>
					<div class="flex-caption">
                    <h4>IP PBX</h4> </br>
					<p>PBx, Intruders voice and data networks and other any systems which the company may think fit necessary or incidental to this business which supports remote access via BYOD(Bring your own device) etc.

 </p>  </br>
					<p class="more"><a class="button" href="#">Read more</a></p></br>
                </div>
				</div>
            </div>
       
            <!-- Trigger -->
        </div>
        <!-- Jssor Slider End -->
        
    </div>

	</div>
	<div id="bar">
	<div class="hbar">&nbsp</div>
	</div>
</section>

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
	
		<div class="row">
			<div class="main-content">
				<div class="row">
				<div class="col-1-3">
						<section>
							<div class="heading">
								<h2><a href="#">Satellite Int Connectivity (VSAT).</a></h2>
							</div>
							<div class="content">
								<a href="services/training.php"><img src="images/icons/icon4.jpg"/></a>
								<p>The best technology integrator that provides sales, supply, service and installation Satellite Internet Connectivity .</p>
								<p class="more"><a class="button" href="services/installation.php">Read more</a></p>
							</div>
						</section>
					</div>
				
					<div class="col-1-3">
						<section>
							<div class="heading">
								<h2><a href="#">Project Management</a></h2>
							</div>
							<div class="content">
								<a href="services/proj_management.php"><img src="images/icons/icon1.jpg"/></a>
								<p>We provide the efficient project management the best that our clients always apreciate. </p></br>
								<p class="more"><a class="button" href="services/proj_management.php">Read more</a></p>
							</div>
						</section>
					</div>
					<div class="col-1-3">
						<section>
							<div class="heading">
								<h2><a href="#">ICT Consultance</a></h2>
							</div>
							<div class="content">
								<a href="services/consultance.php"><img src="images/icons/icon2.jpg"/></a>
								<p>We work very close to our client negotiating and helping them manage what they need to acomplish. We always keep the timeline</p>
								<p class="more"><a class="button" href="services/consultance.php">Read more</a></p>
							</div>
						</section>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-2-3">
						<article>
							<div class="heading">
								<h2><a href="about.php">Welcome to GA-Tech Solutiions</a></h2>
							</div>
							<div class="content">
								<p>GA Tech welcomes you for cooperation on its services.</p>
								<p>GA TECHSOLUTIONS LIMITED is an ICT Company that deals with business of information technology project
                        management, system analysis and design, training service such as
                        virtual training, professional course, basic course (short and long
						term) institute of technology, consultancy, research, CCTV camera
						installation, voice mail, WEBSITE, IT accessories and electronics
						installation fencing, alarm industries network, hardware solution,
						biometric.</p><p class="more"><a class="button" href="about.php">Read more</a></p>
							</div>
						</article>
					</div>
					<div class="sidebar col-1-3">
						<section class="">
							<div class="heading">Working With..</div>
							<div class="content">
								<div class="rslides_container">
								
								<script src="js/clients.js"></script>
								<script type="text/javascript">

//Define Image Array. Syntax: ["image_path", "url_destination", "url_target"]
var myimages=new Array()
myimages[0]=["images/clients/cl1.jpg", "#", ""]
myimages[1]=["images/clients/cl2.jpg", "#", ""]
myimages[2]=["images/clients/cl3.jpg", "#", "_new"]
myimages[3]=["images/clients/cl4.jpg", "#", ""]

//Create new drop-in slideshow
//Syntax: new dropinslideshow(image_array, slideshow_width, slideshow_height, delay_before_rotation)
new dropinslideshow(myimages, 300, 150, 3000)

</script>
			
		
	                </div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="zerogrid"></div>
	<!--	<div class="row wrapper">
			<section class="col-2-3">
				<div class="heading">About us</div>
				<div class="content">
					Free Basic Html5 Templates created by <a href="http://www.zerotheme.com">Zerotheme</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.
				</div>
			</section>
			<section class="col-1-3">
				<div class="heading">Bookmark it !</div>
				<div class="content">
					<img src="images/icon1.gif" />
					<img src="images/icon2.gif" />
					<img src="images/icon3.gif" />
					<img src="images/icon4.gif" />
					<img src="images/icon5.gif" />
				</div>
			</section>
		</div> -->

	
	<div id="copyright">
	<p>Copyright © 2014 - GA-Tech Solutions</p>
</div>
</footer>

</body></html>