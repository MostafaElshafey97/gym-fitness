<!DOCTYPE html>
<html lang="en-US">
@extends('users.layoutsbeehive.app')

<link rel="stylesheet" href="{{ asset('chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap-select/dist/css/bootstrap-select.min.css') }}">

	<body class="directory members  buddypress bp-nouveau page-template-default page page-id-459 theme-beehive woocommerce-no-js beehive beehive-guest-user elementor-default elementor-kit-10 title-bar-active beehive-social-layout panel-expanded has-page-sidebar no-js">

		
					<div class="beehive-preloader">
				<span></span>
			</div>
		
		

		<div id="beehive-page" class="site">

			
<!-- #sochead -->

			<div id="content" class="site-content">

				

<div id="primary" class="content-area">
	<div class="layout social"> 
		<div class="container-fluid">
			<div class="row">

				
				<div class="col-lg-12 col-main">
					<main id="main" class="main-content">

						
<div class="beehive-title-bar social">
	<div class="title-bar-wrapper">
					<div class="title-wrapper screen-reader-text">
									<h1 class="title h3">Members</h1>
							</div>
					</div>
</div>


<article id="post-0" class="post-0 page type-page status-publish hentry beehive-post">
	<div class="entry-content clearfix">
						<div id="buddypress" class="buddypress-wrap beehive bp-dir-hori-nav alignwide">
	
	
		
<nav class="members-type-navs main-navs bp-navs dir-navs " role="navigation" aria-label="Directory menu">

	
		<ul class="component-navigation members-nav">

			
				<li id="members-all" class="" data-bp-scope="all" data-bp-object="members">
					<a href="/members-2/">
						All Members
													<span class="count">1</span>
											</a>
				</li>

			
		</ul>
<!-- .component-navigation -->

	
</nav><!-- .bp-navs -->

	
	<div class="screen-content">

	<div class="subnav-filters filters no-ajax" id="subnav-filters">

			<div class="subnav-search clearfix">

			
			
<div class="dir-search members-search bp-search" data-bp-search="members">
	<form action="" method="get" class="bp-dir-search-form" id="dir-members-search-form" role="search">

		<label for="dir-members-search" class="bp-screen-reader-text">Search Members...</label>

		<input id="dir-members-search" name="members_search" type="search" placeholder="Search Members...">

		<button type="submit" id="dir-members-search-submit" class="nouveau-search-submit" name="dir_members_search_submit">
			<span class="dashicons dashicons-search" aria-hidden="true"></span>
			<span id="button-text" class="bp-screen-reader-text">Search</span>
		</button>

	</form>
</div>

 		</div>
	
			
<div id="dir-filters" class="component-filters clearfix">
	<div id="members-order-select" class="last filter">
		<label class="bp-screen-reader-text" for="members-order-by">
			<span>Order By:</span>
		</label>
		<div class="select-wrap">
			<select id="members-order-by" data-bp-filter="members">

				<option value="active">Last Active</option>
<option value="newest">Newest Registered</option>
<option value="alphabetical">Alphabetical</option>

			</select>
			<span class="select-arrow" aria-hidden="true"></span>
		</div>
	</div>
</div>
	
</div>
<!-- search & filters -->

		<div id="members-dir-list" class="members dir-list" data-bp-list="members">
			<div id="bp-ajax-loader">
<aside class="bp-feedback bp-messages loading">
	<span class="bp-icon" aria-hidden="true"></span>
	<p>Loading the members of your community. Please wait.</p>
	</aside>
</div>
		</div>
		<div class="row">
					
					
					
					</div>
					<div class="outer-scontainer">
	     
		 <div id="groups-dir-list" class="groups dir-list"
			 data-bp-list="groups" style="display: block;">


			 <ul id="groups-list"
				 class="item-list groups-list bp-list grid two">
				

				 <li class="item-entry animate-item slideInUp odd public group-has-avatar"
				 style="height:200px !important ;width:100spx !important ;border: solid #5561e2 1px; !important" 
					 data-bp-item-id="4" data-bp-item-component="groups"
					 style="visibility: visible; animation-name: slideInUp;">
					 <div class="">

						<div class="item-avatar">
							 <a href="#"><img
									 loading="lazy"src="{{asset('wp-admin/images/22.png')}}" style ="width:150px; !important"
									 class="avatar group-4-avatar avatar-200 photo"
									 width="200" height="200"
									 alt="Group logo of Backpakers Club"></a>
						 </div> <h4 class="list-title member-name">42%</h4>
						 <br>
Weekly Progress
</li>
<li class="item-entry animate-item slideInUp odd public group-has-avatar"
				 style="height:200px !important ;width:100spx !important ;border: solid #5561e2 1px; !important" 
					 data-bp-item-id="4" data-bp-item-component="groups">
					 <div class="" >

						<div class="item-avatar">
							 <a href="#"><img
									 loading="lazy"src="{{asset('wp-admin/images/call.png')}}"style ="width:150px; !important"
									 class="avatar group-4-avatar avatar-200 photo"
									 width="200" height="200"
									 alt="Group logo of Backpakers Club"></a>
						 </div> <h4 class="list-title member-name">42%</h4>
						 <br>
Weekly Progress
</li>
<li class="item-entry animate-item slideInUp odd public group-has-avatar"
				 style="height:200px !important ;width:100spx !important ;border: solid #5561e2 1px; !important" 
					 data-bp-item-id="4" data-bp-item-component="groups">
					 <div class="" >

						<div class="item-avatar">
							 <a href="#"><img
									 loading="lazy"src="{{asset('wp-admin/images/usersss.png')}}"style ="width:150px; !important"
									 class="avatar group-4-avatar avatar-200 photo"
									 width="200" height="200"
									 alt="Group logo of Backpakers Club"></a>
						 </div> <h4 class="list-title member-name">42%</h4>
						 <br>
Weekly Progress
</li>
</ul>			
					
				</div>
				
<!-- #members-dir-list -->

			</div>.
			
			
<!-- // .screen-content -->

	</div>
<!-- #buddypress -->
			</div>
<!-- .entry-contents -->
	</article><!-- #post-0 -->

  

						
					</main><!-- #main -->
				</div>
<!-- .col-main -->

	


</aside></div>
			</div>
<!-- .row -->
		</div>
<!-- .container -->
	</div>
<!-- .layout -->
</div>
<!-- #primary -->


				
			</div>
<!-- #content -->

			
		</div>
<!-- #beehive-page -->

		
<div class="modal fade login-modal" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="inner">
																	<img src="http://2.gravatar.com/avatar/?s=96&#038;d=mm&#038;r=g" alt="Guest" class="avatar guest-avatar">
									</div>
			</div>
			<div class="modal-body">
				<h4 class="modal-title">Log into your account</h4>
				<form action="httplocalhost/wordpress-5.9/wordpress/wp-login.php" method="post" id="modal-login-form" class="beehive-login-form modal-login-form" name="modal-login-form">
					<div class="form-group">
						<div class="user-name">
							<label class="screen-reader-text">Email/username</label>
							<span class="icon"><i class="uil-user"></i></span>
							<input type="text" id="modal-username" class="username-control" required name="log" value="" placeholder="Email or username">
						</div>
					</div>
					<div class="form-group">
						<div class="pass">
							<label class="screen-reader-text">Password</label>
							<span class="icon"><i class="uil-key-skeleton-alt"></i></span>
							<input type="password" id="modal-password" class="password-control" required name="pwd" value="" placeholder="Password">
						</div>
					</div>
										<div class="modal-options">
						<div class="row">
							<div class="col-6">
								<div class="forgetmenot">
									<label for="modal-rememberme">
										<input id="modal-rememberme" name="rememberme" type="checkbox" value="forever"> Remember Me									</label>
								</div>
							</div>
							<div class="col-6">
								<div class="forgot-password">
									<a href="/my-account/lost-password/">
										Lost Password?									</a>
								</div>
							</div>
						</div>
					</div>
											<div class="beehive-login-result"></div>
										<div class="submit">
						<button type="submit" id="modal_login_submit" class="submit-login" name="wp-submit">Log Into Your Account</button>
					</div>
					<input type="hidden" id="modal-login-security" name="modal-login-security" value="03382d2e0b"><input type="hidden" name="_wp_http_referer" value="/wordpress-5.9/wordpress/members-2/">					 
						<div class="register-link">
							<a href="/register/" class="register color-primary">Create an account</a>
						</div>
									</form>
							</div>
		</div>
	</div>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="icon ion-close-round"></i>
	</button>
</div>

			
	
	</body>
</html>