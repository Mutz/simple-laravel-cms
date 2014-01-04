<?php namespace Casadepedra\Interfaces;

interface ArticleInterface
{
	public function all();
	public function find($id);
	public function getAllByCategory($category_id);
	public function getBySlug($category_id,$article_slug);
	public function create($data);
	public function update($data, $id);
	public function delete($id);
}