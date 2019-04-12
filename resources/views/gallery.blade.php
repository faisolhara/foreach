@extends('layouts.master')

<?php 
use App\Model\Gallery;
?>

@section('title', 'Services')

@section('content')

<section class="dnd_section_dd">
	<header>
		<div class="dnd_container">
			<h3>Gallery</h3>
			<p>
				Kumpulan foto-foto gallery dan kumpulan desain template yang responsive, awesome dan terkini :
			</p>
		</div>
	</header>	
	<div class="container ">
		<div class="row portfolio_3column portfolio_3column_gallery_style2">
			<div class="portfolio_full_width span12 content ">

				<ul class="portfolio_filter option-set clearfix" data-option-key="filter">
					<li><a href="#filter_http://54be4bac3dfe9" data-option-value="*" class="portfolio_filter_button selected">All</a></li>

                    @foreach(Gallery::listTags() as $tag)
					<li><a href="#filter_54be4bac3dfe9" class="portfolio_filter_button" data-option-value=".{{ $tag }}">{{ $tag }}</a></li>
					@endforeach

				</ul>

				<div class="ABdev_latest_portfolio portfolio_items clearfix">

					@foreach($models as $model)

					<?php $tags = "" ?>
					@foreach($model->gallery_tag()->get() as $tag)
                        <?php $tags = $tags . " " . $tag->tag; 
                        	?>
                    @endforeach
					<div class="portfolio_item portfolio_item_3 {{$tags}}">
						<div class="overlayed">
							<img width="1200" height="715" src="{{ asset($model->media) }}" class="attachment-post-thumbnail wp-post-image" alt="portfolio4"/>
							<a class="overlay fancybox" data-fancybox-group="portfolio" href="{{ asset($model->media) }}">
							<p class="overlay_title">
								{{ $model->title }}
							</p>
							<p class="portfolio_item_tags">
								{{ $model->content }}
							</p>
							</a>
						</div>
					</div>
					@endforeach

				</div>
				
				<!-- <div id="blog_pagination" class="pagination pagination-centered clearfix">
					<span class='page-numbers current'>1</span>
					<a class='page-numbers' href='#'>2</a>
					<a class="next page-numbers" href=""><i class="ci_icon-chevron-right"></i></a>
				</div> -->
			</div>
		</div>
	</div>
	
</section>

@endsection

