<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded!');

		$this->call('PostTableSeeder');
		$this->command->info('Post table seeded!');

		$this->call('PostTagTableSeeder');
		$this->command->info('PostTag table seeded!');

		$this->call('TagTableSeeder');
		$this->command->info('Tag table seeded!');
	}
}