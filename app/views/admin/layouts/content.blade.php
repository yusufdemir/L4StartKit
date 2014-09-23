<!-- start: MAIN CONTAINER -->                     
<div class="main-container inner">
   <!-- start: PAGE -->
   <div class="main-content">

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
               <a href="#" class="back-subviews">
                  <i class="fa fa-chevron-left"></i> BACK
               </a>
               <a href="#" class="close-subviews">
                  <i class="fa fa-times"></i> CLOSE
               </a>
               <div class="toolbar-tools pull-right">
                  <!-- start: TOP NAVIGATION MENU -->
                  <ul class="nav navbar-right">
                     <!-- start: TO-DO DROPDOWN -->
                     <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                           <i class="fa fa-plus"></i> SUBVIEW
                           <div class="tooltip-notification hide">
                              <div class="tooltip-notification-arrow"></div>
                              <div class="tooltip-notification-inner">
                                 <div style="width:100px">
                                    <div class="semi-bold">
                                       HI THERE!
                                    </div>
                                    <div class="message">
                                       Try the Subview Live Experience
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <ul class="dropdown-menu dropdown-light dropdown-subview">
                           <li class="dropdown-header">
                              Notes
                           </li>
                           <li>
                              <a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
                           </li>
                           <li>
                              <a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
                           </li>
                           <li class="dropdown-header">
                              Calendar
                           </li>
                           <li>
                              <a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
                           </li>
                           <li>
                              <a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
                           </li>
                           <li class="dropdown-header">
                              Contributors
                           </li>
                           <li>
                              <a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
                           </li>
                           <li>
                              <a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                           <span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
                        </a>
                        <ul class="dropdown-menu dropdown-light dropdown-messages">
                           <li>
                              <span class="dropdown-header"> You have 9 messages</span>
                           </li>
                           <li>
                              <div class="drop-down-wrapper ps-container">
                                 <ul>
                                    <li class="unread">
                                       <a href="javascript:;" class="unread">
                                          <div class="clearfix">
                                             <div class="thread-image">
                                                <img src="./assets/images/avatar-2.jpg" alt="">
                                             </div>
                                             <div class="thread-content">
                                                <span class="author">Nicole Bell</span>
                                                <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                <span class="time"> Just Now</span>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:;" class="unread">
                                          <div class="clearfix">
                                             <div class="thread-image">
                                                <img src="./assets/images/avatar-3.jpg" alt="">
                                             </div>
                                             <div class="thread-content">
                                                <span class="author">Steven Thompson</span>
                                                <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                <span class="time">8 hrs</span>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:;">
                                          <div class="clearfix">
                                             <div class="thread-image">
                                                <img src="./assets/images/avatar-5.jpg" alt="">
                                             </div>
                                             <div class="thread-content">
                                                <span class="author">Kenneth Ross</span>
                                                <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                <span class="time">14 hrs</span>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                           <li class="view-all">
                              <a href="pages_messages.html">
                                 See All
                              </a>
                           </li>
                        </ul>
                     </li>
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
         <!-- end: BREADCRUMB -->
         <!-- start: PAGE CONTENT -->
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-white">
                  <div class="panel-body">
                     Your content here
                  </div>
               </div>
            </div>
         </div>
         <!-- end: PAGE CONTENT-->
      </div>
      <div class="subviews">
         <div class="subviews-container"></div>
      </div>
   </div>
   <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->