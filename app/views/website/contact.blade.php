@extends('website.layouts.master')

@section('page_title')
	Contato - sportbook.com.vc
@stop

@section('head')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize() {
            var latlng = new google.maps.LatLng(-23.195090,-45.893567);
            var mapOptions = {
                zoom: 17,
                center: latlng,
                mapTypeId: 'satellite',
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);

            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: 'sportbook.com.vc'
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@stop


@section('content')

	<section class="section inner">
		<div id="map-holder">
			<div id="map-canvas" style="width: 100%;height: 300px;"></div>
		</div>
		<div class="container">
			<div class="row mg-t-bg mg-b-bg">
				<div class="col-md-12 mg-t-bg mg-b-bg">
					<h1>Entre em contato</h1>
					<hr>
				</div>
			</div>
			<div class="row mg-t-bg">
				<div class="col-md-4 col-md-offset-2">
					{{ Form::open(array('id'=>'contact_form','class'=>'form-horizontal')) }}
				    
						    <div class="form-group">
						      {{ Form::label('name', 'Nome', array('class' => 'control-label')) }}
						      <div class="controls">
						        {{ Form::text('name', Input::old('name'), array('class' => 'form-control input-large','id'=>'name')) }}
						        {{ $errors->first('name') }}
						      </div>
						    </div>
						    <div class="form-group">
						      {{ Form::label('email', 'Email', array('class' => 'control-label')) }}
						      <div class="controls">
						        {{ Form::text('email', Input::old('email'), array('class' => 'form-control input-large','id'=>'email')) }}
						        {{ $errors->first('email') }}
						      </div>
						    </div>
						    <div class="form-group">
						      {{ Form::label('subject', 'Assunto', array('class' => 'control-label')) }}
						      <div class="controls">
						        {{ Form::text('subject', Input::old('subject'), array('class' => 'form-control input-large','id'=>'subject')) }}
						        {{ $errors->first('subject') }}
						      </div>
						    </div>
						    <div class="form-group">
						      {{ Form::label('message', 'Mensagem', array('class' => 'control-label')) }}
						      <div class="controls">
						        {{ Form::textarea('message', Input::old('message'), array('class' => 'form-control input-large','id'=>'message')) }}
						        {{ $errors->first('message') }}
						      </div>
						    </div>
				    <div class="form-actions">
				      {{ Form::submit('Enviar',array('class'=>'btn btn-flat')) }}
				    </div>


				{{ Form::close() }}
				</div>
				<div class="col-md-4 col-md-offset-1">
					<address>
					  <strong>Casa de pedra</strong><br>
					  Rua dos Gatos<br>
					  Vale do Capão (Caeté-Açu)<br>
					  Palmeiras, Bahia, Brasil<br>
					  <abbr title="Phone">Tel:</abbr> (75) 3344-1313
					</address>
					 
					<address>
					  <strong>Email</strong><br>
					  {{ HTML::mailto('reservas@casadepedra-valedocapao.com.br') }}
					</address>
				</div>
			</div>
		</div>
	</section>
@stop

@section('javascripts')
	@parent
	
	{{ HTML::script('assets/javascript/plugins/jquery.validate.min.js') }}
	{{ HTML::script('assets/javascript/plugins/jquery.validate.localization/messages_pt_BR.js') }}

	<script>
		$(document).ready(function(){
		    $("#contact_form").validate({
		    	rules: {
					name: {
						minlength: 2,
						required: true
					},
					email: {
						minlength: 4,
						required: true,
						email: true
					},
					subject: {
						minlength: 2,
						required: true
					},
					message: {
						minlength: 2,
						required: true
					}
			      },
		    	focusCleanup: false,
				
				wrapper: 'div',
				errorElement: 'span',
				
				highlight: function(element) {
					$(element).parents ('.form-group').removeClass ('success').addClass('error');
				},
				success: function(element) {
					$(element).parents ('.form-group').removeClass ('error').addClass('success');
					$(element).parents ('.controls:not(:has(.clean))').find ('div:last').before ('<div class="clean"></div>');
				},
				errorPlacement: function(error, element) {
					error.appendTo(element.parents ('.controls'));
				}
			});	
		})

	</script>
@stop