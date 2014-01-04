  <!-- <li>{{ HTML::menuLink('articles', '', trans('general.articles') ) }}</li> -->
  @foreach($menus as $menu)
	<li>{{ HTML::menuLink('/dashboard/category/' . $menu->id . '/article', 'fa fa-circle', $menu->title ) }}</li>
  @endforeach