<?php 

//Register a macro for an icon link
HTML::macro('menuLink', function($link, $icon, $title, $class = '', $dropdown = false)
{     $datatarget = '';
      $caret    = '';
      if ($dropdown){
        $datatarget = 'data-toggle="dropdown"';
        $caret = ' <b class="caret"></b>';
      };
      $output = '<a href="' . $link . '" class="'. $class. '" '. $datatarget .'>'
                  . '<i class="'. $icon .'"></i>'
                  . '<span>'. $title .'</span>'
                  . $caret
                  . '</a>';
      return $output;
});

//Register a macro for a button link
Form::macro('modLink', function($btnText, $href, $attributes = array()) {
    
    $output = '<a href="'. $href .'"';
    
    if (!empty($attributes)) {
        foreach ($attributes as $key => $value) {
            $output .= " $key=\"{$value}\"";
        }
    }
    
    $output .= '>'. $btnText .'</a>';
    
    return $output;
});


HTML::macro('imageLink',  function($url, $title = null, $attributes = array(), $image = null, $secure = null) {
    if ($url<>'void'){
      $url = url($url);
    } else {
      $url = 'javascript:void(0)';
    }

    if (is_null($title) or $title === false) $title = $url;

    return '<a href="'.$url.'"'.HTML::attributes($attributes).'>'.HTML::image($image) . ' ' . HTML::entities($title).'</a>';

});
HTML::macro('iconLink',  function($url, $title = null, $attributes = array(), $icon = null, $secure = null) {
    if ($url<>'void'){
      $url = url($url);
    } else {
      $url = 'javascript:void(0)';
    }

    if (is_null($title) or $title === false) $title = $url;

    return '<a href="'.$url.'"'.HTML::attributes($attributes).'><i class="fa '. $icon .'"></i> '. HTML::entities($title).'</a>';

});

/*
|--------------------------------------------------------------------------
| Delete form macro
|--------------------------------------------------------------------------
|
| This macro creates a form with only a submit button. 
| We'll use it to generate forms that will post to a certain url with the DELETE method,
| following REST principles.
|
*/
Form::macro('delete',function($url, $button_label='Delete',$form_parameters = array(),$button_options=array()){

    if(empty($form_parameters)){
        $form_parameters = array(
            'method'=>'DELETE',
            'class' =>'delete-form',
            'url'   =>$url
            );
    }else{
        $form_parameters['url'] = $url;
        $form_parameters['method'] = 'DELETE';
    };

  return Form::open($form_parameters)
      . Form::button($button_label, $button_options)
      . Form::close();
});
 ?>

