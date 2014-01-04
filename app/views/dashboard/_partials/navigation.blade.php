    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">{{Lang::get('application.togle_navigation')}}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to('/dashboard',trans('general.dashboard'),array('class'=>'navbar-brand'))}}
        </div>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            @include('dashboard._partials.sidebar')
        </ul>
    </div>
    <!-- end sidebar -->
