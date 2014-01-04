@include('website._partials.head')

<body class="login">

	<div class="wrap">
		@yield('content')
		
		@section('javascripts')
		   	{{HTML::script(asset('assets/javascript/frontend.js'))}}
		@show
	</div>
	
	@include('website._partials.footer')
</body>
</html>