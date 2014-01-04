<!DOCTYPE html>
<html>

  @include('dashboard._partials.head')
  @include('dashboard._partials.navigation')


  <div class="content">
    <div id="pad-wrapper">
	   @yield('content')
    </div>
  </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @section('scripts')
      {{ HTML::script('assets/javascript/backend.js') }}
      {{ HTML::script('assets/javascript/tinymce/tinymce.min.js') }}
      <!--
      Include this according to localization 
      {{ HTML::script('js/localization/messages_pt_PT.js') }}
       -->
    <script>
    $(document).ready(function() {
      tinymce.init({
        theme: "modern",
        file_browser_callback : elFinderBrowser,
        plugins: [
               "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
               "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
               "save table contextmenu directionality emoticons template paste textcolor"
         ],
        selector: ".editor",
        image_advtab: true,
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Imagem esquerda', inline: 'img', styles: {float: 'left',margin:'0 10px 10px 0'}},
        ],
      });   

function elFinderBrowser (field_name, url, type, win) {
  tinymce.activeEditor.windowManager.open({
    file: '/elfinder/tinymce',// use an absolute path!
    title: 'Arquivos',
    width: 900,
    height: 450,
    resizable: 'yes'
  }, {
    setUrl: function (url) {
      win.document.getElementById(field_name).value = url;
    }
  });
  return false;
}
    });
    </script>
    @show
  </body>
</html>
