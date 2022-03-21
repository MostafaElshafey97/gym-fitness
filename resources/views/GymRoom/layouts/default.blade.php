<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('Gym-room/assets/img/favicon.png')}}">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/css/bootstrap.min.css')}}"">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('Gym-room/assets/releases/v5.8.2/css/all.css')}}"> </head>

<body>
<body>
	<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Home</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>  Customers  </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('customers-liste')}}"> All Customer </a></li>
								<li><a href="edit-booking.html"> Edit Customer </a></li>
								<li><a href="add-booking.html"> Add Customer </a></li>
							</ul>
						</li>  
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span>  Rooms  </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('rooms-liste')}}"> All Room </a></li>
								<li><a href="edit-booking.html"> Edit Room </a></li>
								<li><a href="add-booking.html"> Add Room </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>  all staff  </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-booking.html"> All staff </a></li>
								<li><a href="edit-booking.html"> Edit staff </a></li>
								<li><a href="add-booking.html"> Add staff </a></li>
							</ul>
						</li>
						<li class="submenu">
<a href="#" class="active subdrop"><i class="fe fe-table"></i> <span> Exercices </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: block;">
<li><a class="active" href="{{route('exercices')}}">liste of exercices </a></li>
<li><a href="invoice-reports.html">Invoice Report </a></li>
</ul>
</li>
<li>
<a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a>
</li>
<li>
<a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Diets</span></a>
</li>

						<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
						
					</ul>
				</div>
			</div>
		</div>
           <!-- /# sidebar -->

           <div class="header">
			<div class="header-left">
				<a href="index.html" class="logo"> <img src="{{ asset('Gym-room/assets/img/20-22.png')}}" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="index.html" class="logo logo-small">  alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('Gym-room/assets/img/profiles/avatar-02.jpg')}}">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('Gym-room/assets/img/profiles/avatar-11.jpg')}}">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">International Software
                                                    Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
                                                    XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Mercury Software
                                                    Inc</span> added a new product <span class="noti-title">Apple
                                                    MacBook Pro</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{ asset('Gym-room/assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="{{ asset('Gym-room/assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>Soeng Souy</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> <a class="dropdown-item" href="profile.html">My Profile</a> <a class="dropdown-item" href="settings.html">Account Settings</a> <a class="dropdown-item" href="{{route('login')}}">Logout</a> </div>
				</li>
			</ul>
		</div>











           

    <div class="content-wrap">
       @yield('content')
    </div>
	<script src="{{ asset('Gym-room/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/js/script.js')}}"></script>