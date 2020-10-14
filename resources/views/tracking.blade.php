<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Opini Publik">
  <meta name="author" content="F4">

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
        <div class="panel-body container-fluid" style="height: auto; padding-bottom:0">
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
                    <ul class="list-group">
                        <li class="list-group-item">
                        <div class="media">
                            <div class="pr-0 pr-sm-20 align-self-center">
                            <div class="avatar avatar-online">
                                <img src="{{asset('asset/global/portraits/1.jpg')}}" alt="...">
                                <i class="avatar avatar-busy"></i>
                            </div>
                            </div>
                            <div class="media-body align-self-center">
                            <h5 class="mt-0 mb-5">
                                Nama nya
                                <small>12 Juli 2020</small>
                            </h5>
                            <p>
                                ...ini tempat teks...
                            </p>
                            <p>
                                <i class="icon icon-color md-pin" aria-hidden="true"></i>
                                Lokasi
                            </p>
                            <div>
                                <a class="text-action" href="javascript:void(0)">
                                <i class="icon icon-color md-thumb-up" aria-hidden="true"></i>
                                </a>
                                
                            </div>
                            </div>
                            <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="button">
                                <i class="icon md-tag text" aria-hidden="true"></i>
                                <span class="text">Track</span>
                                <i class="icon md-check text-active" aria-hidden="true"></i>
                                <span class="text-active">Tracked</span>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="button">
                                <i class="icon md-book text" aria-hidden="true"></i>
                                <span class="text">Pin</span>
                                <i class="icon md-bookmark text-active" aria-hidden="true"></i>
                                <span class="text-active">Unpin</span>
                            </button>
                            </div>
                        </div>
                        </li>
                    </ul>
                    <nav>
                        <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                    </nav>
                    </div>

                    <div class="tab-pane animation-fade" id="instagram_data" role="tabpanel">
                    <ul class="list-group">
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
                    </ul>
                    <nav>
                        <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                    </nav>
                    </div>

                    <div class="tab-pane animation-fade" id="twitter_data" role="tabpanel">
                    <ul class="list-group">
                        <li class="list-group-item">
                        <div class="media">
                            <div class="pr-0 pr-sm-20 align-self-center">
                            <div class="avatar avatar-online">
                                <img src="{{asset('asset/global/portraits/8.jpg')}}" alt="...">
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

  <!-- ChartJS -->
  <script src="{{asset('asset2/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- jQuery -->
  <script src="{{asset('asset2/plugins/jquery/jquery.min.js')}}"></script>


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

  <!-- page script -->
  <script>
    $(function () {
      /* ChartJS
      * -------
      * Here we will create a few charts using ChartJS
      */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

      var areaChartData = {
        labels  : ['Positif', 'Negatif', 'Netral'],
        datasets: [
          {
            label               : 'Facebook',
            backgroundColor     : 'rgba(59,89,152,0.9)',
            borderColor         : 'rgba(59,89,152,0.8)',
            pointRadius          : false,
            pointColor          : '#3b5998',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40]
          },
          {
            label               : 'Instagram',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80]
          },
          {
            label               : 'Twitter',
            backgroundColor     : 'rgba(85,172,238,0.9)',
            borderColor         : 'rgba(85,172,238,0.8)',
            pointRadius          : false,
            pointColor          : '#55acee',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40]
          },
        ]
      }

      var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines : {
              display : false,
            }
          }],
          yAxes: [{
            gridLines : {
              display : false,
            }
          }]
        }
      }

      // This will get the first returned node in the jQuery collection.
      var areaChart       = new Chart(areaChartCanvas, { 
        type: 'line',
        data: areaChartData, 
        options: areaChartOptions
      })

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
      var lineChartData = jQuery.extend(true, {}, areaChartData)
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false

      var lineChart = new Chart(lineChartCanvas, { 
        type: 'line',
        data: lineChartData, 
        options: lineChartOptions
      })

      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'Positif', 
            'Negatif',
            'Netral', 
        ],
        datasets: [
          {
            data: [700,500,100],
            backgroundColor : ['#00a65a', '#f56954', '#d2d6de'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions      
      })

      //-------------
      //- PIE CHART 1 -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieData        = donutData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })

      //-------------
      //- PIE CHART 2 -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
      var pieData        = donutData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart2 = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })

      //-------------
      //- PIE CHART 3 -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
      var pieData        = donutData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart3 = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = jQuery.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      var temp2 = areaChartData.datasets[2]
      barChartData.datasets[0] = temp0
      barChartData.datasets[1] = temp1
      barChartData.datasets[2] = temp2

      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }

      var barChart = new Chart(barChartCanvas, {
        type: 'bar', 
        data: barChartData,
        options: barChartOptions
      })

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = jQuery.extend(true, {}, barChartData)

      var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

      var stackedBarChart = new Chart(stackedBarChartCanvas, {
        type: 'bar', 
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })
    })
  </script>
</body>

</html>
