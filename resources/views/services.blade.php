@extends('layouts.master')

@section('title', 'Services')

@section('content')
<section class="dnd_section_dd " style="background-color:#f5f6f8;">
	<header>
		<div class="dnd_container">
			<h3>LAYANAN</h3>
			<p>
				Sejalan dengan perkembangan bisnis, 4each Software memberikan layanan lengkap kepada client dalam setiap bidan IT. Secara garis besar layanan kami terdiri dari berikut :
			</p>
		</div>
	</header>
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span3 ">
				<div class="dnd_metro_box " style="background:#ffffff; border: 1px solid #e9eaec; border-radius:8px;">
					<div class="dnd_metro_box_header">
						<div class="dnd_icon_boxed">
							<i class="icon-searchdocument" style="color:#5fcbcd; background:transparent;"></i>
						</div>
						<h3>BISNIS KONSULTASI</h3>
					</div>
					<p>
						Kami menawarkan keahlian dalam bidang solusi transformasi bisnis dan jasa konsultasi
					</p>
				</div>
			</div>
			<div class="dnd_column_dd_span3 ">
				<div class="dnd_metro_box " style="background:#ffffff; border: 1px solid #e9eaec; border-radius:8px;">
					<div class="dnd_metro_box_header">
						<div class="dnd_icon_boxed">
							<i class="icon-laptop" style="color:#50a2de; background:transparent;"></i>
						</div>
						<h3>BISNIS SOLUSI</h3>
					</div>
					<p>
						Kami menyediakan solusi lengkap mulai dari disain dan blue print, konsultasi, implementasi, dukungan, pemeliharaan, managed services dan pelatihan
					</p>
				</div>
			</div>
			<div class="dnd_column_dd_span3 ">
				<div class="dnd_metro_box " style="background:#ffffff; border: 1px solid #e9eaec; border-radius:8px;">
					<div class="dnd_metro_box_header">
						<div class="dnd_icon_boxed">
							<i class="icon-screwdriveralt" style="color:#50c5de; background:transparent;"></i>
						</div>
						<h3>BISNIS INSTALASI JARINGAN, CCTV, DAN CLOUD SERVER</h3>
					</div>
					<p>
						Kami menawarkan jasa dan solusi jaringan, CCTV, Hardware Maintenance serta menyediakan Cloud Server untuk sistem anda
					</p>
				</div>
			</div>
			<div class="dnd_column_dd_span3 ">
				<div class="dnd_metro_box " style="background:#ffffff; border: 1px solid #e9eaec; border-radius:8px;">
					<div class="dnd_metro_box_header">
						<div class="dnd_icon_boxed">
							<i class="icon-shopping-cart" style="color:#5bd4b6; background:transparent;"></i>
						</div>
						<h3>BISNIS RETAIL</h3>
					</div>
					<p>
						Kami menyediakan produk-produk IT secara ritel dan langsung kepada konsumen selaku pengguna akhir
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dnd_section_dd " style="background-color:#ffffff;">
			
	<div class="dnd_section_content">
		<div class="dnd_container">

			<div class="dnd_column_dd_span7 padding_left70">
				<div class="dnd-animo " data-animation="fadeInLeft" data-duration="1000" data-delay="0">
					<img src="{{ asset('assets/images/common/technology.jpg') }}" alt="">
				</div>
				<span class="clear spacer_responsive_hide_tablet" style="height:20px;display:block;"></span>
			</div>

			<div class="dnd_column_dd_span5 ">
				<h4><span>DI JAMAN MODERN INI TEKNOLOGI SUDAH MERUPAKAN STAKEHOLDER WAJIB SEBUAH PERUSAHAAN </span></h4>
				<p>
					Beberapa perusahaan besar telah gagal bersaing dengan kompetitornya karena mereka tidak mengembangakan teknologi di perusahaannya. Saat ini inovasi dan solusi bisnis dengan media teknologi informasi merupakan salah satu aspek yang sangat menentukan kesuksesan bisnis anda. Oleh karena itu kami siap memberikan pelayan terbaik untuk membantu anda bersaing dan berkompetisi di dunia bisnis era teknologi informasi.
				</p>
				<span class="clear spacer_responsive_hide_mobile " style="height:23px;display:block;"></span>
				<a href="{{ url('/contact') }}" target="_self" class="dnd-button dnd-button_blue dnd-button_rounded dnd-button_large ">MULAI DISKUSIKAN DENGAN KAMI</a>
			</div>
		</div>
	</div>
</section>

<section class="dnd_section_dd  section_no_column_margin section_with_header" style="background-color:#ffffff;">

	<header>
		<div class="dnd_container">
			<h3>PROSES LAYANAN KAMI</h3>
			<p>
				Kami benar-benar ingin yang kami lakukan adalah sesuai dengan keinginan anda, sehingga kita memerlukan proses cerdas yang akan memunculkan sebuah hasil yang substansial. 
			</p>
		</div>
	</header>

	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span2 service_box_process_full">
				<div class="dnd_service_box dnd_service_box_unboxed_round " style=" ">
					<div class="dnd_service_box_header">
						<div class="dnd_icon_boxed" style="background:#50a2de; ">
							<i class="icon-document" style="color: #ffffff;background:transparent;"></i>
						</div>
						<h3>BRIEF</h3>
					</div>
				</div>
			</div>
			<div class="dnd_column_dd_span2 service_box_process_full">
				<div class="dnd_service_box dnd_service_box_unboxed_round " style=" ">
					<div class="dnd_service_box_header">
						<div class="dnd_icon_boxed" style="background:#50a2de; ">
							<i class="icon-presentation" style="color: #ffffff;background:transparent;"></i>
						</div>
						<h3>ANALYTICS</h3>
					</div>
				</div>
			</div>
			<div class="dnd_column_dd_span2 service_box_process_full">
				<div class="dnd_service_box dnd_service_box_unboxed_round " style=" ">
					<div class="dnd_service_box_header">
						<div class="dnd_icon_boxed" style="background:#50a2de; ">
							<i class="icon-greenlightbulb" style="color: #ffffff;background:transparent;"></i>
						</div>
						<h3>IDEA</h3>
					</div>
				</div>
			</div>
			<div class="dnd_column_dd_span2 service_box_process_empty">
				<div class="dnd_service_box dnd_service_box_unboxed_round " style=" ">
					<div class="dnd_service_box_header">
						<div class="dnd_icon_boxed" style="background:#ffffff; ">
							<i class="icon-picture" style="color: #50a2de;background:transparent;"></i>
						</div>
						<h3>DESIGN</h3>
					</div>
				</div>
			</div>
			<div class="dnd_column_dd_span2 service_box_process_empty">
				<div class="dnd_service_box dnd_service_box_unboxed_round " style=" ">
					<div class="dnd_service_box_header">
						<div class="dnd_icon_boxed" style="background:#ffffff; ">
							<i class="icon-screwdriveralt" style="color: #50a2de;background:transparent;"></i>
						</div>
						<h3>DEVELOPMENT</h3>
					</div>
				</div>
			</div>
			<div class="dnd_column_dd_span2 service_box_process_empty">
				<div class="dnd_service_box dnd_service_box_unboxed_round " style=" ">
					<div class="dnd_service_box_header">
						<div class="dnd_icon_boxed" style="background:#ffffff; ">
							<i class="icon-supportalt" style="color: #50a2de;background:transparent;"></i>
						</div>
						<h3>SUPPORT</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dnd_section_dd no_padding" style="background-color:#50a2de;">
	
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span12 ">
				<div class="dnd-callout_box dnd-callout_box_style_2 color_white">
					<span class="dnd-callout_box_title">ANDA SIAP MENJEMPUT KESUKSESAN PERUSAHAAN ANDA? MARI KITA REALISASIKAN BERSAMA!</span>
					<p></p>
					<a href="#" target="_self" class="dnd-button1 dnd-button_light dnd-button_rounded dnd-button_large">DISKUSI DENGAN KAMI</a>
				</div>
			</div>
		</div>
	</div>
	
	
</section>

@endsection

