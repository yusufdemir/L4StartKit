<?php


class Tag extends Eloquent {

	protected $table = 'tags';
	public $timestamps = false;

	public function TagToPost()
	{
		return $this->belongsTo('PostTag');
	}

}