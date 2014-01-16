    <!-- ==============================================
    MAIN NAV
    =============================================== -->
    <div id="main-nav" class="navbar navbar-fixed-top">
      <div class="container">
              <div class="navbar-header">
        
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
          
          <!-- ======= LOGO ========-->
          {{HTML::imageLink('#home','',array('class'=>'navbar-brand scrollto', 'id'=>'logo'),asset('assets/img/logo.jpg'))}}
        </div>
        
        <div id="site-nav" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
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
        </div><!--End navbar-collapse -->
        
      </div><!--End container -->
      
    </div><!--End main-nav -->