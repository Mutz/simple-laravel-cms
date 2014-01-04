    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnav">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            {{HTML::imageLink('/','',array('class'=>'navbar-brand', 'id'=>'logo'),asset('assets/img/logo.jpg'))}}
          </div>
          
          <div class="navbar-collapse collapse pull-right" id="topnav">
            <ul class="nav navbar-nav">
                <li>{{link_to('/', trans('general.home'))}}</li>
                @foreach($categories as $category)
                  <li>{{link_to($category->slug, $category->title)}}</li>
                @endforeach
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>