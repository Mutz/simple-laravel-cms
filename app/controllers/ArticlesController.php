<?php

use Casadepedra\Interfaces\ArticleInterface;
use Casadepedra\Interfaces\CategoryInterface;
use Casadepedra\Services\Validators\ArticleValidator;

class ArticlesController extends BaseController {


	protected $article;
	protected $category;
	protected $validator;

	public function __construct(ArticleInterface $article, CategoryInterface $category,ArticleValidator $validator)
	{
		$this->article = $article;
		$this->category = $category;
		$this->validator = $validator;
	}

	public function index($category_id)
	{
		$all_articles = $this->article->getAllByCategory($category_id);
		$category = $this->category->find($category_id);
        return View::make('dashboard.articles.index')->withArticles($all_articles)->withCategory($category);
	}

	/**
	 * Show the form for creating a new article.
	 *
	 * @return Response
	 */
	public function create($category_id)
	{ 
		$category = $this->category->find($category_id);
        return View::make('dashboard.articles.create')->withCategory($category);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($category_id)
	{
		$data = array_merge(Input::all(), array('user_id' => 1,'status_id'=>1,'category_id'=>$category_id));
		$data['slug'] = Input::get('slug', Str::slug(Input::get('title')));

		$this->validator->setCreateRules();

		if($this->validator->passes($data) ){
			$article = $this->article->create($data);

			Event::fire('article.update',$article);

			return Redirect::to('dashboard/category/' . $category_id . '/article')
					->withMessage(trans('dashboard.articles.added'))
					->withStatus('OK');
		}
		return Redirect::back()
				->withInput($data)
				->withErrors($this->validator->errors());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('dashboard.articles.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($category_id, $article_id)
	{
		$article = $this->article->find($article_id);
		$category = $this->category->find($category_id);
        return View::make('dashboard.articles.edit')
        			->withArticle($article)
        			->withCategory($category);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($category_id, $article_id)
	{
		$data = array_merge(Input::all(), array('user_id' => 1,'status_id'=>1));
		$this->validator->setEditRules($article_id);

		if($this->validator->passes($data) ){
			$article = $this->article->update($data,$article_id);

			Event::fire('article.update',$article);

			return Redirect::to('dashboard/category/' . $category_id . '/article')
					->withMessage(trans('dashboard.articles.added'))
					->withStatus('OK');
		}

		return Redirect::back()
				->withInput($data)
				->withErrors($this->validator->errors());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($category_id,$article_id)
	{
		$article = $this->article->find($article_id);
		Event::fire('article.update',$article);

		$article->delete();

		return Redirect::to('dashboard/category/' . $category_id . '/article')
				->withMessage(trans('dashboard.articles.added'))
				->withStatus('OK');
	}

}
