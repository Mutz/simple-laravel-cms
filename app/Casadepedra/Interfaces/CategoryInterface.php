<?php namespace Casadepedra\Interfaces;

interface CategoryInterface
{
	public function all();
	public function find($id);
	public function create($data);
	public function update($data, $id);
	public function delete($id);
	public function getBySlug($category_slug);
	public function getArticlesByCategorySlug($category_slug);
	public function getFullArticlesByCategorySlug($category_slug);
}