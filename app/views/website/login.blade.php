@extends('website.layouts.login')

@section('page_title')
	Log in - sportbook.com.vc
@stop

@section('content')
    <div class="login-wrapper">
    <img src="{{asset('img/login.png')}}" alt="">
    <!-- <p class="brandname">sportbook.com.vc</p> -->
    <div>{{link_to('/','sportbook.com.vc',array('class'=>'brandname'))}}</div>
        <div class="box">
            <div class="content-wrap row">

			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5 col-xl-2 col-xl-offset-5">

				@include ('_partials.errors')
				
					
				{{ Form::open(array('action' => 'Users@login','role'=>'form')) }}
					{{-- Name --}}
					<div class="form-group">
						{{ Form::text('email', '', array('class'=>'form-control','placeholder'=>'Email')); }}
					</div>
					
					{{-- Password --}}
					<div class="form-group">
						{{ Form::password('password', array('class'=>'form-control','placeholder'=>'Senha')); }}
					</div>
				
					<div class="login-actions">
						{{ Form::submit('Entrar',array('class'=>'button btn btn-flat btn-lg btn-block')) }}
					</div>
				{{ Form::close() }}</div>

			</div>
		</div>
		<div class="mg-b-big">
			{{link_to('/cadastrar','Quero criar a minha conta')}}
			<br>
			<a href="#">Esqueci a senha</a>
		</div>
	</div>
@stop