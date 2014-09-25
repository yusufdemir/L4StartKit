<!-- start: MAIN CONTAINER -->                     
<div class="main-container inner">
   <!-- start: PAGE -->
   <div class="main-content">
      <!-- start: PANEL CONFIGURATION MODAL FORM -->
      <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                     ×
                  </button>
                  <h4 class="modal-title">Panel Configuration</h4>
               </div>
               <div class="modal-body">
                  Here will be a configuration form
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                     Close
                  </button>
                  <button type="button" class="btn btn-primary">
                     Save changes
                  </button>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      <div class="container">
         <!-- start: PAGE HEADER -->
         <!-- start: TOOLBAR -->
         <div class="toolbar row">
            <div class="col-sm-6 hidden-xs">
               <div class="page-header">
               @yield('page-header')<!-- <h1>Blank Page <small>subtitle here</small></h1> -->
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">

               <div class="toolbar-tools pull-right">
                  <!-- start: TOP NAVIGATION MENU -->
                  <ul class="nav navbar-right">
                     <!-- start: TO-DO DROPDOWN -->

                     <li class="menu-search">
                        <a href="#">
                           <i class="fa fa-search"></i> SEARCH
                        </a>
                        <!-- start: SEARCH POPOVER -->
                        <div class="popover bottom search-box transition-all">
                           <div class="arrow"></div>
                           <div class="popover-content">
                              <!-- start: SEARCH FORM -->
                              <form class="" id="searchform" action="#">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                       <button class="btn btn-main-color btn-squared" type="button">
                                          <i class="fa fa-search"></i>
                                       </button> </span>
                                 </div>
                              </form>
                              <!-- end: SEARCH FORM -->
                           </div>
                        </div>
                        <!-- end: SEARCH POPOVER -->
                     </li>
                  </ul>
                  <!-- end: TOP NAVIGATION MENU -->
               </div>
            </div>
         </div>
         <!-- end: TOOLBAR -->
         <!-- end: PAGE HEADER -->
         <!-- start: BREADCRUMB -->
         @yield('breadcrumb','
            <div class="row">
               <div class="col-md-12">
                  <ol class="breadcrumb">
                     <li>
                        <a href="#">
                           Dashboard
                        </a>
                     </li>
                     <li class="active">
                        Blank Page
                     </li>
                  </ol>
               </div>
            </div>            
         ')
         <!-- end: BREADCRUMB -->
         <!-- start: PAGE CONTENT -->
         @yield('content')
         <!-- end: PAGE CONTENT-->
      </div>
      <div class="subviews">
         <div class="subviews-container"></div>
      </div>
   </div>
   <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->