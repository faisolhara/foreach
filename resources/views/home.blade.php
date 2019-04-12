@extends('layouts.master')

@section('title', 'Home')

@section('content')

<section id="ABdev_main_slider">
	<!-- START REVOLUTION SLIDER 4.6.0 fullwidth mode -->

	<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:520px;">

		<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;max-height:520px;height:520px;">
			<ul>	
				<!-- SLIDE  -->
				<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/images/slider/slider1.jpg') }}"  alt="slider3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
					<div class="tp-caption Lato_Big_Boxed_White tp-fade tp-resizeme"
						 data-x="135"
						 data-y="100" 
						data-speed="300"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">BEST <span class="blue_text">CONSULTANT</span>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption Lato_Big_Boxed_White_SMALL tp-fade tp-resizeme"
						 data-x="135"
						 data-y="193" 
						data-speed="300"
						data-start="1000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"><i class="icon-ok" style="color:#50a2de; font-size:12px;"></i>  &nbsp; MEMBERIKAN INOVASI DAN SOLUSI BISNIS
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption Lato_Big_Boxed_White_SMALL tp-fade tp-resizeme"
						 data-x="135"
						 data-y="247" 
						data-speed="300"
						data-start="1500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><i class="icon-ok" style="color:#50a2de; font-size:12px;"></i>  &nbsp; KESUKSESAN CUSTOMER TUJUAN KAMI
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption Lato_Big_Boxed_White_SMALL tp-fade tp-resizeme"
						 data-x="135"
						 data-y="301" 
						data-speed="300"
						data-start="2000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><i class="icon-ok" style="color:#50a2de; font-size:12px;"></i>  &nbsp; PROFESIONAL DAN CREDIBLE
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption Blue_Button tp-fade tp-resizeme"
						 data-x="135"
						 data-y="377" 
						data-speed="300"
						data-start="2500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{ url('/contact') }}"  class="white_text">KONSULTASI DENGAN KAMI</a>
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption lft ltr rs-parallaxlevel-2"
						 data-x="696"
						 data-y="99" 
						data-speed="1300"
						data-start="600"
						data-easing="Power3.easeInOut"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="800"

						style="z-index: 6;"><img src="{{ asset('assets/images/slider/display.png') }}" alt="">
					</div>

					<!-- LAYER NR. 6 -->
					<div class="tp-caption lft ltr rs-parallaxlevel-1"
						 data-x="917"
						 data-y="252" 
						data-speed="600"
						data-start="1200"
						data-easing="Power3.easeInOut"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="800"

						style="z-index: 7;"><img src="{{ asset('assets/images/slider/mac.png') }}" alt="">
					</div>

					<!-- LAYER NR. 7 -->
					<div class="tp-caption lft ltr rs-parallaxlevel-2"
						 data-x="642"
						 data-y="239" 
						data-speed="600"
						data-start="1800"
						data-easing="Power3.easeInOut"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="800"

						style="z-index: 8;"><img src="{{ asset('assets/images/slider/ipad.png') }}" alt="">
					</div>

					<!-- LAYER NR. 8 -->
					<div class="tp-caption lft ltr rs-parallaxlevel-1"
						 data-x="621"
						 data-y="329" 
						data-speed="1300"
						data-start="2400"
						data-easing="Power3.easeInOut"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="800"

						style="z-index: 9;"><img src="{{ asset('assets/images/slider/iphone.png') }}" alt="">
					</div>

				</li>
				<!-- SLIDE  -->
				<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/images/slider/slider2.jpg') }}"  alt="slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
					<div class="tp-caption Lato_Big_White_2 tp-fade tp-resizeme"
						 data-x="center" data-hoffset="0"
						 data-y="160" 
						data-speed="300"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Solusi Lengkap Semua Kebutuhan IT Anda
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption Lato_Big_Boxed_small2 tp-fade tp-resizeme"
						 data-x="center" data-hoffset="0"
						 data-y="center" data-voffset="10"
						data-speed="300"
						data-start="1500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Kami akan menjadi mitra terbaik Anda dan kami akan memenuhi segala kebutuhan teknologi Anda
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption White_Button tp-fade tp-resizeme"
						 data-x="center" data-hoffset="0"
						 data-y="center" data-voffset="100"
						data-speed="400"
						data-start="2000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="400"
						data-captionhidden="on"

						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{ url('/services') }}">LAYANAN KAMI</a>
					</div>
				</li>
				<!-- SLIDE  -->
				<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/images/slider/slider4.jpg') }}"  alt="slider4"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfb"
						 data-x="135"
						 data-y="82" 
						data-speed="500"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="500"

						style="z-index: 2;"><img src="{{ asset('assets/images/slider/coco_tablet.jpg') }}" alt="">
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption Lato_Big_White tp-fade tp-resizeme"
						 data-x="520"
						 data-y="160" 
						data-speed="300"
						data-start="1000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Teknologi Untuk Membangun  <span style="blue_text">Negeri</span>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption Lato_Small_White tp-fade tp-resizeme"
						 data-x="525"
						 data-y="210" 
						data-speed="600"
						data-start="1500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="600"
						data-captionhidden="on"

						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Kami berkomitmen untuk memberikan layanan terbaik untuk anda, <br>dengan memberikan solusi lengkap untuk segala kebutuhan IT
					</div>
					<!-- LAYER NR. 4 -->
					<div class="tp-caption Blue_Button tp-fade tp-resizeme"
						 data-x="548"
						 data-y="340" 
						data-speed="900"
						data-start="2000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="300"
						data-captionhidden="on"

						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{ url('/contact') }}"  class="white_text">DISKUSI DENGAN KAMI</a>
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption White_Button tp-fade tp-resizeme"
						 data-x="820"
						 data-y="340" 
						data-speed="900"
						data-start="2000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						 data-endspeed="900"
						data-captionhidden="on"

						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{ url('/services') }}">PELAJARI LAGI</a>
					</div>
				</li>
			</ul>
			<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
		</div>

	</div>	
</section>
<!-- END REVOLUTION SLIDER -->

<!-- Welcome -->
<section class="dnd_section_dd aligncenter" style="background-color:#ffffff;">
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span1 "></div>
			<div class="dnd_column_dd_span10 ">
				<h1 class="aligncenter"><span>WELCOME WE’RE <span class=blue_text>4each Software</span></span></h1>
				<span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
				Kami merupakan konsultan IT di surabaya untuk memberikan solusi bisnis terbaik untuk clientnya. 4each telah menghasilkan produk-produk IT untuk menghasilkan solusi bisnis client. 4each membantu customer dalam bidang teknologi informasi baik dalam bentuk retail (perorangan) atau company (perusahaan)
			</div>
			<div class="dnd_column_dd_span1 "></div>
		</div>
	</div>
</section>
<!-- End Welcome -->

<!-- services -->
	<section class="dnd_section_dd  section_with_header" style="background-color:#f5f6f8;">
		<header>
			<div class="dnd_container">
				<h3>SERVICES</h3>
				<p>Kami membantu Anda dari menemukan masalah bisnis Anda, memberikan beberapa alternatif solusi, dan menyarankan kepada solusi terbaik. Kami akan memberikan inovasi berbeda dan Anda yang menentukannya.</p>
			</div>
		</header>
		<div class="dnd_section_content">
			<div class="dnd_container">
				<div class="dnd_column_dd_span4 ">
					<div class="dnd_service_box dnd_service_box_round_text_aside " style=" ">
						<div class="dnd_service_box_header">
						<a href="#" target="_self" class="dnd_icon_boxed"><i class="icon-star" style="color: #50a2de;background:transparent;"></i></a>
						<a href="#" target="_self"><h3>Web Content</h3></a></div>
						<p>Website Content (Company Profile, Personal Profile, Blog, Magazine Online, E-Commerce)</p>
					</div>
					<div class="dnd_service_box dnd_service_box_round_text_aside " style=" ">
						<div class="dnd_service_box_header">
						<a href="#" target="_self" class="dnd_icon_boxed"><i class="icon-supportalt" style="color: #50a2de;background:transparent;"></i></a>
						<a href="#" target="_self"><h3>Information System</h3></a></div>
						<p>Inventory/Gudang/Toko, Addition Asset, Kasir/Payment, Marketing, Sales, Unit Usaha, Produksi dan lain-lain</p>
					</div>
				</div>
				<div class="dnd_column_dd_span4 ">
					<div class="dnd_service_box dnd_service_box_round_text_aside " style=" ">
						<div class="dnd_service_box_header">
						<a href="#" target="_self" class="dnd_icon_boxed"><i class="icon-th" style="color: #50a2de;background:transparent;"></i></a>
						<a href="#" target="_self"><h3>Enterprise Resource Planning</h3></a></div>
						<p>System Admin, Sales Order, Marketing, Manufacture, Purchasing, Inventory, Asset Management, Account Payable, Account Receivables, General Ledger, Human Resource</p>
					</div>
					<div class="dnd_service_box dnd_service_box_round_text_aside " style=" ">
						<div class="dnd_service_box_header">
						<a href="#" target="_self" class="dnd_icon_boxed"><i class="icon-nexus" style="color: #50a2de;background:transparent;"></i></a>
						<a href="#" target="_self"><h3>Mobile Application (Android)</h3></a></div>
						<p>Semua projek mobile system</p>
					</div>
				</div>
				<div class="dnd_column_dd_span4 ">
					<div class="dnd_service_box dnd_service_box_round_text_aside " style=" ">
						<div class="dnd_service_box_header">
						<a href="#" target="_self" class="dnd_icon_boxed"><i class="icon-slidertwofull" style="color: #50a2de;background:transparent;"></i></a><a href="#" target="_self"><h3>Sistem Informasi Akademik</h3></a></div>
						<p>E-learning, Absensi, Sistem Informasi Siswa/Mahasiswa/Guru/Dosen , dan lain-lain</p>
					</div>
					<div class="dnd_service_box dnd_service_box_round_text_aside " style=" ">
						<div class="dnd_service_box_header">
						<a href="#" target="_self" class="dnd_icon_boxed"><i class="icon-copy" style="color: #50a2de;background:transparent;"></i></a>
						<a href="#" target="_self"><h3>Dekstop Application</h3></a></div>
						<p>Semua projek dekstop system</p>
					</div>
				</div>
			</div>
		</div>
		
		
	</section>
	<!-- End Services -->

<!-- Welcome Section -->
	<section class="dnd_section_dd  section_with_header" style="">

		<header>
			<div class="dnd_container">
				<h3>Kenapa 4each Software</h3>
				<p>Tim 4each terdiri oleh lulusan-lulusan universitas terbaik di Indonesia. Kami berkomitmen untuk membangun indonesia menuju ekonomi kreatif asia.</p>
			</div>
		</header>

		<div class="dnd_section_content">
			<div class="dnd_container">
				<div class="dnd_column_dd_span4 ">
					<div class="dnd-animo " data-animation="flipInX" data-duration="1000" data-delay="200">
						<img src="{{ asset('assets/images/common/philosophy.png') }}" alt="">
					</div>
					<span class="clear spacer_responsive_hide_mobile " style="height:34px;display:block;"></span>
					<h6><span>OUR PHILOSOPHY</span></h6>
					One innovation more solution
				</div>
				<div class="dnd_column_dd_span4 ">
					<div class="dnd-animo " data-animation="flipInX" data-duration="1000" data-delay="200">
						<img src="{{ asset('assets/images/common/vision.png') }}" alt="">
					</div>
					<span class="clear spacer_responsive_hide_mobile " style="height:34px;display:block;"></span>
					<h6><span>OUR VISION</span></h6>
					Menjadi pemberi solusi dan inovasi terbaik untuk kesuksesan customer
				</div>
				<div class="dnd_column_dd_span4 ">
					<div class="dnd-animo " data-animation="flipInX" data-duration="1000" data-delay="200">
						<img src="{{ asset('assets/images/common/mission.png') }}" alt="">
					</div>
					<span class="clear spacer_responsive_hide_mobile " style="height:34px;display:block;"></span>
					<h6><span>OUR VALUES</span></h6>
					Menghasilkan solusi cerdas dan inovasi berbeda kepada customer di bidang teknologi informasi
				</div>
			</div>
		</div>
			
		
	</section>
	<!-- End Welcome Section -->

	
@endsection

