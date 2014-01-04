@extends('dashboard.layouts.master')

@section('page_title')
	Casa de Pedra - {{trans('general.articles')}}
@stop

@section('content')
	<div class="create_article">
		<div class="row">
			<div class="col-md-8 col-lg-6">
				<h1>{{trans('article.add_new')}} '{{$category->title}}'</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-lg-8">
				{{Form::open(array(
						'url'=>'dashboard/category/'.$category->id.'/article',
						'method'=>'POST',
						'onSubmit'=>'return postForm()'
						));}}
					@include('dashboard.articles._partials.form')
				{{Form::close()}}
			</div>
		</div>
	</div>
@stop

@section('scripts')
	@parent()
@stop	
