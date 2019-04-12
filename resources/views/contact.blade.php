@extends('layouts.master')

@section('title', 'Contact')

@section('content')

<section class="dnd_section_dd no_padding section_body_fullwidth" style="">
	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span12 ">
				<div id="dnd_google_map_1" 
					data-map_type="ROADMAP" 
					data-lat="-7.328353" 
					data-lng="112.708461" 
					data-zoom="17" 
					data-scrollwheel="0" 
					data-maptypecontrol="1" 
					data-pancontrol="1" 
					data-zoomcontrol="1" 
					data-scalecontrol="1" 
					data-markertitle="Our Company" 
					data-markericon="assets/upload/pointer_map.png" 
					data-markercontent="Our Address" 
					data-markerlat="-7.328353" 
					data-markerlng="112.708461" class="dnd_google_map" style="height:400px;width:100%;">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dnd_section_dd section_with_header" style="">
	<header>
		<div class="dnd_container">
			@if(Session::has('successMessage'))
		    <div class="alert alert-success alert-dismissable">
		        {{ Session::get('successMessage') }}
		    </div>
		    @endif
			<h3>GET IN TOUCH WITH US</h3>
			<p>
				We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.
			</p>
		</div>
	</header>

	<div class="dnd_section_content">
		<div class="dnd_container">
			<div class="dnd_column_dd_span8 padding_right20">
				<div lang="en-US" dir="ltr">
					<div class="screen-reader-response">
					</div>
					<form id="contact-form" method="POST" action="{{ url('/contact/save') }}">
						{{ csrf_field() }}
						<p>
							<span class="wpcf7-form-control-wrap your-name">
									<input name="name" id="name" type="text" placeholder="Nama" required class="contact1-style">
							</span><br/>

							<span class="wpcf7-form-control-wrap your-email">
									<input name="email" id="email" type="email" placeholder="Email" required class="contact1-style">
							</span><br/>

							<span class="wpcf7-form-control-wrap your-email">
									<input name="phone" id="phone" type="text" placeholder="Telepon" required class="contact1-style">
							</span><br/>

							<span class="wpcf7-form-control-wrap your-email">
									<input name="subject" id="subject" type="text" placeholder="Perihal/Subjek" required class="contact1-style">
							</span><br/>

							<span class="wpcf7-form-control-wrap your-message">
								<textarea name="message" id="comment" placeholder="Pesan" required class="contact1-style contact1-style-textarea"></textarea>
							</span>
						</p>
						<p>
							<input type="submit" value="SEND" class="wpcf7-form-control wpcf7-submit"/>
							<div id="msg" class="message"></div>
						<div class="wpcf7-response-output wpcf7-display-none">
						</div>
					</form>
				</div>
			</div>

			<div class="dnd_column_dd_span4 ">
				<h6><span>INFORMATION</span></h6>
				<table>
				<tbody>
				<tr>
					<td>
						<span style="padding:5px;background:transparent; display:inline-block;" class=""><i class="icon-map-marker" style="color:#71757f;line-height:20px;font-size:20px;"></i></span>
					</td>
					<td>
						Jl. Raya Mastrip 7A Surabaya Indonesia
					</td>
				</tr>
				<tr>
					<td>
						<span style="padding:5px;background:transparent; display:inline-block;" class=""><i class="icon-envelope" style="color:#71757f;line-height:20px;font-size:20px;"></i></span>
					</td>
					<td>
						4eachsoftwareid@gmail.com
					</td>
				</tr>
				<tr>
					<td>
						<span style="padding:5px;background:transparent; display:inline-block;" class=""><i class="icon-phonealt" style="color:#71757f;line-height:20px;font-size:20px;"></i></span>
					</td>
					<td>
						08780662565
					</td>
				</tr>
				</tbody>
				</table>

				<h6><span>BUSINESS HOURS</span></h6>

				Monday &#8211; Friday: 8am to 4 pm Saturday: 8am to 1pm Sunday: day off
				<span class="clear " style="height:30px;display:block;"></span>

				<div class="dnd_follow_us">
					<a class="dnd_socialicon dnd_socialicon_facebook dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Facebook"><i class="ci_icon-facebook"></i></a>
					<a class="dnd_socialicon dnd_socialicon_twitter dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Twitter"><i class="ci_icon-twitter"></i></a>
					<a class="dnd_socialicon dnd_socialicon_googleplus dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Google+"><i class="ci_icon-googleplus"></i></a>
					<a class="dnd_socialicon dnd_socialicon_pinterest dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Pinterest"><i class="ci_icon-pinterest"></i></a>
					<a class="dnd_socialicon dnd_socialicon_behance dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Our Behance Profile"><i class="ci_icon-behance"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

