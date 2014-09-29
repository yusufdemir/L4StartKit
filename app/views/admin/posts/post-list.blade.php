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
                  <li class="active">
                     Main
                  </li>
               </ol>
            </div>
         </div>
   @stop
   
   @section('header-code')
   
   @stop

   @section('footer-code')
   
   @stop

	@section('content')
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-white">
                  <div class="panel-body">
                     <table class="table table-hover" id="sample-table-1">
                        <thead>
                           <tr>
                              <th class="center hidden-xs">#</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th class="hidden-xs">Created At</th>
                              <th>Status</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($posts as $post)
                           <tr>
                              <td class="center hidden-xs">{{ $post->id }}</td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->category_id }}</td>
                              <td class="hidden-xs">{{ $post->created_at }}</td>
                              <td>{{ $post->status }}</td>

                              <td class="center">
                                 <div class="visible-md visible-lg hidden-sm hidden-xs">
                                    <a href="{{ URL::to('/admin/post/'.$post->id.'/edit') }}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                    <a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                 </div>
                                 <div class="visible-xs visible-sm hidden-md hidden-lg">
                                    <div class="btn-group">
                                       <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                          <i class="fa fa-cog"></i> <span class="caret"></span>
                                       </a>
                                       <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                          <li>
                                             <a role="menuitem" tabindex="-1" href="{{ URL::to('/admin/post/'.$post->id.'/edit') }}">
                                                <i class="fa fa-edit"></i> Edit
                                             </a>
                                          </li>
                                          <li>
                                             <a role="menuitem" tabindex="-1" href="#">
                                                <i class="fa fa-share"></i> Share
                                             </a>
                                          </li>
                                          <li>
                                             <a role="menuitem" tabindex="-1" href="#">
                                                <i class="fa fa-times"></i> Remove
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     {{ $posts->links() }}
                  </div>
               </div>
            </div>
         </div>
    @stop


@stop