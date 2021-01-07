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
  <!-- <link rel="stylesheet" href="{{asset('asset/global/vendor/morris/morris.minfd53.css?v4.0.1')}}"> -->
  
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('asset/examples/css/pages/user.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/examples/css/uikit/buttons.minfd53.css?v4.0.1')}}">
  <!-- <link rel="stylesheet" href="{{asset('asset/examples/css/charts/chartjs.minfd53.css?v4.0.1')}}"> -->

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
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('layouts.navbar')

    @include('layouts.sitemenu')
    

  <!-- Page -->
  <div class="page">
    <div class="page-content">
      <!-- Panel 1 -->
      <div class="panel">
        {{-- @foreach ($data as $item)
      </br>{{$item->id_post}}
            @foreach ($item->tracking as $value)
                {{$value->id_tracking}}
            @endforeach
        @endforeach --}}
        <div class="panel-body container-fluid">
          <form class="page-search-form" role="search">

            <div class="input-search input-search-dark" style="margin-bottom:10px">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Search Users">
              <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
            </div>

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
      <!-- End Panel -->

    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  @include('layouts.footer')

  <!-- jQuery -->
  <script src="{{asset('asset2/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{asset('myjs/tracking.js')}}"></script>
  
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
  <!-- <script src="{{asset('asset/global/vendor/morris/morris.minfd53.js?v4.0.1')}}"></script> -->
  <!-- <script src="{{asset('asset/global/vendor/chart-js/Chart.minfd53.js?v4.0.1')}}"></script> -->
  <script src="{{asset('asset/global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1')}}"></script>

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
  
  <!-- <script src="{{asset('asset/examples/js/charts/morris.minfd53.js?v4.0.1')}}"></script> -->

  <!-- <script src="{{asset('asset/examples/js/charts/chartjs.minfd53.js?v4.0.1')}}"></script> -->

  <script src="{{asset('asset/global/js/Plugin/responsive-tabs.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/closeable-tabs.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin/tabs.minfd53.js?v4.0.1')}}"></script>

  <!-- ChartJS -->
  <script src="{{asset('asset2/plugins/chart.js/Chart.min.js')}}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
    getPost(".twitter-group-list-item",".facebook-group-list-item",".instagram-group-list-item","");

    $(".search-post-button").click(function(){
      keyword = $("#keyword").val();
      tgl_dari = $("#tgl_dari").val();
      tgl_sampai = $("#tgl_sampai").val();
      count = $("#jumlah_data").val();

      getPost(".twitter-group-list-item",".facebook-group-list-item",".instagram-group-list-item",".search-post-button",keyword, tgl_dari, tgl_sampai, count);
    });

  </script>

</body>

</html>
