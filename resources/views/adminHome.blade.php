<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Opini Publik">
  <meta name="author" content="F4">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Opini Publik</title>

  <link rel="apple-touch-icon" href="{{asset('asset/images/Lambang Daerah Provinsi Bali.png')}}">
  <link rel="shortcut icon" href="{{asset('asset/images/Lambang Daerah Provinsi Bali.png')}}">

  <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:15px;width:15px;padding:0}
    .w3-left, .w3-right {height:15px;width:15px;margin-bottom:35px}
  </style>

  <link rel="stylesheet" href="{{asset('asset/css/w3.css')}}">

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
  <link rel="stylesheet" href="{{asset('asset/global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/bootstrap-touchspin/bootstrap-touchspin.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/ladda/ladda.minfd53.css?v4.0.1')}}">
  
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('asset/examples/css/pages/user.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/examples/css/uikit/buttons.minfd53.css?v4.0.1')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{asset('asset/global/fonts/material-design/material-design.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1')}}">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">

  <!-- Scripts -->
  <script src="{{asset('asset/global/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition page-user">

    @include('layouts.navbar')

    @include('layouts.sitemenu')
    
  <!-- Page -->
  <div class="page">
    <div class="page-content">
      <!-- Panel 1 -->
      <div class="panel">
        <div class="panel-body container-fluid" style="height: auto; padding-bottom:0">
          <form class="page-search-form" role="search">

            <!-- <div class="input-search input-search-dark" style="margin-bottom:10px">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Search Users">
              <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
            </div> -->

            <div class="example-wrap" style="margin-bottom:10px">
              <h4 class="example-title" style="margin-bottom:10px">Keyword</h4>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="keyword" name="" placeholder="Cari Topik...">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default disabled"><i class="icon md-search" aria-hidden="true"></i></button>
                    </span>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="input-search">
                    <button type="submit" class="input-search-btn"><i class="icon md-search" aria-hidden="true"></i></button>
                    <input type="text" class="form-control" name="" placeholder="Search...">
                  </div>
                </div> -->
            </div>

            <div class="row">
                <div class="col-sm-6">
                  <div class="example-wrap" style="margin-bottom:10px">
                    <h4 class="example-title" style="margin-bottom:-5px">Rentang Hari</h4>
                      <div class="example">
                          <div class="input-daterange" data-plugin="datepicker">
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="icon md-calendar" aria-hidden="true"></i>
                                </span>
                                <input type="text" id="tgl_dari" class="form-control" name="start" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">to</span>
                                <input type="text" class="form-control" id="tgl_sampai" name="end" />
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="example-wrap" style="margin-bottom:10px">
                      <h4 class="example-title" style="margin-bottom:-5px">Jumlah Postingan</h4>
                      <div class="example">
                      <input type="text" class="form-control" id="jumlah_data" name="touchSpinPrefix" data-plugin="TouchSpin"
                    data-min="-1000000000" data-max="1000000000" data-stepinterval="50"
                    data-maxboostedstep="10000000" value="0" />
                      </div>
                  </div>
                </div>
            </div>

            <div class="example example-buttons" style="margin-bottom:0">
              <button type="button" class="btn btn-primary float-right ladda-button search-post-button" data-style="slide-left">
                <span class="ladda-label"><i class="icon md-search mr-10 "  aria-hidden="true"></i>Telusuri Topik</span>
              </button>
            </div>


        </div>
      </div>
      <!-- End Panel -->

      <!-- Panel 2 -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">

            <div class="col-lg-6 col-xl-4" style="display: none !important">
              <!-- Area -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title">Pie</h4>
                <div class="example text-center max-width">
                <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End Area -->
            </div>

            <div class="col-lg-6 col-xl-4" style="display: none !important">
              <!-- Donut -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title">Pie</h4>
                <div class="example text-center max-width">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End Donut -->
            </div>

            <div class="col-lg-6 col-xl-4" style="display: none !important">
              <!-- Line -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title">Pie</h4>
                <div class="example text-center max-width">
                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End Line -->
            </div>

            <div class="col-12">
              <!-- FB -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title">Data Perbandigan Masing-Masing Sosial Media</h4>
                <div class="example text-center max-width">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End FB -->
            </div>

            <div class="col-lg-6 col-xl-4">
              <!-- FB -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title"><i class="icon bd-facebook" aria-hidden="true"></i> FACEBOOK</h4>
                <div class="example text-center max-width">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End FB -->
            </div>

            <div class="col-lg-6 col-xl-4">
              <!-- IG -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title"><i class="icon bd-instagram" aria-hidden="true"></i> INSTAGRAM</h4>
                <div class="example text-center max-width">
                  <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End IG -->
            </div>

            <div class="col-lg-6 col-xl-4">
              <!-- Twitter -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title"><i class="icon bd-twitter" aria-hidden="true"></i> TWITTER</h4>
                <div class="example text-center max-width">
                  <canvas id="pieChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- End Twitter -->
            </div>

            <div class="col-12">
              <div class="nav-tabs-horizontal nav-tabs-animate" data-plugin="tabs">
                <div class="dropdown page-user-sortlist">
                  Urutkan: <a class="dropdown-toggle inline-block" data-toggle="dropdown"
                    href="#" aria-expanded="false">Waktu</a>
                  <div class="dropdown-menu animation-scale-up animation-top-right animation-duration-250"
                    role="menu">
                    <a class="active dropdown-item" href="javascript:void(0)">Waktu</a>
                    <a class="dropdown-item" href="javascript:void(0)">Username</a>
                    <a class="dropdown-item" href="javascript:void(0)">Lokasi</a>
                    <a class="dropdown-item" href="javascript:void(0)">Jumlah Like</a>
                  </div>
                </div>

                <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                  <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#facebook_data"
                      aria-controls="facebook_data" role="tab">Facebook</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#instagram_data" aria-controls="instagram_data"
                      role="tab">Instagram</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#twitter_data" aria-controls="twitter_data"
                      role="tab">Twitter</a></li>
                  <li class="dropdown nav-item" role="presentation">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Media Sosial</a>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" data-toggle="tab" href="#facebook_data" aria-controls="facebook_data"
                        role="tab">Facebook</a>
                      <a class="active dropdown-item" data-toggle="tab" href="#instagram_data" aria-controls="instagram_data"
                        role="tab">Instagram</a>
                      <a class="dropdown-item" data-toggle="tab" href="#twitter_data" aria-controls="twitter_data"
                        role="tab">Twiiter</a>
                    </div>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane animation-fade active" id="facebook_data" role="tabpanel">
                    <ul class="list-group facebook-group-list-item">
                      
                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-0 pr-sm-20 align-self-center">
                            <div class="avatar avatar-online">
                              <img src="{{asset('asset/global/portraits/13.jpg')}}" alt="...">
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
                            <div class="avatar avatar-online">
                              <img src="{{asset('asset/global/portraits/13.jpg')}}" alt="...">
                              <i class="avatar avatar-busy"></i>
                            </div>
                          </div>
                          <div class="media-body align-self-center">
                            <h5 class="mt-0 mb-5" style="display:inline-block;">
                              Nama
                            </h5>
                            <p style="float:right; display:inline-block;">
                              <small>tgl</small> &nbsp&nbsp&nbsp&nbsp <small>jam</small></p>
                            <pre style="width: 100%;border: 0px;overflow-x: hidden !important; white-space: pre-wrap;white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"><p class="content-post"> 
                             teks
                             teks
                            </p></pre>
                            <p>
                              <i class="icon icon-color md-pin" aria-hidden="true"></i> lokasi
                            </p>
                              <i class="icon icon-color md-thumb-up" aria-hidden="true"></i> likes
                          </div>
                          <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                            <button type="button" style="width: 100%" onclick="" class="btn btn-primary btn-sm active" data-toggle="button">
                              <i class="icon md-tag text" aria-hidden="true"></i>
                              <span class="text">Track</span>
                              <i class="icon md-check text-active" aria-hidden="true"></i>
                              <span class="text-active">Tracked</span>
                            </button>
                            {{-- <button type="button" class="btn btn-success btn-sm" data-toggle="button">
                              <i class="icon md-book text" aria-hidden="true"></i>
                              <span class="text">Pin</span>
                              <i class="icon md-bookmark text-active" aria-hidden="true"></i>
                              <span class="text-active">Unpin</span>
                            </button> --}}
                            <div style="margin:10px; text-align: center;">
                              <p style="font-size:12px; margin-bottom:-5px;">Sentiment</p>
                              <p style="font-size:25px; font-weight: bold; color: red;"> Negatif 35 </p>
                            </div>
                          </div>
                        </div>

                        <div class="example">
                          <div class="panel-group panel-group-simple mb-0" id="exampleAccordion" aria-multiselectable="true" role="tablist">

                            <div class="panel">
                              <div class="panel-heading" id="exampleHeadingThree" role="tab">
                                <a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse"
                                  href="#exampleCollapseThree" aria-controls="exampleCollapseThree"
                                  aria-expanded="false">
                                Tampilkan Media
                              </a>
                              </div>
                              <div class="panel-collapse collapse" id="exampleCollapseThree" aria-labelledby="exampleHeadingThree"
                                role="tabpanel">
                                <div class="panel-body">

                                  <div class="w3-content w3-display-container" style="max-width:800px">
                                    <img class="mySlides" src="{{asset('asset/examples/images/login-backup.jpg')}}" style="width:100%">
                                    <img class="mySlides" src="{{asset('asset/examples/images/login.jpg')}}" style="width:100%">
                                    <img class="mySlides" src="{{asset('asset/examples/images/login-backup.jpg')}}" style="width:100%">
                                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                                      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                                      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                                      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                                    </div>
                                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-middle" style="width:100%">
                                      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                                      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                      </li>

                    </ul>
                    <nav>
                      <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                    </nav>
                  </div>

                  <div class="tab-pane animation-fade" id="instagram_data" role="tabpanel">
                    <ul class="list-group instagram-group-list-item">
                      
                    </ul>
                    <nav>
                      <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                    </nav>
                  </div>

                  <div class="tab-pane animation-fade" id="twitter_data" role="tabpanel">
                    <ul class="list-group twitter-group-list-item">
                    </ul>
                    <nav>
                      <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- End Panel -->

    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  @include('layouts.footer')

  <!-- jQuery -->
  <script src="{{asset('asset2/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{asset('myjs/myscript.js')}}"></script>
  
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
  <script src="{{asset('asset/global/vendor/aspaginator/jquery-asPaginator.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/bootstrap-touchspin/bootstrap-touchspin.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/ladda/spin.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/ladda/ladda.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/raphael/raphael.minfd53.js?v4.0.1')}}"></script>

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
    Config.set('assets', '../assets');
  </script>

  <!-- Page -->
  <script src="{{asset('asset/js/Site.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/asscrollable.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/slidepanel.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/switchery.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/aspaginator.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/responsive-tabs.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/tabs.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/bootstrap-datepicker.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/bootstrap-touchspin.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/loading-button.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/more-button.minfd53.js?v4.0.1')}}"></script>
  
  <script src="{{asset('asset/global/js/Plugin/ladda.minfd53.js?v4.0.1')}}"></script>

  <!-- ChartJS -->
  <script src="{{asset('asset2/plugins/chart.js/Chart.min.js')}}"></script>


  <script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }
  </script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);

    $(".search-post-button").click(function(){
      keyword = $("#keyword").val();
      tgl_dari = $("#tgl_dari").val();
      tgl_sampai = $("#tgl_sampai").val();
      count = $("#jumlah_data").val();

      getPost(".twitter-group-list-item",".facebook-group-list-item",".instagram-group-list-item",".search-post-button",keyword, tgl_dari, tgl_sampai, count);
    });

    
  </script>

  <!-- page script -->
  <script>
  </script>
</body>

</html>
