<div id="beehive-social-panel" class="beehive-social-panel">
	<div class="inner-panel ass-scrollbar">
		<div class="panel-block dark">
			<a href="/" class="panel-logo item">
				<img src="https://beehive.themified.com/wp-content/themes/beehive/assets/images/logo-icon.svg"
					alt="gym">
			</a>
			<div class="my-card item">
				<div class="info">
					
					<div class="profile-name">
						<a href="http://localhost/wordpress-5.9/wordpress/members-2/gym-aissa/"
							class="name ellipsis">{{Auth::user()->name}} </a>
						
						<small>Social</small>

					</div>
				</div>
			</div>
		</div>
		<div class="panel-block light">
			<div class="panel-menu item">
				<ul id="menu-dashboard-menu" class="navbar-panel">
					<li id="menu-item-430"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-430"><a
							href="/activity-2/"><i class="uil-notebooks"></i><span
								class="nav-link-text">Generale</span></a></li>
					<li id="menu-item-436"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-436"><a
							href="/photos/"><i class="uil-image-v"></i><span class="nav-link-text">Exercices</span></a>
					</li>
					<li id="menu-item-438"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-438"><a
							href="/videos/"><i class="uil-play"></i><span class="nav-link-text">Diets</span></a></li>
					<li id="menu-item-439"
						class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-459 current_page_item menu-item-439">
						<a href="{{route('people')}}" aria-current="page"><i class="uil-user"></i><span
								class="nav-link-text">People</span></a></li>
					<li id="menu-item-434"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434"><a
							href="/groups/"><i class="uil-users-alt"></i><span class="nav-link-text">Home</span></a>
					</li>
					<li id="menu-item-431"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-431"><a
							href="{{route('homepassgym')}}"><i class="uil-tv-retro"></i><span class="nav-link-text">Home pass Gym</span></a>
					</li>
					<li id="menu-item-437"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-437"><a
							href="/shop/"><i class="uil-shopping-trolley"></i><span
								class="nav-link-text">Shop</span></a></li>
					<li id="menu-item-435"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a
							href="/jobs/"><i class="uil-briefcase-alt"></i><span class="nav-link-text">Jobs</span></a>
					</li>
					<li id="menu-item-433"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433"><a
							href="/forums/"><i class="uil-comments"></i><span class="nav-link-text">Forums</span></a>
					</li>
					<li id="menu-item-432"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-432"><a
							href="/blog/"><i class="uil-newspaper"></i><span class="nav-link-text">Blog</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="beehive-page" class="site">


	<header id="sochead" class="site-header social-header user-nav-active">
		<nav class="navbar beehive-navbar social fixed-top">
			<div class="container">
				<div id="beehive-ajax-search" class="beehive-ajax-search">
					<form role="search" method="get" id="ajax-search-form" class="ajax-search-form form-inline"
						action="httplocalhost/wordpress-5.9/wordpress/">
						<div class="search-field">
							<i class="icon ion-android-search"></i>
							<input id="ajax-search-textfield" type="text" name="s" placeholder="Search..." value=""
								autocomplete="off" required>
							<span class="beehive-loading-ring"></span>
						</div>
						<div class="search-button">
							<button type="submit" class="search-submit"><i class="icon ion-android-search"></i></button>
						</div>
					</form>
					<div id="ajax-search-result"></div>
				</div>

				<ul id="navbar-user" class="navbar-nav navbar-user">
					<li class="mini-cart nav-item"><a href="/cart/" class="cart-contents nav-link" title="View Cart"><i
								class="uil-cart"></i></a></li>
					<li class="nav-item">
						<a href="#" class="nav-link login" data-toggle="modal" data-target="#login-modal">Login</a>
					</li>

					<li class="nav-item">
						<a href="/register/" class="nav-link register">Register</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>