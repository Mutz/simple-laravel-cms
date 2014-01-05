<?php
use Casadepedra\Interfaces\ArticleInterface;
use Casadepedra\Interfaces\CategoryInterface;

class WebsiteController extends BaseController {

	public function __construct(ArticleInterface $article, CategoryInterface $category)
	{
		$this->article = $article;
		$this->category = $category;
	}
	public function home()
	{
        // $news = $this->category->getArticlesExcerptsByCategorySlug('novidades');
		$news = $this->category->getArticlesByCategorySlug('novidades',3);
        return View::make('website.home')
        			->with('news',$news);
	}
	public function contact()
	{
		return View::make('website.contact');
	}
	public function login($value='')
	{
        return View::make('website.login');
	}
	public function index($category_slug)
	{
		$category = $this->category->getBySlug($category_slug);
		$articles_in_category = $this->category->getFullArticlesByCategorySlug($category_slug);
        return View::make('website.category-page')
        			->with('articles_in_category',$articles_in_category)
        			->with('category_slug',$category_slug)
        			->with('category_title',$category->title);
	}
	public function article($category_slug, $article_slug)
	{
		$category = $this->category->getBySlug($category_slug);
		$article = $this->article->getBySlug($category->id, $article_slug);
		
		$articles_in_category = $this->category->getArticlesByCategorySlug($category_slug);
        return View::make('website.article-page')
        			->with('articles_in_category',$articles_in_category)
        			->with('article',$article)
        			->with('category_slug',$category_slug)
        			->with('category_title',$category->title);
	}
	public function dashboard()
	{
		return View::make('dashboard.index');
	}

	
}