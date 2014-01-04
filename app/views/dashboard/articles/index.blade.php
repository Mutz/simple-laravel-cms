@extends('dashboard.layouts.master')

@section('page_title')
	Casa de Pedra - {{trans('general.articles')}}
@stop

@section('content')
	<h1>{{$category->title}}</h1>
	<p><span><i>{{trans('article.articles_in_category')}} {{$category->title}}</i></span></p>
	{{link_to('dashboard/category/' .$category->id . '/article/create',trans('general.new'), array('class'=>'btn btn-flat'))}}
	<hr>
	<table class="table table-hover">
	  	<thead>
        	<tr>
            	<th>{{trans('article.title')}}</th>
            	<th>{{trans('article.order')}}</th>
            	<th>{{trans('article.created_at')}}</th>
            	<th>{{trans('article.updated_at')}}</th>
            	<th></th>
          	</tr>
        </thead>
        <tbody>
        	@foreach($articles as $article)
        	<tr class="article-list-item">
        		<td>{{link_to('dashboard/category/'.$category->id.'/article/'.$article->id.'/edit', $article->title, array(1,2))}}</td>
        		<td>{{$article->order}}</td>
        		<td>{{$article->created_at}}</td>
        		<td>{{$article->updated_at}}</td>
        		<td>
					{{Form::open(array(
							// 'class'=>'delete_form';
							'url'=>'dashboard/category/'.$category->id.'/article/'.$article->id,
							'method'=>'DELETE',
							// 'onSubmit'=>'return confirmDelete()',
              // 'id'=>'article_' .$article->id,
              'class'=>'delete-form'
							));}}
							{{Form::button('', array('class'=>'delete-button fa fa-trash-o','type'=>'submit'))}}
					{{Form::close()}}
    			{{--HTML::iconLink('dashboard/category/'.$category->id.'/article/'.$article->id, '', array('class'=>'delete-icon fa fa-trash-o','data-method'=>'DELETE','data-article'=>$article_id))--}}
        		</td>
        	</tr>
        	@endforeach
        </tbody>
	</table>
<div class="modal fade" id="delete_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">{{trans('general.are_you_sure')}}</h4>
      </div>
      
 	  <div class="modal-body">
        <p>{{trans('article.are_you_sure')}}</p>
      </div>
      <div class="modal-footer">
      {{Form::button(trans('general.no'), array('class' =>'btn btn-default','data-dismiss'=>'modal'))}}
      {{Form::button(trans('article.delete'), array('id'=>'delete_article', 'class' =>'btn btn-primary','onClick'=> 'return Delete()'))}}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
@stop

@section('scripts')
	@parent
  <script>
  var confirmationMessage = '{{trans('article.are_you_sure')}}';
  </script>
@stop