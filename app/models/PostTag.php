<?php


class PostTag extends Eloquent {

	protected $table = 'post_tag';
	public $timestamps = false;

	public function posts()
	{
		return $this->belongsTo('Post', 'post_id');
	}

	public function tags()
	{
		return $this->hasOne('Tag');
	}

}