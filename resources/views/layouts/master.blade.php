<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<title>4each Software - @yield('title')</title>


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon-4each.ico') }}" />
			
	<!--[if lt IE 9]>
	  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<link rel='stylesheet' id='ABss_form_style-css'  href='{{ asset("assets/css/simple-subscribe.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='ABt_testimonials_shortcode-css'  href='{{ asset("assets/css/testimonials_shortcode.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='abts_ab_tweet_scroller-css'  href='{{ asset("assets/css/tweet-scroller.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='ABp_portfolio_shortcode-css'  href='{{ asset("assets/css/portfolio_shortcode.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css'  href='{{ asset("assets/css/contact-form.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='mediaelement-css'  href='{{ asset("assets/css/mediaelementplayer.min.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='dnd_icons_default-css'  href='{{ asset("assets/css/icons-default.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='ABdev_animo-animate-css'  href='{{ asset("assets/css/animo-animate.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='ABdev_prettify-css'  href='{{ asset("assets/css/prettify.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='ABdev_shortcodes-css'  href='{{ asset("assets/css/dnd-shortcodes.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='ABdev_shortcodes_responsive-css'  href='{{ asset("assets/css/responsive.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='{{ asset("assets/revslider/rs-plugin/css/settings.css") }}' type='text/css' media='all' />


	<link rel='stylesheet' id='ABdev_icon_font-css'  href='{{ asset("assets/css/fonts.css") }}' type='text/css' media='all' />

	<link rel='stylesheet' id='font_css-css'  href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%7COpen+Sans%3A400&amp;ver=4.0.1' type='text/css' media='all' />

	<link rel='stylesheet' id='ABdev_core_icons-css'  href='{{ asset("assets/css/core_style.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='fancybox-css'  href='{{ asset("assets/css/jquery.fancybox.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='nivo-css'  href='{{ asset("assets/css/nivo-slider.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='main_css-css'  href='{{ asset("assets/css/style.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='responsive_css-css'  href='{{ asset("assets/css/main-responsive.css") }}' type='text/css' media='all' />


	<link rel='canonical' href='index.html' />
	<link rel='shortlink' href='index.html' />

	<style type="text/css">
		#logo {
		    margin-top: 15px !important;
		}
	</style>

</head>


<body class="home page page-template page-template-page-front-page-revolution-slider-php">


	<header id="ABdev_main_header" class="clearfix default  sticky_main_header ">
		

		@include('includes.top-bar')

		@include('includes.navigations')

		<div id="ABdev_menu_toggle">
			<i class="ci_icon-menu"></i>
		</div>

	</header>
	<div id="ABdev_header_spacer"></div>

	@yield('content')

	@include('includes.footer')


	                                            
	<script type='text/javascript' src='{{ asset("assets/js/jquery.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery-migrate.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.placeholder.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.carouFredSel.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/portfolio.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/prettify.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/revslider/rs-plugin/js/jquery.themepunch.tools.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js") }}'></script>

	<script type='text/javascript' src='{{ asset("assets/js/ab-simple-subscribe.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.form.min.js") }}'></script>

	<script type='text/javascript' src='{{ asset("assets/js/ab-tweet-scroller.js") }}'></script>

	<script type='text/javascript' src='{{ asset("assets/js/scripts.js") }}'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var mejsL10n = {"language":"en","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
	var _wpmejsSettings = {"pluginPath":"\/incomeup\/wp-includes\/js\/mediaelement\/"};
	/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset("assets/js/mediaelement-and-player.min.js") }}'></script>
	<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;ver=4.0.1'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.gmap.min.js") }}'></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCb_-yba-8LsMN2Us60yEggVUmLrMTh-2A"></script>
	<script type='text/javascript' src='{{ asset("assets/js/animo.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.inview.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.parallax.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.tipsy.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.knob-custom.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/ui/jquery.ui.core.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/ui/jquery.ui.widget.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/ui/jquery.ui.accordion.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/ui/jquery.ui.tabs.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/ui/jquery.ui.effect.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/ui/jquery.ui.effect-slide.min.js") }}'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var dnd_options = {"dnd_tipsy_opacity":"0.8","dnd_custom_map_style":""};
	/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset("assets/js/init.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/testimonials.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.carouFredSel.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.touchSwipe.min.js") }}'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var wpsArgs = {"auto_scroll":"false","circular":"false","easing_effect":"linear","no_of_items_to_scroll":"1","fx":"fade"};
	/* ]]> */
	</script>

	<script type='text/javascript' src='{{ asset("assets/js/jquery.placeholder.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.isotope.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.fancybox.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.nivo.slider.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jquery.countdown.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/superfish.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/masonry.min.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/imagesloaded.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/jpreloader.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/waypoint.js") }}'></script>
	<script type='text/javascript' src='{{ asset("assets/js/custom.js") }}'></script>
		
	<script type="text/javascript">
		/******************************************
			-	PREPARE PLACEHOLDER FOR SLIDER	-
		******************************************/
		

		var setREVStartSize = function() {
			var	tpopt = new Object();
				tpopt.startwidth = 1170;
				tpopt.startheight = 520;
				tpopt.container = jQuery('#rev_slider_4_1');
				tpopt.fullScreen = "off";
				tpopt.forceFullWidth="off";

			tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
		};

		/* CALL PLACEHOLDER */
		setREVStartSize();


		var tpj=jQuery;
		tpj.noConflict();
		var revapi4;

		tpj(document).ready(function() {

		if(tpj('#rev_slider_4_1').revolution == undefined)
			revslider_showDoubleJqueryError('#rev_slider_4_1');
		else
		   revapi4 = tpj('#rev_slider_4_1').show().revolution(
			{
				dottedOverlay:"none",
				delay:5000,
				startwidth:1170,
				startheight:520,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:3,
				
										
				simplifyAll:"off",

				navigationType:"bullet",
				navigationArrows:"none",
				navigationStyle:"round",

				touchenabled:"on",
				onHoverStop:"on",
				nextSlideOnWindowFocus:"off",

				swipe_threshold: 0.7,
				swipe_min_touches: 1,
				drag_block_vertical: false,
				
										
										
				keyboardNavigation:"off",

				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:40,

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

				spinner:"spinner0",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",
				
				
				hideTimerBar:"on",
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

										hideSliderAtLimit:0,
				hideCaptionAtLimit:601,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0					});



			
		});	/*ready*/

	</script>
</body>
</html>