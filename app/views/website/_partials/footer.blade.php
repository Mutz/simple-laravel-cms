        <!-- ==============================================
        FOOTER
        =============================================== --> 
        <footer id="main-footer">
            <div class="container">
            
                <div class="row">
                
                    <div class="col-sm-8 left-col">
                        <h1 class="small-logo">{{trans('general.sitename')}}<br><span>Vale do Capão</span></h1>
			            <ul class="footer-nav">
                            <li>
                              {{link_to('/', trans('general.home'))}}
                            </li>
                            @foreach($categories as $category)
                              <li>{{link_to($category->slug, $category->title)}}</li>
                            @endforeach
			                <li>
			                  {{link_to(url('/').'#contato', trans('general.contact'))}}
			                </li>
			            </ul>

                        <p>&copy;Copyright 2014 / Todos os direitos reservados</p>
                    </div>
                    
                    <div class="col-sm-4 right-col">
                        <h3>Criado por:</h3>
                        <p><a href="http://www.nosnaweb.net" title="Agência Digital Nós Na Web" target="_blank"><small>Agência Digital</small></a> <a href="http://www.nosnaweb.net" title="Agência Digital Nós Na Web" target="_blank"><small>Nós Na Web</small></a></p>
                    </div>
                    
                </div><!-- End row -->
                
            </div><!-- End container -->
            
        </footer><!-- End footer -->
