@extends('website.layouts.master')

@section('page_title')
	Casa de Pedra - Vale do Capão, Chapada Diamantina
@stop

{section('navbar')
	@include('website._partials.navbar_home')
@stop

@section('content')
    <section id="feature_slider" class="lol">
        <article class="slide" id="hospedagem" style="background: url('assets/img/slide1.jpg') repeat-x top center;">
            <div class="info">
                <h2>Hospedagem </h2>
                <!-- <a href="features.html">Conheça os quartos</a> -->
                {{link_to('hospedagem','Conheça os quartos')}}
            </div>
        </article>
        <article class="slide" id="cultura" style="background: url('assets/img/slide3.jpg') repeat-x top center;">
            <div class="info">
                <h2>Cultura afro-brasileira</h2>
            </div>
        </article>
        <article class="slide" id="capoeira" style="background: url('assets/img/slide2.jpg') repeat-x top center;">
            <div class="info">
                <h2>Capoeira Angola</h2>
            </div>
        </article>
    </section>

<div class="content-area">
		<section id="quem-somos" class="section wrapper mg-t-bg mg-b-bg">
			<div class="container">
				<div class="col-md-12 text-center">
					<h2>Quem somos?</h2>
					<hr>
				</div>
				<div class="col-md-12 text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. </p>
				</div>
	        </div>
		</section>
	
		<section id="" class="section" class="section mg-t-bg">
			<div class="container">
				<div class="col-md-4 text-center">
					<h2>Hospedagem</h2>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molesti consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla </p>
					{{link_to('/hospedagem','Conheça mais',array('class'=>'btn btn-large btn-block btn-flat'))}}
				</div>
				<div class="col-md-4 text-center">
					<h2>Capoeira</h2>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molesti consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla </p>
					{{link_to('/capoeira','Conheça mais',array('class'=>'btn btn-large btn-block btn-flat'))}}
				</div>
				<div class="col-md-4 text-center">
					<h2>Cultura</h2>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla dolores tempore eius tempora ab rem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molesti consectetur adipisicing elit. Esse, quas unde ipsam repellendus ullam facere molestiae aspernatur nemo quaerat cupiditate magni officia nulla </p>
					{{link_to('/casa-de-pedra','Conheça mais',array('class'=>'btn btn-large btn-block btn-flat'))}}
				</div>
	        </div>
		</section>
	
		<section id="novidades" class="section mg-t-bg mg-b-bg">
			<div class="container">
				<div class="col-md-12">
					<h2>Novidades</h2>
					<hr>
				</div>
				<div class="col-md-12">
					@foreach($news as $nw)
						<div class="col-md-4">
							<h4>{{link_to('/novidades/'.$nw->slug,$nw->title)}}</h4>
							<p>{{$nw->excerpt}}</p>
							<div>{{link_to('/novidades/'.$nw->slug,'Leia mais...')}}</div>
						</div>
					@endforeach
				</div>
	        </div>
		</section>
	</div>
@stop

@section('javascript')
	<script>var headerShrinkBreakpoint = 640;</script>
	@parent
	<script>
		// Flex
    if ($(".flexslider").length) {
        $('.flexslider').flexslider();
    }
	</script>
@stop