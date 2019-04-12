@extends('layouts.master')

<?php 
use App\Model\News;
?>

@section('title', 'News')

@section('content')

<section>
	<div class="container">
		<div class="row">
			<div class="blog_category_index blog_category_index_right span9 content_with_right_sidebar">
			@foreach($models as $models)
				<div class="post-4215 post type-post status-publish format-standard has-post-thumbnail hentry category-left-sidebar-blog-style-2 category-left-sidebar-blog-style-3 category-right-sidebar-blog category-right-sidebar-blog-style-2  post_wrapper clearfix">
					<div class="post_content">
						<?php $date = new \DateTime($models->created_at) ?>
						<div class="post_badges">
							<div class="post_info">
								<div class="post_date">
									<span class="post_main_date">{{ $date->format('d') }}</span>
									<span class="post_main_month">{{ $date->format('M, Y') }}</span>
								</div>
								<div class="post_type">
									<i class="ci_icon-picture"></i>
								</div>
							</div>
						</div>
						@if($models->type == News::TEXT )
						<div class="post_main">
							<img width="1200" height="715" src="{{ asset($models->media) }}" class="attachment-full wp-post-image" alt="portfolio7"/>
							<div class="post_main_inner_wrapper">
								<h5><a href="#">{{ $models->title }}</a></h5>
								<span class="post_author">By 
									<span>{{ !empty($models->createdBy) ? $models->createdBy->name : '' }} <i class="ci_icon-moonfull"></i></span>
									<span class="post_date_inner">{{ $date->format('d M, Y') }}</span>
									<span class="post_category">
										@foreach($models->tags as $model)
											{{ $model->tag }}
										@endforeach
									</span>
								</span>

								<div class="post_padding">
									<p>
										{{ substr($models->content, 0, 300) }}{{ strlen($models->content) > 300 ? '.........' : '' }}
										
									</p>
								</div>
								<div class="post-readmore">
									<a href="#" class="more-link">Read More</a>
									<p class="post_meta_tags">
										<i class="ci_icon-comment"></i>3
									</p>
								</div>
							</div>
						</div>
						@elseif($models->type == News::VIDEO)
						<div class="post_main">
							<div class="videoWrapper-youtube">
								<iframe src="{{ $models->media }}?showinfo=0&amp;autohide=1&amp;related=0" >
								</iframe>
							</div>
							<div class="post_main_inner_wrapper">
								<h5><a href="#">{{ $models->title }}</a></h5>
									<span>{{ !empty($models->createdBy) ? $models->createdBy->name : '' }}<i class="ci_icon-moonfull"></i></span>
									<span class="post_date_inner">{{ $date->format('d M, Y') }}</span>
									<span class="post_category">
										@foreach($models->tags as $model)
											{{ $model->tag }}
										@endforeach
									</span>
								</span>
								<div class="post_padding">
									<p>
										{{ substr($models->content, 0, 300) }}{{ strlen($models->content) > 300 ? '.........' : '' }}
									</p>
								</div>
								<div class="post-readmore">
									<a href="#" class="more-link">Read More</a>
									<p class="post_meta_tags">
										<i class="ci_icon-comment"></i>3
									</p>
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>
			@endforeach
				<section id="blog_pagination" class="clearfix no_padding_bottom">
				<div class="pagination">
					<span class='page-numbers current'>1</span><a class='page-numbers' href='#'>2</a><a class="next page-numbers" href="#"><i class="ci_icon-chevron-right"></i></a>
				</div>
				</section>
			</div>
			<!-- end span9 main-content -->
			<aside class="span3 sidebar sidebar_right">
			<div id="search-3" class="widget widget_search">
				<div class="widget_search">
					<form name="search" id="search" method="get" action="#">
						<input name="search" type="text" placeholder="Search" value="">
						<a class="submit"><i class="ci_icon-search"></i></a>
					</form>
				</div>
			</div>
			<div id="categories-3" class="widget widget_categories">
				<div class="sidebar-widget-heading">
					<h3>Categories</h3>
				</div>
				<ul>
					@foreach(News::listTags() as $tag)
					<li class="cat-item cat-item-73"><a href="{{ url('news/?tag=').$tag }}">{{ $tag }}</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div id="rpwe_widget-3" class="widget rpwe_widget recent-posts-extended">
				<div class="sidebar-widget-heading">
					<h3>POPULAR POSTS</h3>
				</div>
				<div class="rpwe-block">
					<ul class="rpwe-ul">

						<li class="rpwe-li rpwe-clearfix">
							<a href="#" rel="bookmark">
								<img class="rpwe-alignleft rpwe-thumb" src="{{ asset('assets/upload/portfolio7-70x70.jpg') }}" alt="Our PSD has the highest quality on ThemeForest">
							</a>
							<h3 class="rpwe-title">
								<a href="" title="Permalink to Our PSD has the highest quality on ThemeForest" rel="bookmark">Our PSD has the highest quality on ThemeForest</a>
							</h3>

							<time  class="rpwe-time published" ">October 1, 2013</time>
						</li>

						<li class="rpwe-li rpwe-clearfix">
							<a href="#" rel="bookmark">
								<img class="rpwe-alignleft rpwe-thumb" src="{{ asset('assets/upload/portfolio12-70x70.jpg') }}" alt="The best quality on the marketplace">
							</a>
							<h3 class="rpwe-title">
								<a href="#" title="Permalink to The best quality on the marketplace" rel="bookmark">The best quality on the marketplace</a>
							</h3>
							<time  class="rpwe-time published">August 28, 2013</time>
						</li>
					</ul>
				</div>

			</div>

			<div id="tag_cloud-3" class="widget widget_tag_cloud">
				<div class="sidebar-widget-heading">
					<h3>TAGS</h3>
				</div>
				<div class="tagcloud">
					@foreach(News::listTags() as $tag)
					<a href="{{ url('news/?tag=').$tag }}" style='font-size: 22pt;'>{{ $tag }}</a>
					@endforeach
				</div>
			</div>

			<div id="flickr-stream-2" class="widget flickr-stream">
				<div class="sidebar-widget-heading">
					<h3>FLICKR FEED</h3>
				</div>
				<div class='flickr_stream clearfix'>
					<a class="link-middle-image" href="#" target='_blank'>
					<img src="{{  asset('assets/upload/envato1.jpg') }}" alt="">
					</a>
					<a class="link-middle-image" href="#" target='_blank'>
					<img src="{{  asset('assets/upload/envato2.jpg') }}" alt="">
					</a>
					<a class="link-middle-image" href="#" target='_blank'>
					<img src="{{  asset('assets/upload/envato3.jpg') }}" alt="">
					</a>
					<a class="link-middle-image" href="#" target='_blank'>
					<img src="{{  asset('assets/upload/envato4.jpg') }}" alt="">
					</a>
					<a class="link-middle-image" href="#" target='_blank'>
					<img src="{{  asset('assets/upload/envato5.jpg') }}" alt="">
					</a>
					<a class="link-middle-image" href="#" target='_blank'>
					<img src="{{  asset('assets/upload/envato6.jpg') }}" alt="">
					</a>
				</div>
			</div>
			<div id="text-6" class="widget widget_text">
				<div class="sidebar-widget-heading">
					<h3>LATEST TWEETS</h3>
				</div>
				<div class="textwidget">
					<div class="ab-tweet-scroller " data-fx="fade" data-play="true" data-easing="linear" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
						<ul class="ab-tweet-scroller-inner">
							<li class="ab-tweet-item"><a class="ab-tweet-username" href="https://twitter.com/toxicus88" target="_blank">toxicus88</a><a class="ab-tweet-date" href="https://twitter.com/toxicus88" target="_blank">about 2 months ago</a>
							<div class="ab-tweet-text">
								Long expected <a href="#" target="_blank">#html</a> theme Salamat is finally out. Many cool features, unlimited layouts  <a href="#" target="_blank">http://t.co/PiEsmgXuTL</a>
							</div>
							</li>
							<li class="ab-tweet-item"><a class="ab-tweet-username" href="https://twitter.com/toxicus88" target="_blank">toxicus88</a><a class="ab-tweet-date" href="https://twitter.com/toxicus88" target="_blank">about 2 months ago</a>
							<div class="ab-tweet-text">
								Long expected <a href="#" target="_blank">#html</a> theme Salamat is finally out. Many cool features, unlimited layouts  <a href="#" target="_blank">http://t.co/PiEsmgXuTL</a>
							</div>
							</li>
						</ul>
						<div class="ab-tweet-navigation">
							<a href="#" class="ab-tweet-prev">&lt;</a><a href="#" class="ab-tweet-next">&gt;</a>
						</div>
					</div>
				</div>
			</div>
			</aside>
			<!-- end span3 sidebar -->
		</div>
		<!-- end row -->
	</div>
</section>
@endsection

