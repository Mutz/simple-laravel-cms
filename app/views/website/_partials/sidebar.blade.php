<!-- <h4>About</h4> -->
<ul class="side-menu">
	@foreach($articles_in_category as $article)
		<li>{{link_to($category_slug . '/' . $article->slug, $article->title)}}</li>
	@endforeach
</ul>
