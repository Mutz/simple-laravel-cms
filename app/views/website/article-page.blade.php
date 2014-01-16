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
	<div class="container main articles mg-t-bg">
	    <div class="row">
	    	<div class="col-md-4 box">
	    		@include('website._partials.sidebar')
	    	</div>
	    	<div class="col-md-8 box article">
	    		<article>
	    			<h2>{{$article->title}}</h2>
	    			<div>{{$article->body}}</div>
	    		</article>
	    	</div>
	    </div>
	</div>
@stop