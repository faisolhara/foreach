@extends('layouts.master')

@section('title', 'About')

@section('content')

<section class="dnd_section_dd section_with_header" style="background-color:#f5f6f8;">
	<header>
		<div class="dnd_container">
			<h3>TENTANG KAMI</h3>
			<p>
				Kami adalah konsultan IT sekaligus penyedia layanan pembuatan atau pengembangan software di Surabaya. Kami terdiri dari tim muda yang penuh dengan visi dikombinasikan dengan tim expert yang telah berpengalaman didunia konsultan IT. Dengan tim tersebut kami yakin dapat memberikan layanan maksimal untuk customer.
			</p>
		</div>
	</header>

	<div class="dnd_section_content">
		<div class="dnd_container">

			<div class="dnd_column_dd_span4 ">
				<div class="dnd-accordion " data-expanded="1">
					<h3>WHERE WE ARE</h3>
					<div class="dnd-accordion-body">
						 Kami berada di Kota Surabaya dengan extend office di Kota Malang. Jika anda ingin mengajak kami diskusi, kami siap mengunjungi anda.
					</div>
					<h3>WHO WE ARE</h3>
					<div class="dnd-accordion-body">
						 Kita terdiri dari tim konsultan, tim teknis, tim marketing, dan tim keuangan.
					</div>
					<h3>WHY ARE WE DOING THIS</h3>
					<div class="dnd-accordion-body">
						 Keberhasilan kami adalah kesuksesan customer, kami ingin mewujudkan visi customer dengan solusi IT yang kita berikan.
					</div>
				</div>
			</div>

			<div class="dnd_column_dd_span4 ">
				<div class="dnd-tabs dnd-tabs-horizontal dnd-tabs-position-top dnd-tabs-boxed " data-selected="1" data-break_point="370" data-effect="slide">
					<ul class="dnd-tabs-ul">
						<li><a href="#tab-3">FILOSOFI KAMI</a></li>
						<li><a href="#tab-1">VISI KAMI</a></li>
						<li><a href="#tab-2">MISI KAMI</a></li>
					</ul>
					<div class="dnd-tabs-wrapper">
						<div id="tab-1">
							<p>
								Menjadi pemberi solusi dan inovasi terbaik untuk kesuksesan customer
							</p>
						</div>
						<div id="tab-2">
							<p>
								Menghasilkan solusi cerdas dan inovasi berbeda kepada customer di bidang teknologi informasi
							</p>
						</div>
						<div id="tab-3">
							<p>
								One innovation more solution
							</p>											
						</div>
					</div>
				</div>
			</div>

			<div class="dnd_column_dd_span4 ">
				<div class="dnd_progress_bar dnd_progress_bar_default">
					<span class="dnd_meter_label">ENTERPRISE RESOURCE PLANNING</span>
					<div class="dnd_meter">
						<div class="dnd_meter_percentage" data-percentage="95" style="width: 95%;background:linear-gradient(to right,#50a2de,#50a2de);">
							<span>95%</span>
						</div>
					</div>
				</div>
				<div class="dnd_progress_bar dnd_progress_bar_default">
					<span class="dnd_meter_label">WEB CONTENT & APPLICATION</span>
					<div class="dnd_meter">
						<div class="dnd_meter_percentage" data-percentage="95" style="width: 95%;background:linear-gradient(to right,#50a2de,#50a2de);">
							<span>95%</span>
						</div>
					</div>
				</div>
				<div class="dnd_progress_bar dnd_progress_bar_default">
					<span class="dnd_meter_label">MOBILE APPLICATION</span>
					<div class="dnd_meter">
						<div class="dnd_meter_percentage" data-percentage="90" style="width: 90%;background:linear-gradient(to right,#50a2de,#50a2de);">
							<span>90%</span>
						</div>
					</div>
				</div>
				<div class="dnd_progress_bar dnd_progress_bar_default">
					<span class="dnd_meter_label">CLOUD COMPUTING</span>
					<div class="dnd_meter">
						<div class="dnd_meter_percentage" data-percentage="90" style="width: 90%;background:linear-gradient(to right,#50a2de,#50a2de);">
							<span>90%</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dnd_section_dd pattern_overlayed dnd-video-bg" data-background_image="assets/upload/city.jpg" style="background-image:url(assets/upload/city.jpg);">
		
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span12 ">
				<span class="clear " style="height:50px;display:block;"></span>
				<h4 class="white_text aligncenter"><span>PERCAYAKAN PADA KAMI</span></h4>
				<div class="white_text aligncenter">
					Dengan adanya sistem IT anda akan lebih percaya diri untuk memutuskan kebijakan usaha anda!
				</div>
				<span class="clear " style="height:50px;display:block;"></span>
			</div>
		</div>
	</div>
	
	
	<video style="position:absolute;top:0;left:0;min-height:100%;min-width:100%;z-index:0;" poster="{{ asset('assets/upload/city.jpg') }}" loop="loop" autoplay="autoplay" preload="metadata" controls="controls">
		<source type="video/mp4" src="{{ asset('assets/upload/city.mp4') }}" />
		<source type="video/webm" src="{{ asset('assets/upload/city.webm') }}" />
		<source type="video/ogg" src="{{ asset('assets/upload/city.ogv') }}" />
	</video>

</section>


<!-- PArtners -->
<section class="dnd_section_dd no_padding" style="background-color:#f5f6f8;">
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span2 " style="padding-top: 80px;">
				<span class="clear " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInLeftBig" data-duration="1000" data-delay="1100">
					<a href="#"><img src="{{ asset('assets/images/technology/oracle.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 " style="padding-top: 50px">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInLeftBig" data-duration="1000" data-delay="700">
					<a href="#"><img src="{{ asset('assets/images/technology/php.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 ">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInRightBig" data-duration="1000" data-delay="300">
					<a href="#"><img src="{{ asset('assets/images/technology/android.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 ">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInLeftBig" data-duration="1000" data-delay="300">
					<a href="#"><img src="{{ asset('assets/images/technology/laravel.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 " style="padding-top: 40px">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInRightBig" data-duration="1000" data-delay="700">
					<a href="#"><img src="{{ asset('assets/images/technology/delphi.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 ">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInRightBig" data-duration="1000" data-delay="1100">
					<a href="#"><img src="{{ asset('assets/images/technology/bootstrap.png') }}" alt=""></a>
				</div>
				<span class="clear " style="height:40px;display:block;"></span>
			</div>
		</div>
		<div class="dnd_container">
			<div class="dnd_column_dd_span2 " style="">
				<span class="clear " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInLeftBig" data-duration="1000" data-delay="1100">
					<a href="#"><img src="{{ asset('assets/images/technology/html5.png') }}" style="height:150px;" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 " style="">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInLeftBig" data-duration="1000" data-delay="700">
					<a href="#"><img src="{{ asset('assets/images/technology/css3.png') }}" style="height:150px;" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 ">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInRightBig" data-duration="1000" data-delay="300">
					<a href="#"><img src="{{ asset('assets/images/technology/javascript.png') }}" style="height:150px;" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 " style="padding-top:40px;">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInLeftBig" data-duration="1000" data-delay="300">
					<a href="#"><img src="{{ asset('assets/images/technology/postgresql.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 " style="padding-top:20px;">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInRightBig" data-duration="1000" data-delay="700">
					<a href="#"><img src="{{ asset('assets/images/technology/mysql.png') }}" alt=""></a>
				</div>
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span2 ">
				<span class="clear spacer_responsive_hide_mobile " style="height:40px;display:block;"></span>
				<div class="dnd-animo " data-animation="fadeInRightBig" data-duration="1000" data-delay="1100">
					<a href="#"><img src="{{ asset('assets/images/technology/jquery.png') }}" alt=""></a>
				</div>
				<span class="clear " style="height:40px;display:block;"></span>
			</div>

		</div>
	</div>
</section>

<!-- Are u ready -->
<section class="dnd_section_dd no_padding" style="background-color:#50a2de;">
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span12 ">
				<div class="dnd-callout_box dnd-callout_box_style_1 color_white">
					<span class="dnd-callout_box_title">ANDA PUNYA IDE UNTUK PENGEMBANGAN USAHA ANDA?</span>
					<p>
					</p>
					<a href="#" target="_self" class="dnd-button1 dnd-button_light dnd-button_rounded dnd-button_large">DISKUSIKAN DENGAN KAMI</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

