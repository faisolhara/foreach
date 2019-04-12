<?php 
use App\Service\CommonService; 
use App\Model\News; 
?>
<footer id="ABdev_main_footer">

	<div id="footer_columns">
		<div class="container">
			<div class="row">
				<div class="span3 clearfix">
					<div id="text-2" class="widget widget_text">
						<h3 class='footer-widget-heading'>ABOUT US</h3>			
						<div class="textwidget">
							Kita berkomitment bahwa kepuasan kita berada dalam keberhasilan customer menjalankan bisnisnya. <br><br>

							<a href="{{ url('/about') }}" class="footer_text_readmore">Read more<i class="icon-chevron-right"></i></a>
						</div>
					</div>
					<div id="text-5" class="widget widget_text">

						<div class="textwidget">
							<div class="sidebar_social">
								<div class="dnd_follow_us">
									<a class="dnd_socialicon dnd_socialicon_facebook dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Facebook"><i class="ci_icon-facebook"></i></a>
									<a class="dnd_socialicon dnd_socialicon_twitter dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Twitter"><i class="ci_icon-twitter"></i></a>
									<a class="dnd_socialicon dnd_socialicon_googleplus dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Google+"><i class="ci_icon-googleplus"></i></a>
									<a class="dnd_socialicon dnd_socialicon_linkedin dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Linkedin"><i class="ci_icon-linkedin"></i></a>
									<a class="dnd_socialicon dnd_socialicon_pinterest dnd_tooltip" data-gravity="s" href="#" target="_blank" title="Follow us on Pinterest"><i class="ci_icon-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="span3 clearfix">
					<div id="rpwe_widget-4" class="widget rpwe_widget recent-posts-extended">
					<h3 class='footer-widget-heading'>LATEST NEWS</h3>
						<div  class="rpwe-block">
							<ul class="rpwe-ul">
								<?php $latestPosts = CommonService::getLatestNews(3); ?>
								@foreach($latestPosts as $news)
								<?php $date = new \DateTime($news->created_at) ?>
								<li class="rpwe-li rpwe-clearfix">
									<a href="#"  rel="bookmark">
										<img class="rpwe-alignleft rpwe-thumb" src="{{ asset($news->media) }}" alt="{{ $news->title }}">
									</a>
									<h3 class="rpwe-title"><a href="#" title="{{ $news->title }}" rel="bookmark">{{ $news->title }}</a></h3>
									<time datetime="2015" class="rpwe-time published">{{ $date->format('M d, Y') }}</time>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>

				<div class="span3 clearfix">
					<div id="tag_cloud-4" class="widget widget_tag_cloud">
					<h3 class='footer-widget-heading'>NEWS CATEGORY</h3>
						<div class="tagcloud">
							@foreach(News::listTags() as $tag)
							<a href="{{ url('/news?tag=').$tag }}" >{{ $tag }}</a>
							@endforeach
						</div>
					</div>

					<div id="nav_menu-4" class="widget widget_nav_menu">
						<h3 class='footer-widget-heading'>LINKS</h3>
						<div class="menu-widget-footer-links-container">
							<ul id="menu-widget-footer-links" class="menu">
								<li><a href="#">Creative PSD</a></li>
								<li><a href="#">Clean style</a></li>
								<li><a href="#">And nice design</a></li>
								<li><a href="#">Fresh and unique</a></li>
								<li><a href="#">Great for business</a></li>
							</ul>
						</div>
					</div>						
				</div>

				<div class="span3 clearfix">
					<div id="contact-info-2" class="widget contact-info">
						<h3 class='footer-widget-heading'>GET IN TOUCH</h3>		
						<div class='contact_info_widget'>
							<p><i class="ci_icon-envelope"></i><a href="#">4eachsoftware@gmail.com</a></p><p><i class="ci_icon-phonealt"></i>08780662565</p>
							<p><i class="ci_icon-home"></i>Jl. Raya Mastrip 7A <br>Surabaya Indonesia</p>		
						</div>
					</div>
					<div id="text-4" class="widget widget_text">
						<h3 class='footer-widget-heading'>BUSINESS HOURS</h3>
						<div class="textwidget">Monday – Friday: 8am to 4 pm<br>
							Saturday: 8am to 1 pm<br>
							Sunday: day off<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<div id="footer_copyright">
			<div class="container">
				<div class="row">
					<div class="span7 footer_copyright">
						2018 © 4each Software 	 
					</div>
					<div id="footer_menu" class="span5">
						<ul id="footer_menu_inner" class="">
							<li class="menu-item current-menu-item page_item current_page_item "><a href="{{ url('/') }}">Home</a></li>
							<li class="menu-item "><a href="{{ url('/about') }}">About us</a></li>
							<li class="menu-item "><a href="{{ url('/services') }}">Services</a></li>
							<li class="menu-item "><a href="{{ url('/portfolio') }}">Portfolio</a></li>
							<li class="menu-item "><a href="{{ url('/pricelist') }}">Pricelist</a></li>
							<li class="menu-item "><a href="{{ url('/contact') }}">Contact</a></li>
						</ul>					
					</div>
				</div>
			</div>
		</div>
	</footer>