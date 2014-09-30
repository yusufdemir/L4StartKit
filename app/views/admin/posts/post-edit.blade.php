@extends('admin.layouts.master')

	@section('page-header')
		<h1>Dashboard<small>Admin - Beta</small></h1>
	@stop

   @section('breadcrumb')
         <div class="row">
            <div class="col-md-12">
               <ol class="breadcrumb">
                  <li>
                     <a href="#">
                        Dashboard
                     </a>
                  </li>
                  <li>
                     <a href="{{ URL::to('/admin/post') }}">
                        Posts
                     </a>
                  </li>
                  <li class="active">
                     Edit Post
                  </li>
               </ol>
            </div>
         </div>
   @stop
   
   @section('header-code')

		<link rel="stylesheet" href="/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="/assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">

   @stop

   @section('footer-code')
   
		<script src="/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="/assets/plugins/select2/select2.min.js"></script>
		<script src="/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		<script src="/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="/assets/js/form-elements.js"></script>
   @stop

	@section('content')
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-white">
                  <div class="panel-body">


					{{ Former::open('/admin/post/'.Input::get('id'))->method('PUT')->rules(array(
									  'title'		=> 'required',
									  'content' 	=> 'required',
									  'status'		=> 'required',
									)); }}
					{{ Former::populate(Post::find($id)); }}
						@include('admin.posts.post-form')
					{{ Former::actions()->large_primary_submit('Güncelle'); }}
				    {{ Former::close(); }}


                  </div>
               </div>
            </div>
         </div>
    @stop


@stop
