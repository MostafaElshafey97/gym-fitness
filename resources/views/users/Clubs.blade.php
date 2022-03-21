<!DOCTYPE html>

@extends('users.layoutsbeehive.app')

<body
    class="directory members  buddypress bp-nouveau page-template-default page page-id-459 theme-beehive woocommerce-no-js beehive beehive-guest-user elementor-default elementor-kit-10 title-bar-active beehive-social-layout panel-expanded has-page-sidebar no-js">


    <div class="beehive-preloader">
        <span></span>
    </div>



    <div id="beehive-page" class="site">
        <div id="beehive-page" class="site">


            <header id="sochead" class="site-header social-header user-nav-active">
                <nav class="navbar beehive-navbar social fixed-top">
                    <div class="container">
                        <div id="beehive-ajax-search" class="beehive-ajax-search">
                            <form role="search" method="get" id="ajax-search-form" class="ajax-search-form form-inline"
                                action="httplocalhost/wordpress-5.9/wordpress/">
                                <div class="search-field">
                                    <i class="icon ion-android-search"></i>
                                    <input id="ajax-search-textfield" type="text" name="s" placeholder="Search..."
                                        value="" autocomplete="off" required>
                                    <span class="beehive-loading-ring"></span>
                                </div>
                                <div class="search-button">
                                    <button type="submit" class="search-submit"><i
                                            class="icon ion-android-search"></i></button>
                                </div>
                            </form>
                            <div id="ajax-search-result"></div>
                        </div>

                        <ul id="navbar-user" class="navbar-nav navbar-user">
                            <li class="mini-cart nav-item"><a href="/cart/" class="cart-contents nav-link"
                                    title="View Cart"><i class="uil-cart"></i></a></li>
                                    <li class="nav-item">
			<a href="/logout" >logout</a>
		</li>


                        </ul>
                    </div>
                </nav>
            </header><!-- #sochead -->

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


                                        <article id="post-0"
                                            class="post-0 page type-page status-publish hentry beehive-post">
                                            <div class="entry-content clearfix">
                                                <div id="buddypress"
                                                    class="buddypress-wrap beehive bp-dir-hori-nav alignwide">



                                                    <nav class="members-type-navs main-navs bp-navs dir-navs "
                                                        role="navigation" aria-label="Directory menu">


                                                        <ul class="component-navigation members-nav">


                                                            <li id="members-all" class="" data-bp-scope="all"
                                                                data-bp-object="members">
                                                                <a href="/members-2/">
                                                                    All Members
                                                                    <span class="count"></span>
                                                                </a>
                                                            </li>
                                                            <li id="members-all" class="" data-bp-scope="all"
                                                                data-bp-object="members">
                                                                <a href="/members-2/">
                                                                    My friends
                                                                    <!--- only users follow-->
                                                                    <span class="count">1</span>
                                                                </a>
                                                            </li>
                                                            <li id="members-all" class="" data-bp-scope="all"
                                                                data-bp-object="members">
                                                                <a href="/members-2/">
                                                                    My Subscriptions
                                                                    <!--- only users subscriptions-->
                                                                    <span class="count">1</span>
                                                                </a>
                                                            </li>


                                                        </ul>
                                                        <!-- .component-navigation -->


                                                    </nav><!-- .bp-navs -->


                                                    <div class="screen-content">

                                                        <div class="subnav-filters filters no-ajax" id="subnav-filters">

                                                            <div class="subnav-search clearfix">



                                                                <div class="dir-search members-search bp-search"
                                                                    data-bp-search="members">
                                                                    <form action="" method="get"
                                                                        class="bp-dir-search-form"
                                                                        id="dir-members-search-form" role="search">

                                                                        <label for="dir-members-search"
                                                                            class="bp-screen-reader-text">Search
                                                                            Members...</label>

                                                                        <input id="dir-members-search"
                                                                            name="members_search" type="search"
                                                                            placeholder="Search Members...">

                                                                        <button type="submit"
                                                                            id="dir-members-search-submit"
                                                                            class="nouveau-search-submit"
                                                                            name="dir_members_search_submit">
                                                                            <span class="dashicons dashicons-search"
                                                                                aria-hidden="true"></span>
                                                                            <span id="button-text"
                                                                                class="bp-screen-reader-text">Search</span>
                                                                        </button>

                                                                    </form>
                                                                </div>

                                                            </div>


                                                            <div id="dir-filters" class="component-filters clearfix">
                                                                <div id="members-order-select" class="last filter">
                                                                    <label class="bp-screen-reader-text"
                                                                        for="members-order-by">
                                                                        <span>Order By:</span>
                                                                    </label>
                                                                    <div class="select-wrap">
                                                                        <select id="members-order-by"
                                                                            data-bp-filter="members">

                                                                            <option value="active">Last Active</option>
                                                                            <option value="newest">Newest Registered
                                                                            </option>
                                                                            <option value="alphabetical">Alphabetical
                                                                            </option>

                                                                        </select>
                                                                        <span class="select-arrow"
                                                                            aria-hidden="true"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                 

                                                        
				</div>

                                                        <div class="outer-scontainer">
	     
                                                        <div id="groups-dir-list" class="groups dir-list"
                                                            data-bp-list="groups" style="display: block;">


                                                            <ul id="groups-list"
                                                                class="item-list groups-list bp-list grid two">
                                                                @foreach($Clubs as $club)

                                                                <li class="item-entry animate-item slideInUp odd public group-has-avatar"
                                                                    data-bp-item-id="4" data-bp-item-component="groups"
                                                                    style="visibility: visible; animation-name: slideInUp;">
                                                                    <div class="list-wrap">

                                                                        <div class="item-cover"
                                                                            style="background-image: url('https://mythemestore.com/beehive-preview/wp-content/uploads/buddypress/groups/4/cover-image/5e2cc36891950-bp-cover-image.jpg')">
                                                                        </div>

                                                                        <div class="item-avatar">
                                                                            <a
                                                                                href="#"><img
                                                                                    loading="lazy"
                                                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/group-avatars/4/5e2cc339c7b56-bpfull.jpg"
                                                                                    class="avatar group-4-avatar avatar-200 photo"
                                                                                    width="200" height="200"
                                                                                    alt="Group logo of Backpakers Club"></a>
                                                                        </div>

                                                                        <div class="item">

                                                                            <div class="item-block">

                                                                                <h5 class="list-title groups-title"><a
                                                                                        href="https://mythemestore.com/beehive-preview/groups/backpakers-club/"
                                                                                        class="bp-group-home-link backpakers-club-home-link">{{$club->name}}</a>
                                                                                </h5>

                                                                                <p class="last-activity item-meta mute">
                                                                                    Clubs
                                                                                    Active <span>a day ago</span> </p>

                                                                                <ul class="inline-members">
                                                                                     
                                                                                    <li>
                                                                                  
                                                                                       @foreach( App\User::join('clubs_users', 'clubs_users.users_id', '=', 'users.id')->where('clubs_users.Clubs_id','=',$club->id)->get()     as $dd )
                                                                                        <a href="#"
                                                                                            title="{{$dd->name }}"
                                                                                            target="_blank">
                                                                                            
                                                                                            <img loading="lazy" src="{{ asset('wp-admin/images/'.$dd->image) }}"style=" border-radius: 50%; !important" width="35" height="35" >
                                                                                        </a>
                                                                                    </li>
                                                                                   
                                                                                          @endforeach
                                                                                  

                                                                                   

                                                                                   

                                                                                   
                                                                                </ul>


                                                                                <p class="item-meta group-details">
                                                                                    {{$club->type}} Group / {{$club->followers}} members</p>



                                                                                <ul class=" groups-meta action">
                                                                                    <li class="generic-button"><a
                                                                                            href="{{URL('groups-change',$club->id)}}">View
                                                                                            Group</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </li>
                                                                @endforeach



















                                                            </ul>



                                                            <div class="bp-pagination bottom"
                                                                data-bp-pagination="grpage">

                                                                <div class="pag-count bottom">

                                                                    <p class="pag-data">
                                                                        Viewing 1 - 7 of 7 groups </p>

                                                                </div>


                                                            </div>



                                                        </div>
                                                        
 