<!DOCTYPE html>
<html>

  @include('_partials.head')

  @yield('content')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @section('javascripts')
      {{ HTML::script('assets/javascript/backend.js') }}

      {{--  @if($chosen_language <> 'en') --}}
      {{-- HTML::script('js/localization/messages_'. $chosen_language .'.js') --}}
      {{--  @endif --}}
      {{-- HTML::script('js/theme.js') --}}
      <!-- Include this according to localization -->
      {{-- HTML::script('js/localization/messages_pt_PT.js') --}}

    @show
  </body>
</html>
