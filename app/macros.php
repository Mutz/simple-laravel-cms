<?php 
Form::macro('textField',  function($name, $value='', $label, $class='', $required = false) {
    if($required){
      $required='required';
    } else{
      $required='';
    }

    $output = '<div class="field-box">'
            . Form::label($name, $label)
            . '<div class="col-md-7">'
            . Form::text($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label,$required))
            . $errors->first($name,'<div><span class="error">:message</span></div>')
            . '</div>'
          . '</div>';
    
    return $output;
});

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

//Register a macro for a button link
Form::macro('radioAnswer', function($inputName, $value, $label, $required='') {
    $output = '<label class="radio">';
    $output .= '<input type="radio" name="'. $inputName .'" value="'. $value .'" ' . $required . '>';
    $output .= $label;
    $output .= '</label>';
    
    return $output;
});

//Register a macro for a button link
Form::macro('checkboxAnswer', function($inputName, $value, $label, $required) {

    $output = '<label class="checkbox">';
    $output .= '<input type="checkbox" name="'. $inputName .'" value="'. $value .'"' . $required . '>';
    $output .= $label;
    $output .= '</label>';
    
    return $output;
});

Form::macro('textField',  function($name, $value='', $label, $class='', $required = false) {
    if($required){
      $required='required';
    } else{
      $required='';
    }

    $output = '<div class="form-group">'
            . Form::label($name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-md-9">'
            . Form::text($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label,$required))
            . '</div>'
          . '</div>';
    
    return $output;
});

Form::macro('emailField', function($name, $value='', $label, $class='', $required = false) {
    if($required){
      $required='required';
    } else{
      $required='';
    }

    $output = '<div class="form-group">'
            . Form::label($name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-md-9">'
            . Form::email($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label,$required))
            . '</div>'
          . '</div>';
    
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


 ?>

