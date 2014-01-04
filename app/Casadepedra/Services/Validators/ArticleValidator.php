<?php namespace Casadepedra\Services\Validators;

class ArticleValidator extends Validator {

	// public static $rules = array(
	//         'title' => 'required',
	//         // 'user_id' => 'required|exists:users,id', // Assumes db connection
	//         // 'status_id' => 'required|exists:statuses,id', // Assumes db connection
	//         'body' => 'required',
	//         // 'slug' => 'unique:articles,slug,4',
	//         // 'slug' => 'unique'

	// 	);
	public static $rules;
	
	public function setCreateRules()
	{
		self::$rules = array(
	        'title' => 'required',
	        // 'user_id' => 'required|exists:users,id', // Assumes db connection
	        // 'status_id' => 'required|exists:statuses,id', // Assumes db connection
	        'body' => 'required',
	        'slug' => 'required, unique:articles,slug',

		);
	}

	public function setEditRules($id)
	{
		self::$rules = array(
	        'title' => 'required',
	        'body' => 'required',
	        'slug' => 'unique:articles,slug,' . $id,

		);
	}

	// public function getRules()
	// {
	// 	return self::$rules;
	// }

	
}