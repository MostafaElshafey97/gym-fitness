<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
				<ul>
						<li> <a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i> <span>Home</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>  Subscribers  </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('customers-liste')}}"> All Subscribers </a></li>
							
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
<a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Foods</span></a>
</li>
<li>
<a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Diets</span></a>
</li>

						<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			