<?php

return array(

/*************************************
	EDIT PAGE
**************************************/
	'title' => 'Yazılar',

	'single' => 'Yazı',

	'model' => 'Post',

	'form_width' => 800,

	'sort' => array(
	    'field' => 'id',
	    'direction' => 'desc',
	),

/*************************************
	EDIT COLUMNS
**************************************/

	'columns' => array(
	    'title' => array(
	        'title' => 'Başlık'
	    ),
	    'created_at' => array(
	        'title' => 'Oluşturma Tarihi',
	        'output' => '(:value)',
	    ),
	),

/*************************************
	EDIT FIELDS
**************************************/
	'edit_fields' => array(
	    'title' => array(
	        'title' => 'Title',
	        'type' => 'text'
	    ),
		'category' => array(
		    'type' => 'relationship',
		    'title' => 'Kategori',
		    'name_field' => 'name',
		),
	    'content' => array(
    		'type' => 'wysiwyg',
    		'title' => 'Yazı',
		),
	),
	
/*************************************
	VALIDATIONS
**************************************/
	/*'rules' => array(
	    'title' 	=> 'required',
	    'category' 	=> 'required',
	    'content'	=> 'required',
	)*/
);
