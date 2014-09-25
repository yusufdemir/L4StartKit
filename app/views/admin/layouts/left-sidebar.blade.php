<!-- start: PAGESLIDE LEFT -->
<a class="closedbar inner hidden-sm hidden-xs" href="#">
</a>
<nav id="pageslide-left" class="pageslide inner">
	<div class="navbar-content">
		<!-- start: SIDEBAR -->
		<div class="main-navigation left-wrapper transition-left">
			<div class="navigation-toggler hidden-sm hidden-xs">
				<a href="#main-navbar" class="sb-toggle-left">
				</a>
			</div>
			<div class="user-profile border-top padding-horizontal-10 block">
				<div class="inline-block">
					<img src="assets/images/avatar-1.jpg" alt="">
				</div>
				<div class="inline-block">
					<h5 class="no-margin"> Hoşgeldin </h5>
					<h4 class="no-margin"> Yusuf Demir </h4>
					<!--<a class="btn user-options sb_toggle">
						<i class="fa fa-cog"></i>
					</a>-->
				</div>
			</div>
			<!-- start: MAIN NAVIGATION MENU -->
			<ul class="main-navigation-menu">
				<li class="active open">
					<a href="{{ URL::to('/') }}"><i class="fa fa-home"></i> 
						<span class="title"> Dashboard </span>
						<span class="label label-default pull-right ">Yönetim</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)"><i class="fa fa-pencil-square-o"></i> 
						<span class="title"> Posts (Yazılar) </span><i class="icon-arrow"></i> 
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layouts_sidebar_closed.html">
								<span class="title"> All Posts </span>
								<span class="label label-default pull-right ">Tüm Yazılar</span>
							</a>
						</li>
						<li>
							<a href="layouts_sidebar_not_fixed.html">
								<span class="title"> Add Post </span>
								<span class="label label-default pull-right ">Yazı Ekle</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- end: MAIN NAVIGATION MENU -->
		</div>
		<!-- end: SIDEBAR -->
	</div>
	<div class="slide-tools">
		<div class="col-xs-6 text-left no-padding">
			<a class="btn btn-sm status" href="#">
				Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
			</a>
		</div>
		<div class="col-xs-6 text-right no-padding">
			<a class="btn btn-sm log-out text-right" href="login_login.html">
				<i class="fa fa-power-off"></i> Log Out
			</a>
		</div>
	</div>
</nav>
<!-- end: PAGESLIDE LEFT -->