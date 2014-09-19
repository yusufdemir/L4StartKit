<?php

class TagTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('tags')->delete();

		// tags
		Tag::create(array(
				'name' => 'L4StartKit',
				'slug' => 'l4startkit'
			));
	}
}