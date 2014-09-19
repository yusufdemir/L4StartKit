<?php

class PostTagTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('post_tag')->delete();

		// pivot tag
		PostTag::create(array(
				'tag_id' => 1,
				'post_id' => 1
			));
	}
}