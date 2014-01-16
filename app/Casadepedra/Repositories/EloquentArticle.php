<?php namespace Casadepedra\Repositories;

use Casadepedra\Interfaces\ArticleInterface;
use Article;
use Str;

class EloquentArticle implements ArticleInterface
{
	public function all()
	{
		return Article::all();
	}
	
	public function find($id)
	{
		return Article::find($id);
	}
	
	public function getAllByCategory($category_id)
	{
		return Article::where("category_id",'=',$category_id)->get();
	}
	
	public function getBySlug($category_slug,$article_slug)
	{
        return Article::with(array(
                                'category'=>function($query) use ($category_slug){
                                                $query->where('slug','=',$category_slug);
                                            }))
                        ->where("slug",'=',$article_slug)
                        ->first();
	}
	
	public function create($data)
	{
		if (strlen($data['slug'])==0) {
			$data['slug'] = Str::slug($data['title']);
		};
		return Article::create($data);
	}
	
	public function update($data, $id)
	{
		if (strlen($data['slug'])==0) {
			$data['slug'] = Str::slug($data['title']);
		};
		$article = Article::find($id);
		$article->update($data);

		return $article;
	}

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
    }

    // public function updateUniques($id)
    // {

    //     $article = Article::find($id);
    //     $article->updateUniques();
    // }
}