<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /post
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts=Post::paginate(3);
		return View::make('admin.posts.post-list',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /post/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /post
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'title'=>'required',
			'content'=>'required',
			//'type'=>'required|in:post,page'
			);
		$messages=array(
			'title.required'	=>'Başlık Girilmemiş',
			'content.required'	=>'İçerik Boş Geçilemez',
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('notification','error');
			return Redirect::back()->withErrors($validator)->withInput();
		}else{			
			//Cache::flush();
			Session::flash('notification','full');
			return Redirect::to('/admin/post/');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /post/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('admin.posts.post-edit',compact('id'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules=array(
			'title'=>'required',
			'content'=>'required',
			//'type'=>'required|in:post,page'
			);
		$messages=array(
			'title.required'	=>'Başlık Girilmemiş',
			'content.required'	=>'İçerik Boş Geçilemez',
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails()) {
			Session::flash('message',array('type'=>'error','text'=>'Update Error'));
			return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$post=Post::find($id);
			$post->title=Input::get('title');
			$post->content=Input::get('content');
			$post->status=	Input::get('status');
			$post->save();
			//Cache::flush();
			Session::flash('message',array('type'=>'success','text'=>'Update Success'));
			return Redirect::back();
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}