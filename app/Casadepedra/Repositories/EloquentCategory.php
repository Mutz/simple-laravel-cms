<?php namespace Casadepedra\Repositories;

use Casadepedra\Interfaces\CategoryInterface;
use Category;

class EloquentCategory implements CategoryInterface
{
	public function all()
	{
		return Category::all();
	}
	
	public function find($id)
	{
		return Category::find($id);
	}
	
	public function create($data)
	{
		return Category::create($data);
	}
	
	public function update($data, $id)
	{
		$category = Category::find($id);
		$category->update($data);
		return $category;
	}

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
    }

    public function getBySlug($category_slug)
    {
        $category = Category::where('slug','=',$category_slug)
        					->first();
        return $category;
    }

    public function getArticlesByCategorySlug($category_slug, $number_of_articles =10)
    {
        $articles_in_category = Category::with('articles')
                                        ->where('slug','=',$category_slug)
                                        ->first()
                                        ->articles()
                                        ->take($number_of_articles)
        								->get(array('title','slug','excerpt'));
        return $articles_in_category;
    }


    public function getFullArticlesByCategorySlug($category_slug)
    {
        $articles_in_category = Category::with('articles')
        								->where('slug','=',$category_slug)
        								->first()
        								->articles;
        return $articles_in_category;
    }
}