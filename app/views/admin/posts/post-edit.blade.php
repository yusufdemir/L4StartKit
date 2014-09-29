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
   
		<script src="/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>


   @stop

	@section('content')
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-white">
                  <div class="panel-body">


					{{ $edit_form }}


                  </div>
               </div>
            </div>
         </div>
    @stop


@stop
