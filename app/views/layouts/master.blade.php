<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>

	<meta charset="utf-8">  

	<title>Agente Virtual</title> <!--insert your title here-->  
	<meta name="description" content=""> <!--insert your description here-->  
	<meta name="author" content=""> <!--insert your name here-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

	<!--START CSS--> 
	<link rel="stylesheet" href="css/nicdark_style.css"> <!--style-->
	<link rel="stylesheet" href="css/nicdark_responsive.css"> <!--nicdark_responsive-->

	<!--revslider-->
	<link rel="stylesheet" href="css/revslider/settings.css"> <!--revslider-->

	<!--END CSS-->

	<!--google fonts-->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!-- font-family: 'Montserrat', sans-serif; -->
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!-- font-family: 'Raleway', sans-serif; -->
	<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->

    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->

    <style>
	.mm_grid_6 li a{
		font-size: 24px;
	}

    </style>
    
    
</head>  
<body id="start_nicdark_framework">

	<div class="nicdark_site">
		<div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>



		@include('layouts.sidebar')
		
		<!--start-->
		<!--start section-->
		<section class="nicdark_section">

			<div class="tp-banner-container">
				<div class="nicdark_slide1" >

					<ul>


						<!--start first-->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="FRIENDS">
							<img src="img/slide/img3.jpg"  alt="" data-lazyload="img/slide/img3.jpg" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>
						<!--end first-->


						<!--start second-->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="LESSON">
							<img src="img/slide/img8.jpg"  alt="" data-lazyload="img/slide/img8.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>
						<!--end second-->

					</ul>

				</div>
			</div>

		</section>
		<!--end section--><!--start section-->
		{{--<section class="nicdark_section nicdark_margintop45_negative">

			<!--start nicdark_container-->
			<div class="nicdark_container nicdark_clearfix">

				<div class="grid grid_12 percentage nomargin">    
					<div class="nicdark_textevidence center">
						<div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
							<div class="nicdark_textevidence">
								<div class="nicdark_margin30">
									<h2 class="white subtitle"><a class="white" href="courses.php">COURSES</a></h2>
								</div>
								<i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
							</div>
						</div>
						<div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
							<div class="nicdark_textevidence">
								<div class="nicdark_margin30">
									<h2 class="white subtitle"><a class="white" href="prices.php">PRICES</a></h2>
								</div>
								<i class="nicdark_zoom icon-money-1 nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
							</div>
						</div>
						<div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow">
							<div class="nicdark_textevidence">
								<div class="nicdark_margin30">
									<h2 class="white subtitle"><a class="white" href="events.php">EVENTS</a></h2>
								</div>
								<i class="nicdark_zoom icon-music-2 nicdark_iconbg left extrabig orange nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
							</div>
						</div>
						<div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right">
							<div class="nicdark_textevidence">
								<div class="nicdark_margin30">
									<h2 class="white subtitle"><a class="white" href="teachers.php">TEACHERS</a></h2>
								</div>
								<i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
							</div>
						</div>
						<div class="nicdark_space5"></div>
					</div>
				</div>

			</div>
			<!--end nicdark_container-->

		</section>
		<!--end section-->--}}
	
		@include('layouts.footer')
		
	</div>
</div>

<!--main-->
<script src="js/main/jquery.min.js"></script> <!--Jquery-->
<script src="js/main/jquery-ui.js"></script> <!--Jquery UI-->
<script src="js/main/excanvas.js"></script> <!--canvas need for ie-->

<!--plugins-->
<script src="js/plugins/revslider/jquery.themepunch.tools.min.js"></script> <!--revslider-->
<script src="js/plugins/revslider/jquery.themepunch.revolution.min.js"></script> <!--revslider-->

<!--menu-->
<script src="js/plugins/menu/superfish.min.js"></script> <!--superfish-->
<script src="js/plugins/menu/tinynav.min.js"></script> <!--tinynav-->

<!--other-->
<script src="js/plugins/isotope/isotope.pkgd.min.js"></script> <!--isotope-->
<script src="js/plugins/mpopup/jquery.magnific-popup.min.js"></script> <!--mpopup-->
<script src="js/plugins/scroolto/scroolto.js"></script> <!--Scrool To-->
<script src="js/plugins/nicescrool/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
<script src="js/plugins/inview/jquery.inview.min.js"></script> <!--inview-->
<script src="js/plugins/parallax/jquery.parallax-1.1.3.js"></script> <!--parallax-->
<script src="js/plugins/countto/jquery.countTo.js"></script> <!--jquery.countTo-->
<script src="js/plugins/countdown/jquery.countdown.js"></script> <!--countdown-->

<!--settings-->
<script src="js/settings.js"></script> <!--settings-->
<!--custom js-->
<script type="text/javascript">
jQuery(document).ready(function() {


		//START SLIDE
		jQuery('.nicdark_slide1').show().revolution(
		{
			dottedOverlay:"none",
			delay:16000,
			startwidth:1170,
			startheight:650,
			hideThumbs:200,
			
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,
			
			navigationType:"none",
			navigationArrows:"solo",
			navigationStyle:"preview2",
			
			touchenabled:"on",
			onHoverStop:"on",
			
			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			keyboardNavigation:"off",
			
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			spinner:"spinner4",
			
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",
			
			autoHeight:"off",						
			forceFullWidth:"off",						

			hideTimerBar: "on",					

			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,						
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			videoJsPath:"rs-plugin/videojs/",
			fullScreenOffsetContainer: ""	
		});
		//END SLIDE
		
		

		//START PARALLAX SECTIONS
		$('#nicdark_parallax_big_image').parallax("50%", 0.3);
		$('#nicdark_parallax_2_btns').parallax("50%", 0.3);
		$('#nicdark_parallax_countdown').parallax("50%", 0.3);
		$('#nicdark_parallax_counter').parallax("50%", 0.3);
		//END PARALLAX SECTIONS

		

		//START COUNTDOWN GRID SECTION
		//variables
		var endDate = "June 06, 2015 10:30:00";
		var grid = "grid_3";
		//insert the class nicdark_displaynone in the var if you wnat to hide the visualization
		var display_years = "nicdark_displaynone";
		var display_days = "";
		var display_hours = "";
		var display_minutes = "";
		var display_seconds = "";
		//call
		$(".nicdark_countdown").countdown({
			date: endDate,
			render: function(data) {
				$(this.el).html("<div class=\"grid "+ grid +" "+ display_years +" \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.years, 4) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_days +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");
			}
		});
		//END COUNTDOWN GRID SECTION

	});
</script>
<!--custom js-->
</body>  
</html>