	<div class="col-sm-12">
		{{ Former::text('title','Başlık')->state('error')->style('width:100%;') }}
		{{ Former::textarea('content','İçerik')->class('ckeditor') }}
	</div>
	<div class="col-sm-4">
			{{ Former::select('status','Yayın Durumu')->options(array(
					    'publish'  	=> 'Yayında',
					    'draft'  	=> 'Taslak',
					)) }}
	</div>
	<div class="col-sm-4">
		{{ Former::text('taglar','Etiketler')->class('tags')->id('tags')->value('test,asd,2412')->height('150px') }}
	</div>

	<style>
		#tags_tagsinput{
			height: 100px !important;
		}
	</style>