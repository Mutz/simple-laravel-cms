@extends('website.layouts.master')

@section('page_title')
	{{$title}}
@stop

@section('content')
	<section class="section inner">
		<div class="container">
			<div class="row  mg-t-bg mg-b-bg">
				<div class="col-md-12  mg-t-bg mg-b-bg">
					<h1>{{$title}}</h1>
					<hr>
				</div>
			</div>
			<div class="row mg-t-bg">
				<div class="col-md-12">
	                <h2>{{$message}}</h2>
				</div>
			</div>
			<div class="row mg-t-bg">
				<div class="col-md-12 text-center">
	                {{$back}}
				</div>
			</div>
		</div>
	</section>
@stop