<?php

class PostTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('posts')->delete();

		// Default Post
		Post::create(array(
				'category_id' => 1,
				'title' => 'Welcome L4StartKit',
				'slug' => 'welcome-l4startkit',
				'description' => 'start kit default post',
				'content' => "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.",
				'status' => 'publish'
			));
	}
}