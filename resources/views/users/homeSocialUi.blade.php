@extends('users.layouts.app')

<nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3"style="    background-image: linear-gradient(
310deg
, #a470d8  0%, #f83f9c  100%);">
  <div class="container">
    <a class="navbar-brand" href="https://demos.creative-tim.com/soft-ui-design-system-pro/presentation.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
     PocFit
    </a>
    <a href="https://www.creative-tim.com/product/soft-ui-design-system-pro#pricingCard" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 ms-auto d-lg-none d-block">Buy Now</a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"style="background:#e5e7e8;width: 100px;border-radius:10px;" role="button">
            General
            <img src="{{asset('assets_ui/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>

        <li class="nav-item mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"style="background:#e5e7e8;width: 100px;border-radius:10px" role="button">
            Exercices
            <img src="{{asset('assets_ui/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" style="background:#e5e7e8;width: 100px;border-radius:10px"role="button">
            Diets
            <img src="{{asset('assets_ui/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>

        <li class="nav-item mx-2">
          <a href="{{route('home_social_ui')}}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"style="background:#e5e7e8;width: 100px;border-radius:10px" role="button">
            Home
            <img src="{{asset('assets_ui/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>
      </ul>

      <ul class="navbar-nav d-lg-block d-none">
        <li class="nav-item">
          <a href="{{route('logout')}}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1" role="button">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="py-6 bg-gray-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card">
            
          <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
          <div class="author align-items-center">
              <img src="{{asset('assets_ui/img/team-2.jpg')}}" alt="..." class="avatar shadow">
              <div class="name ps-3">
                <span>Mohmed Ahmed</span>
                <div class="stats">
                  <small>Posted on 28 February</small>
                </div>
              </div>
            </div>
            
          </div>

          <div class="card-body pt-3">
          
           
            <p class="card-description mb-4">
              Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
            </p>
            
            <a href="javascript:;" class="d-block">
              <img src="{{asset('assets_ui/img/blog7-5.png')}}" class="img-fluid border-radius-lg">
            </a>
            <br>
            <a href="javascript:;" class="d-block">
              <img src="{{asset('assets_ui/img/ii.png')}}" class="img-fluid border-radius-lg">
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
          <div class="author align-items-center">
              <img src="{{asset('assets_ui/img/ivana-square.jpg')}}" alt="..." class="avatar shadow">
              <div class="name ps-3">
                <span>Club Fitness</span>
                <div class="stats">
                  <small>Posted 2 min ago</small>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body pt-3">
          
           
            <p class="card-description mb-4">
              Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
            </p>
           
            <a href="javascript:;" class="d-block">
              <img src="{{asset('assets_ui/img/cc.png')}}" class="img-fluid border-radius-lg">
            </a>
            <br>
            <a href="javascript:;" class="d-block">
              <img src="{{asset('assets_ui/img/ii.png')}}" class="img-fluid border-radius-lg">
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
          <div class="author align-items-center">
              <img src="{{asset('assets_ui/img/marie.jpg')}}" alt="..." class="avatar shadow">
              <div class="name ps-3">
                <span>Elijah Miller</span>
                <div class="stats">
                  <small>Posted now</small>
                </div>
              </div>
            </div><br>
            <a href="javascript:;" class="d-block">
              <img src="{{asset('assets_ui/img/blog7-3.jpg')}}" class="img-fluid border-radius-lg">
            </a>
          </div>

          <div class="card-body pt-3">
            <span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">Hub</span>
            <a href="javascript:;" class="text-darker card-title h5 d-block">
              Shared Coworking
            </a>
            <p class="card-description mb-4">
              Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>