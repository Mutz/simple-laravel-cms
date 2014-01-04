<div class="form-group">
	{{Form::label('title', trans('article.title'))}}
	{{Form::input('text', 'title', NULL, array('class'=>'form-control'))}}
	<p class="error"><small>{{$errors->first('title')}}</small></p>
</div>
<div class="form-group">
	{{Form::label('slug', trans('article.slug'))}}
	{{Form::input('text', 'slug', NULL, array('class'=>'form-control'))}}
	<p class="error"><small>{{$errors->first('slug')}}</small></p>
</div>
<div class="form-group">
	{{Form::label('body', trans('article.body'))}}
	{{Form::textarea('body', NULL, array('class'=>'editor form-control'))}}
	<p class="error"><small>{{$errors->first('body')}}</small></p>
</div>
<div class="form-group">
	{{Form::label('excerpt', trans('article.excerpt'))}}
	{{Form::textarea('excerpt', NULL, array('class'=>'editor form-control'))}}
	<p class="error"><small>{{$errors->first('excerpt')}}</small></p>
</div>
{{link_to('dashboard/category/'.$category->id.'/article', trans('general.cancel'), array('class'=>'btn btn-flat warning'))}} 
{{Form::submit(trans('general.save'),array('class'=>'btn btn-flat'))}}
