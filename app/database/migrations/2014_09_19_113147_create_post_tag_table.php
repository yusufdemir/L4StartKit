<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTagTable extends Migration {

	public function up()
	{
		Schema::create('post_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('tag_id')->unsigned()->index();
			$table->tinyInteger('post_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('post_tag');
	}
}