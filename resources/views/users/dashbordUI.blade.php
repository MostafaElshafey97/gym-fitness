@extends('users.layouts.app')<!-- Navbar Light -->

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
<!-- End Navbar -->