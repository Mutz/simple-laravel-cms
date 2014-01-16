@extends('website.layouts.master')

@section('page_title')
    {{$category_title}}
@stop


@section('body_class')
	class="inner-page"
@stop

@section('content')
	<section id="inner-page-header">
		<div class="row">
			<div class="col-md-12">
		        <h1  class="mg-b-big text-center">{{$category_title}}</h1>
			</div>
		</div>
	</section>
	<div class="container main categories">
	    <div class="row masonry-wrapper ">
	    	<div class="col-md-12 box article">
				@foreach($articles_in_category as $article)
					<article class="category-page-excerpt">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h2>{{link_to($category_slug . '/' . $article->slug, $article->title)}}</h2>
								</div>
							</div>
                            <div class="row line visible-md visible-lg">
                                <div class="col-md-12"><span class="spot"></span></div>
                            </div><!--End row -->
							<div class="row">
								<div class="col-md-12">
									<div class="excerpt">{{$article->excerpt}}</div>
									<p>{{link_to($category_slug . '/' . $article->slug, trans(''))}}</p>
								</div>
							</div>
						</div>
					</article>
				@endforeach
	    	</div>
	    </div>
	</div>
@stop    