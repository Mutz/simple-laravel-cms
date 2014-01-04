<?php

class Category extends Eloquent {
	protected $table = 'categories';
	protected $guarded = array();

	public static $rules = array();

	public function articles()
    {
        return $this->hasMany('Article');
    }
}
