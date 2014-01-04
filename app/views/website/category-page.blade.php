@extends('website.layouts.master')

@section('page_title')
    {{$category_title}}
@stop


@section('body_class')
	class="inner-page"
@stop

@section('content')
	<div class="container main">
		<div class="row">
			<div class="col-md-12">
		        <h1  class="mg-b-big text-center">{{$category_title}}</h1>
			</div>
		</div>
	    <div class="row">
	    	<div class="col-md-2 box">
	    		@include('website._partials.sidebar')
	    	</div>
	    	<div class="col-md-10 box">
				@foreach($articles_in_category as $article)
					<article class="category-page-excerpt">
						<div class="col-md-6">
							<h2>{{link_to($category_slug . '/' . $article->slug, $article->title)}}</h2>
							<img src="http://placehold.it/450x200" class="img-responsive">
							<p class="excerpt">{{$article->excerpt}}</p>
							<p>{{link_to($category_slug . '/' . $article->slug, trans(''))}}</p>
						</div>
					</article>
				@endforeach
	    	</div>
	    </div>
	</div>
@stop    