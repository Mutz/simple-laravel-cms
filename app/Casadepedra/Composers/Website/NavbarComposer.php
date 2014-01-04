<?php namespace Casadepedra\Composers\Website;

use Casadepedra\Interfaces\CategoryInterface;

class NavbarComposer {

	protected $category;

	public function __construct(CategoryInterface $category)
	{
		$this->category = $category;
	}

	public function compose($view)
	{
		$categories = $this->category->all();
		$view->with('categories',$categories);
	}
}