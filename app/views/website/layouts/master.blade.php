@include('website._partials.head')

<body @yield('body_class')>
<div class="wrap">
	@section('navbar')
		@include('website._partials.navbar_inner')
	@show
	
	@yield('content')
	
</div>
@include('website._partials.footer')

@section('javascript')
	{{HTML::script(asset('assets/javascript/frontend.js'))}}
@show

</body>
</html>