@extends('website.layouts.login')

@section('page_title')
	Faça a sua conta no sportbook.com.vc
@stop

@section('content')
    <div class="register-wrapper">
    <div class="row">
    	<div class="col-md-4 align-right left">
    		<img src="{{asset('img/cadastre-se.png')}}" alt="">
    		 <div>{{link_to('/','sportbook.com.vc',array('class'=>'brandname'))}}</div>
    	</div>
    	<div class="col-md-4 ">
				<div class="col-md-10 col-md-offset-1 middle">
					{{ Form::open(array('action' => 'Users@store')) }}
						{{-- Name --}}
						<div class="form-group">
							{{ Form::text('first_name', '', array('class'=>'form-control','placeholder'=>'Nome')); }}
						</div>
						
						{{-- Last Name --}}
						<div class="form-group">
							{{ Form::text('last_name', '', array('class'=>'form-control','placeholder'=>'Sobrenome')); }}
						</div>
						
						{{-- Email --}}
						<div class="form-group">
							{{ Form::text('email', '', array('class'=>'form-control','placeholder'=>'Email')); }}
						</div>
						
						{{-- Password --}}
						<div class="form-group">
							{{ Form::password('password', array('class'=>'form-control','placeholder'=>'Senha')); }}
						</div>
					
						{{-- Confirm Password --}}
						<div class="form-group">
							{{ Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirma a senha')); }}
						</div>
					
						{{-- Group --}}
						<div class="form-group">
							<div class="align-left">{{ Form::label('group_id', 'Categoria'); }}</div>
							<div class="align-left">{{ Form::select('group_id', array('1' => 'Atleta', '2' => 'Tecnico'),NULL,array('class'=>'form-control')); }}</div>
						</div>
					
						{{-- Confirm --}}
						<div class="form-group  align-left">
							<label for="termos" class="choice">{{ Form::checkbox('termos', '1', false, array('class'=>'field login-checkbox','id'=>'termos')); }} Li e concordo com os termos de uso</label>
							
						</div>
					
						<div class="login-actions">
							{{ Form::submit('Entrar',array('class'=>'button btn btn-flat btn-lg btn-block')) }}
						</div>
					
					{{ Form::close() }}</div>
    	</div>
    	<div class="col-md-4">
			<div class="form-group  align-left mg-b-big">
				@include ('_partials.errors')
			</div>
			<div class="align-left mg-b-big">
    			Se você já tem conta, faça login {{link_to('/login','aqui.')}}
			</div>
    		
    	</div>
    </div>
	</div>
@stop
