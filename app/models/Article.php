<?php
class Article extends Eloquent {
	protected $guarded = array();

	public function category()
	{
		return $this->belongsTo('Category');
	}
}
