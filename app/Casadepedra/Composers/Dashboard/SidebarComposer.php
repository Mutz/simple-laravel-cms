<?php namespace Casadepedra\Composers\Dashboard;

use Casadepedra\Interfaces\CategoryInterface;

class SidebarComposer {

	protected $category;

	public function __construct(CategoryInterface $category)
	{
		$this->category = $category;
	}

	public function compose($view)
	{
		$view->with('menus',$this->category->all());
	}
}