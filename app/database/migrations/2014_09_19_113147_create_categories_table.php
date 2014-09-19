<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('slug', 255)->unique();
			$table->string('description', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}