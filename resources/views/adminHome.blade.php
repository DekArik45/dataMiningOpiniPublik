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
    .slidegone {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:15px;width:15px;padding:0}
    .w3-left, .w3-right {height:15px;width:15px;margin-bottom:35px}
  </style>

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

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
  <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</head>
<body class="animsition page-user">

    @include('layouts.navbar')

    @include('layouts.sitemenu')

    
  <!-- Page -->
  <div class="page">
    <div class="page-content">

      @include('flash-message')

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
              <h4 class="example-title" style="margin-bottom:10px">Kata Kunci</h4>
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
                    data-maxboostedstep="10000000" value="" />
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

                    </ul>
                    <nav>
                      <ul id="paginatorFB" >
                        {{-- <li><a href="#" onclick="prevFb('.facebook-group-list-item','.search-post-button','{{ asset('') }}')">prev</a></li> --}}
                        <li><button type="button" onclick="nextFb('.facebook-group-list-item','.search-post-button','{{ asset('') }}')">Load More</button></li>
                      </ul>
                    </nav>
                  </div>

                  <div class="tab-pane animation-fade" id="instagram_data" role="tabpanel">
                    <ul class="list-group instagram-group-list-item">
                      
                    </ul>
                    <nav>
                      <ul id="paginatorIG" >
                        {{-- <li><a href="#" onclick="prevIg('.instagram-group-list-item','.search-post-button','{{ asset('') }}')">prev</a></li> --}}
                        <li><button type="button" onclick="nextIg('.instagram-group-list-item',' .search-post-button','{{ asset('') }}')">Load More</button></li>
                      </ul>
                    </nav>
                  </div>

                  <div class="tab-pane animation-fade" id="twitter_data" role="tabpanel">
                    <ul class="list-group twitter-group-list-item">
                    </ul>
                    <nav>
                      <ul id="paginatorTwitter" >
                        
                        {{-- <li><a href="#" onclick="prevTwitter('.twitter-group-list-item','.search-post-button','{{ asset('') }}')">prev</a></li> --}}
                        <li><button type="button" onclick="nextTwitter('.twitter-group-list-item','.search-post-button','{{ asset('') }}')">Load More</button></li>
                      </ul>
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

  <script>

    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 10000);
  </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

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
    
  </script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
    var assetBaseUrl = "{{ asset('') }}";
    getTotalSentiment("", "", "", "");
    getPostFb(".facebook-group-list-item",".search-post-button","", "", "", "", assetBaseUrl,0);
    getPostTwitter(".twitter-group-list-item",".search-post-button","", "", "", "", assetBaseUrl,0);
    getPostIg(".instagram-group-list-item",".search-post-button","", "", "", "", assetBaseUrl,0);

    $(".search-post-button").click(function(){
      keyword = $("#keyword").val();
      tgl_dari = $("#tgl_dari").val();
      tgl_sampai = $("#tgl_sampai").val();
      count = $("#jumlah_data").val();

      getPostTwitter(".twitter-group-list-item",".search-post-button",keyword, tgl_dari, tgl_sampai, count, assetBaseUrl,0);
      getPostIg(".instagram-group-list-item",".search-post-button",keyword, tgl_dari, tgl_sampai, count, assetBaseUrl,0);
      getPostFb(".facebook-group-list-item",".search-post-button",keyword, tgl_dari, tgl_sampai, count, assetBaseUrl,0);
      getTotalSentiment(keyword, tgl_dari, tgl_sampai, count);
    });

    
  </script>

  <!-- page script -->
  <script>
  </script>
</body>

</html>
