<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>Opini Publik</title>

  <link rel="apple-touch-icon" href="{{asset('asset/images/Lambang Daerah Provinsi Bali.png')}}">
  <link rel="shortcut icon" href="{{asset('asset/images/Lambang Daerah Provinsi Bali.png')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('asset/global/css/bootstrap.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/css/bootstrap-extend.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/css/site.minfd53.css?v4.0.1')}}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="{{asset('asset/global/css/skintools.minfd53.css?v4.0.1')}}">
  <script src="{{asset('asset/js/Plugin/skintools.minfd53.js?v4.0.1')}}"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="{{asset('asset/global/vendor/animsition/animsition.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/switchery/switchery.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/intro-js/introjs.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/waves/waves.minfd53.css?v4.0.1')}}">

  <!-- Plugins For This Page -->
  <!-- <link rel="stylesheet" href="{{asset('asset/global/vendor/chartist/chartist.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/jvectormap/jquery-jvectormap.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.css?v4.0.1')}}"> -->
  
  <link rel="stylesheet" href="{{asset('assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.css?v4.0.1')}}">

  <!-- Page -->
  <!-- <link rel="stylesheet" href="{{asset('asset/examples/css/dashboard/v1.minfd53.css?v4.0.1')}}"> -->
  <link rel="stylesheet" href="{{asset('assets/examples/css/pages/user.minfd53.css?v4.0.1')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{asset('asset/global/fonts/material-design/material-design.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1')}}">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">

  <script src="{{asset('asset/global/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition dashboard">

  @include('layouts.navbar')

  @include('layouts.sitemenu')

  <!-- Page -->
  <div class="page">
    <div class="page-content">
      <!-- Content -->
      <div class="panel">
        <div class="panel-body">
          <form class="page-search-form" role="search">
            <div class="input-search input-search-dark">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Cari Topik">
              <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
            </div>
          </form>

          <div class="col-md-6 col-xl-4">
              <!-- Example Date Range -->
              <div class="example-wrap">
                <h4 class="example-title">Date Range</h4>
                <p>Set <code>name="start"</code> and <code>name="end"</code> for date
                  range.</p>
                <div class="example">
                  <div class="input-daterange" data-plugin="datepicker">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon md-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" name="start" />
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">to</span>
                      <input type="text" class="form-control" name="end" />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Date Range -->
            </div>

          <!-- bawah -->
          <div class="nav-tabs-horizontal nav-tabs-animate" data-plugin="tabs">
            <div class="dropdown page-user-sortlist">
              Order By: <a class="dropdown-toggle inline-block" data-toggle="dropdown"
                href="#" aria-expanded="false">Last Active</a>
              <div class="dropdown-menu animation-scale-up animation-top-right animation-duration-250"
                role="menu">
                <a class="active dropdown-item" href="javascript:void(0)">Last Active</a>
                <a class="dropdown-item" href="javascript:void(0)">Username</a>
                <a class="dropdown-item" href="javascript:void(0)">Location</a>
                <a class="dropdown-item" href="javascript:void(0)">Register Date</a>
              </div>
            </div>

            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
              <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#all_contacts"
                  aria-controls="all_contacts" role="tab">All Contacts</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#my_contacts" aria-controls="my_contacts"
                  role="tab">My Contacts</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#google_contacts" aria-controls="google_contacts"
                  role="tab">Google Contacts</a></li>
              <li class="dropdown nav-item" role="presentation">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Contacts </a>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" data-toggle="tab" href="#all_contacts" aria-controls="all_contacts"
                    role="tab">All Contacts</a>
                  <a class="active dropdown-item" data-toggle="tab" href="#my_contacts" aria-controls="my_contacts"
                    role="tab">My Contacts</a>
                  <a class="dropdown-item" data-toggle="tab" href="#google_contacts" aria-controls="google_contacts"
                    role="tab">Google Contacts</a>
                </div>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane animation-fade active" id="all_contacts" role="tabpanel">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/1.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Herman Beck
                          <small>Last Access: 1 hour ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 4425 Golf Course Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/2.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Mary Adams
                          <small>Last Access: 2 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 1391 Depaul Dr
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/3.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Caleb Richards
                          <small>Last Access: 3 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 5067 E Center St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/4.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          June Lane
                          <small>Last Access: 4 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 4788 E Little York Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/5.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Edward Fletcher
                          <small>Last Access: 5 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 2317 Cowper St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/6.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Crystal Bates
                          <small>Last Access: 6 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 2689 Seventh St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/7.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Nathan Watts
                          <small>Last Access: 7 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 7858 Golf Course Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/8.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Heather Harper
                          <small>Last Access: 8 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 7586 Crescent Canyon St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/9.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Willard Wood
                          <small>Last Access: 9 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 3081 Sunset Blvd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/10.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ronnie Ellis
                          <small>Last Access: 10 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 8910 Fincher Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/11.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Gwendolyn Wheeler
                          <small>Last Access: 11 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 6030 Lovers Ln
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/12.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Daniel Russell
                          <small>Last Access: 12 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 6240 E Cypress St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                </ul>
                <nav>
                  <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                </nav>
              </div>

              <div class="tab-pane animation-fade" id="my_contacts" role="tabpanel">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/13.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Sarah Graves
                          <small>Last Access: 1 hour ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 4190 W Lone Mountain Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/14.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Andrew Hoffman
                          <small>Last Access: 2 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 2849 Spring St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/15.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Camila Lynch
                          <small>Last Access: 3 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 2128 W Campbell St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/16.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ramon Dunn
                          <small>Last Access: 4 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 7014 Pecan Acres Ln
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/17.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Scott Sanders
                          <small>Last Access: 5 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 2797 Airport St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/18.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Nina Wells
                          <small>Last Access: 6 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 1020 Crescent Canyon St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/19.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Beverly Grant
                          <small>Last Access: 7 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 3356 Crockett St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/20.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Marvin Nelson
                          <small>Last Access: 8 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 1504 Mcgowen St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/1.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Herman Beck
                          <small>Last Access: 9 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 5858 Abby Park St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/2.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Mary Adams
                          <small>Last Access: 10 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 8901 Genschaw Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/3.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Caleb Richards
                          <small>Last Access: 11 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 7715 Washington Ave
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                </ul>
                <nav>
                  <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                </nav>
              </div>

              <div class="tab-pane animation-fade" id="google_contacts" role="tabpanel">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/8.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Heather Harper
                          <small>Last Access: 1 hour ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 4393 Kelly Dr
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/9.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Willard Wood
                          <small>Last Access: 2 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 6524 W Craig Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/10.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ronnie Ellis
                          <small>Last Access: 3 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 3045 Locust Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/11.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Gwendolyn Wheeler
                          <small>Last Access: 4 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 4090 Rudder Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/12.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Daniel Russell
                          <small>Last Access: 5 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 5899 Sable St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/13.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Sarah Graves
                          <small>Last Access: 6 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 8954 Hamilton Ave
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/14.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Andrew Hoffman
                          <small>Last Access: 7 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 6056 Airport Ave
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/15.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Camila Lynch
                          <small>Last Access: 8 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 7096 Fourth St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon md-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/16.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ramon Dunn
                          <small>Last Access: 9 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 6580 Pinecrest St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/17.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Scott Sanders
                          <small>Last Access: 10 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color md-pin" aria-hidden="true"></i>                          Street 2674 Second St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-primary btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                </ul>
                <nav>
                  <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Page -->

  @include('layouts.footer')

  <!-- Core  -->
  <script src="{{asset('asset/global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/jquery/jquery.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/popper-js/umd/popper.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/animsition/animsition.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/waves/waves.minfd53.js?v4.0.1')}}"></script>

  <!-- Plugins -->
  <script src="{{asset('asset/global/vendor/switchery/switchery.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/intro-js/intro.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/screenfull/screenfull.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1')}}"></script>

  <!-- Plugins For This Page -->
  <!-- <script src="{{asset('asset/global/vendor/chartist/chartist.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/jvectormap/jquery-jvectormap.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-enfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/peity/jquery.peity.minfd53.js?v4.0.1')}}"></script> -->

  <script src="{{asset('asset/global/vendor/aspaginator/jquery-asPaginator.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.js?v4.0.1')}}"></script>

  <!-- Scripts -->
  <script src="{{asset('asset/global/js/State.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Component.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Base.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Config.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/js/Section/Menubar.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/js/Section/GridMenu.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/js/Section/Sidebar.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/js/Section/PageAside.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/js/Plugin/menu.minfd53.js?v4.0.1')}}"></script>

  <!-- Config -->
  <script src="{{asset('asset/global/js/config/colors.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/js/config/tour.minfd53.js?v4.0.1')}}"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->

  <script src="{{asset('asset/js/Site.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/asscrollable.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/slidepanel.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/switchery.minfd53.js?v4.0.1')}}"></script>

  <!-- <script src="{{asset('asset/global/js/Plugin/matchheight.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/jvectormap.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/peity.minfd53.js?v4.0.1')}}"></script> -->

  <script src="{{asset('asset/global/js/Plugin/aspaginator.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/responsive-tabs.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/tabs.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/bootstrap-datepicker.minfd53.js?v4.0.1')}}"></script>
  <!-- <script src="{{asset('asset/examples/js/dashboard/v1.minfd53.js?v4.0.1')}}"></script>-c -->

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>