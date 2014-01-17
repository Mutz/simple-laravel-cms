<?php
use Casadepedra\Interfaces\ArticleInterface;
use Casadepedra\Interfaces\CategoryInterface;
use Casadepedra\Services\Mailers\WebsiteContactMailer;

class WebsiteController extends BaseController {

	public function __construct(ArticleInterface $article, CategoryInterface $category, WebsiteContactMailer $mailer)
	{
		$this->article = $article;
        $this->category = $category;
		$this->mailer = $mailer;

	}
	public function home()
	{
		$news = $this->category->getArticlesByCategorySlug('novidades',6);
        return View::make('website.home')
        			->with('news',$news);
	}
	public function contact()
	{
		return $this->mailer->send(Input::all());
	}
	public function login($value='')
	{
        return View::make('website.login');
	}
	public function index($category_slug)
	{
		$articles_in_category = $this->category->getFullArticlesByCategorySlug($category_slug);
        $category_title = $articles_in_category->first();
        $category_title = $category_title->category->title;

        return View::make('website.category-page')
        			->with('articles_in_category',$articles_in_category)
        			->with('category_slug',$category_slug)
        			->with('category_title',$category_title);
	}
	public function article($category_slug, $article_slug)
	{
		$article = $this->article->getBySlug($category_slug, $article_slug);
        $category_title = $article->category->title;

		$articles_in_category = $this->category->getArticlesByCategorySlug($category_slug);
        return View::make('website.article-page')
        			->with('articles_in_category',$articles_in_category)
        			->with('article',$article)
        			->with('category_slug',$category_slug)
        			->with('category_title',$category_title);
	}
	public function dashboard()
	{
		return View::make('dashboard.index');
	}
}