<?php

class Post extends Eloquent {

	protected $table = 'posts';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function category()
	{
		return $this->belongsTo('Category', 'category_id');
	}

	public function tags()
	{
		return $this->belongsToMany('PostTag');
	}

	public function setTitleAttribute($title)
	{
		$date=date('Y-m-d H:i');
    	$this->attributes['title'] = $title;
    	$this->attributes['slug'] = Str::slug($title.$date);
	}

}