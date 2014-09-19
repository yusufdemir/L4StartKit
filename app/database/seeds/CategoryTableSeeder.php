<?php

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('categories')->delete();

		// main category
		Category::create(array(
				'name' => 'main',
				'slug' => 'main',
				'description' => 'default category'
			));
	}
}