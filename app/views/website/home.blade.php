@extends('website.layouts.master')

@section('page_title')
	Casa de Pedra - Vale do Capão, Chapada Diamantina
@stop

{section('navbar')
	@include('website._partials.navbar_home')
@stop

@section('content')
        <!-- ==============================================
        HEADER
        =============================================== -->
        <header id="home" class="jumbotron">
        
            <div class="container">
            
                <div class="message-box clearfix text-center">
                
                    <h1>{{trans('general.sitename')}}</h1>
                    
                </div><!--End message-box -->
                
            </div><!--End container -->
            
        </header><!--End header -->

        <!-- ==============================================
        NEWS
        =============================================== -->
        <section id="quem-somos">
        
            <div class="container">
            
                <h1 class="section-title scrollimation scale-in">Quem <span>Somos</span></h1>
                
                <div class="row quem-somos scrollimation fade-left">
                    <div class="col-md-12 text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, eos, aliquam, fugit, vitae ipsum eveniet blanditiis perspiciatis magnam cupiditate iure dolore laborum culpa deserunt nihil labore architecto perferendis maiores earum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, eos, aliquam, fugit, vitae ipsum eveniet blanditiis perspiciatis magnam cupiditate iure dolore laborum culpa deserunt nihil labore architecto perferendis maiores earum.</p>
                    </div>
                </div><!--End row (top) -->

                <div class="row quem-somos scrollimation fade-left">
                    <div class="col-md-4 text-center">
                        {{link_to('/hospedagem','Hospedagem',array('class'=>'icon'))}}
                    </div>
                    <div class="col-md-4 text-center">
                        {{link_to('/capoeira','Capoeira',array('class'=>'icon'))}}
                    </div>
                    <div class="col-md-4 text-center">
                        {{link_to('/casa-de-pedra','Casa de Pedra',array('class'=>'icon'))}}
                    </div>
                </div><!--End row (top) -->
                
            </div><!--End container -->
            
        </section><!--End news section-->

        <!-- ==============================================
        COMO CHEGAR
        =============================================== -->     
        <section id="como-chegar">
        
            <div class="container">
            
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 scrollimation fade-right">
                        <img class="img-responsive img-circle img-center" src="assets/img/mapa.png" alt="">
                    </div>
                    <div class="col-sm-6 col-sm-offset-1 scrollimation fade-left">
                        <h1>Como chegar</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, mollitia labore minima iste deleniti repellendus ipsam enim qui consectetur natus illum praesentium exercitationem. Aliquid, libero doloremque autem deserunt consequatur veniam?</p>
                        <a href="#portfolio" class="btn btn-theme transparent scrollto">Mais...</a>
                    </div>
                </div><!--End row -->
                
            </div><!--End container -->
            
        </section><!--End como-chegar section -->


        <!-- ==============================================
        NEWS
        =============================================== -->
        <section id="news">
        
            <div class="container">
            
                <h1 class="section-title scrollimation scale-in"><span>Novidades</span></h1>
                
                <div class="row scrollimation fade-left">
                    @foreach($news as $nw)
                        <div class="col-md-4 news">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>{{link_to('/novidades/'.$nw->slug,$nw->title)}}</h2>
                                    <div>{{$nw->excerpt}}</div>
                                </div>
                            </div>
                            <div class="row line visible-md visible-lg">
                                <div class="col-md-12"><span class="spot"></span></div>
                            </div><!--End row -->
                            <div class="row visible-md visible-lg">
                                <div class="col-md-12 text-center">{{link_to('/novidades/'.$nw->slug,'Leia mais...')}}</div>
                            </div><!--End row -->
                        </div>
                    @endforeach                                
                </div><!--End row (top) -->
                
            </div><!--End container -->
            
        </section><!--End news section-->

        <!-- ==============================================
        CONTACT
        =============================================== --> 
        <section  id="contato">
        
            <div class="container">
            
                <h1 class="section-title scrollimation scale-in">Entre em <span>contato</span></h1>
                
                <div class="row">
                
                    <div class="col-sm-5 contact-info scrollimation fade-right">
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
                        
                        <address>
                            Casa de Pedra<br>
                            Rua dos Gatos<br>
                            Vale do Capão, Palmeiras, Bahia<br>
                            (75) 3344 - 1313
                        </address>
                        
                        <ul class="socials">
                            <li>{{HTML::iconLink('#','',array('title'=>trans('messages.follow_us_fb')),'fa-facebook')}}</li>
                            <li>{{HTML::iconLink('#','',array('title'=>trans('messages.follow_us_tw')),'fa-twitter')}}</li>
                            <li>{{HTML::iconLink('/contato','',array('title'=>trans('messages.follow_us_gp')),'fa-google-plus')}}</li>

                        </ul>
                        
                    </div>
                  
<!--                     <form id="contact-form" class="col-sm-7 scrollimation fade-left" action="http://q-themes.net/themes/designr/contact.php" method="post" novalidate>
 -->                    {{Form::open(array('url'=>'/contato','id'=>'contact-form','class'=>'col-sm-7 scrollimation fade-left','novalidate'))}}    
                        <div class="form-group">
                          <label class="control-label" for="contact-name">Nome</label>
                          <div class="controls">
                            <i class="fa fa-user"></i>
                            <input id="contact-name" name="nome" placeholder="Nome" class="form-control input-lg requiredField" type="text" data-error-empty="Por favor, preencha o nome">
                          </div>
                        </div><!-- End name input -->
                        
                        <div class="form-group">
                          <label class="control-label" for="contact-mail">Email</label>
                          <div class=" controls">
                            <i class="fa fa-envelope"></i>
                            <input id="contact-mail" name="email" placeholder="Responder à" class="form-control input-lg requiredField" type="email" data-error-empty="Por favor, preencha o seu email" data-error-invalid="Email invalido">
                          </div>
                        </div><!-- End email input -->
                        
                        <div class="form-group">
                          <label class="control-label" for="contact-message">Mensagem</label>
                            <div class="controls">
                                <i class="fa fa-comment"></i>
                                <textarea id="contact-message" name="mensagem"  placeholder="Quero saber..." class="form-control input-lg requiredField" rows="5" data-error-empty="Por favor, escreva uma mensagem"></textarea>
                            </div>
                        </div><!-- End textarea -->
                        
                        <p><button name="submit" type="submit" class="btn btn-theme btn-lg" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-location-arrow"></i>Enviar</button></p>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        
                    {{Form::close()}}<!-- End contact-form -->
                  
                </div><!-- End row -->
                
            </div><!-- End container -->
            
        </section><!-- End contact section -->
        
@stop

@section('javascript')
	@parent
    <script>
      /*============================================
      Backstretch Images
      ==============================================*/
      // $.backstretch('assets/img/slide1.jpg');
      $.backstretch([
        "assets/img/slide1.jpg",
        "assets/img/slide2.jpg",
        "assets/img/slide3.jpg"    
      ], {duration: 4500, fade: 750});

      $('body').append('<img class="preload-image" src="assets/contact-bg.png" style="display:none;"/>');

      $('#como-chegar').waypoint(function(direction){
      
        if($('.preload-image').length){$('.preload-image').remove();}
        
        $('.backstretch').remove();
      
        if (direction=='down'){
          $.backstretch('assets/contact-bg.png');
        }else{
          $.backstretch([
            "assets/img/slide1.jpg",
            "assets/img/slide2.jpg",
            "assets/img/slide3.jpg"    
          ], {duration: 4500, fade: 750});
        }
      });
    </script>    
@stop