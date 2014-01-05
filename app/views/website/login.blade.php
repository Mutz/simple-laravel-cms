@extends('website.layouts.login')

@section('stylesheets')
  @parent
  {{ HTML::style('css/compiled/login.css') }}
@stop  

@section('content')
	<div class="container">
	    <div class="row">
			<div class="col-md-4 col-md-offset-4">
	    		<div class="panel-login">
				  	<div class="panel-heading">
				  		<h2 class="text-center">{{ link_to('/','Casa de Pedra',array('class'=>'login-brand'))}}</h2>
				    	<h4 class="text-center">{{trans('general.login')}}</h4>
				 	</div>
				  	<div class="panel-body">
		           {{ Form::open(array('url' => 'login')) }}
			    	  	<div class="form-group">
			                {{ Form::text('email', '', array('type'=>'email', 'class'=>'form-control', 'placeholder'=>trans('general.email'))); }}
			    		</div>

		                <div class="form-group">
		                	{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>trans('general.password'))); }}</div>
		                <div class="action">
		                    <button class="btn btn-primary btn-block">{{trans('general.login')}}</button>
		                </div>
		            {{ Form::close() }}
				    </div>
				</div>
			</div>
		</div>
	</div>
@stop