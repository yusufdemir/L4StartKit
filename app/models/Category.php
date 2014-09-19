<?php

class Category extends Eloquent {

	protected $table = 'categories';
	public $timestamps = false;

	public function posts()
	{
		return $this->hasMany('Post');
	}

}