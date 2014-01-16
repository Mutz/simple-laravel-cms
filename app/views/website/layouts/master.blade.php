@include('website._partials.head')

<body data-spy="scroll" data-target="#main-nav" data-offset="200" @yield('body_class')>
	@include('website._partials.navbar_home')

    @yield('content')
	
    @include('website._partials.footer')

    @section('javascript')
    	{{HTML::script(asset('assets/javascript/frontend.js'))}}
    @show

</body>
</html>