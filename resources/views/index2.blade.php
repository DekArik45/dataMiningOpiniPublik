<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/material/base/charts/morris.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 08:50:03 GMT -->
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
  <link rel="stylesheet" href="{{asset('asset/global/vendor/morris/morris.minfd53.css?v4.0.1')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{asset('asset/global/fonts/material-design/material-design.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1')}}">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">


  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js?v4.0.1"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js?v4.0.1"></script>
    <script src="../../global/vendor/respond/respond.min.js?v4.0.1"></script>
    <![endif]-->

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

    <div class="page-content container-fluid">
      <!-- Panel 2 -->
      <div class="panel" style="display: none !important;">
        <div class="panel-body">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Line -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title">Line</h4>
                <p>Use function: <code>Morris.Line(options)</code> to generate chart.</p>
                <div class="example">
                  <div id="exampleMorrisLine"></div>
                </div>
              </div>
              <!-- End Example Line -->
            </div>

            <div class="col-lg-6">
              <!-- Example Area -->
              <div class="example-wrap">
                <h4 class="example-title">Area</h4>
                <p>Create an area chart using: <code>Morris.Area(options)</code>.</p>
                <div class="example">
                  <div id="exampleMorrisArea"></div>
                </div>
              </div>
              <!-- End Example Area -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->

      <!-- Panel 3 -->
      <div class="panel">
        <div class="panel-body">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Bar -->
              <div class="example-wrap m-md-0">
                <h4 class="example-title">Bar</h4>
                <p>Create bar charts using <code>Morris.Bar(options)</code>.</p>
                <div class="example">
                  <div id="exampleMorrisBar"></div>
                </div>
              </div>
              <!-- End Example Bar -->
            </div>

            <div class="col-lg-6">
              <!-- Example Donut -->
              <div class="example-wrap">
                <h4 class="example-title">Donut</h4>
                <p>Create a Donut chart using <code>Morris.Donut(options)</code>.</p>
                <div class="example">
                  <div id="exampleMorrisDonut"></div>
                </div>
              </div>
              <!-- End Example Donut -->
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
  <script src="{{asset('asset/global/vendor/raphael/raphael.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/morris/morris.minfd53.js?v4.0.1')}}"></script>

  <!-- Scripts -->
  <script src="{{asset('asset/global/js/State.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Component.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Plugin.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Base.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/js/Config.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('assetsets/js/Section/Menubar.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('assetsets/js/Section/GridMenu.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('assetsets/js/Section/Sidebar.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('assetsets/js/Section/PageAside.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('assetsets/js/Plugin/menu.minfd53.js?v4.0.1')}}"></script>

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


  <script src="{{asset('asset/examples/js/charts/morris.minfd53.js?v4.0.1')}}"></script>


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