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
        <!-- Example Menu Pergantian API -->
        <div class="example-wrap">
            <h4 class="example-title">Menu Pergantian API</h4>
            <div class="example">
            <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                <ul class="nav nav-tabs nav-tabs-solid" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#tabsFacebook" aria-controls="tabsFacebook"
                    role="tab">
                    <i class="icon md-facebook" aria-hidden="true"></i>
                    Facebook
                </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#tabsInstagram" aria-controls="tabsInstagram"
                    role="tab">
                    <i class="icon md-instagram" aria-hidden="true"></i>
                    Instagram
                </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#tabsTwitter" aria-controls="tabsTwitter"
                    role="tab">
                    <i class="icon md-twitter" aria-hidden="true"></i>
                    Twitter
                </a>
                </li>
                </ul>
                <div class="tab-content" style="padding:15px 50px 0 50px">
                <div class="tab-pane active" id="tabsFacebook" role="tabpanel">
                    <form autocomplete="off">
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" value="Facebook" />
                            <label class="floating-label">Secrect Key</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Key</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Secrect Token</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Token</label>
                        </div>
                        <div class="example example-buttons">
                            <button type="button" class="btn btn-success float-right ladda-button" data-style="expand-left"
                                data-plugin="ladda">
                                <span class="ladda-label">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="tabsInstagram" role="tabpanel">
                    <form autocomplete="off">
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" value="Instagram" />
                            <label class="floating-label">Secrect Key</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Key</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Secrect Token</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Token</label>
                        </div>
                        <div class="example example-buttons">
                            <button type="button" class="btn btn-success float-right ladda-button" data-style="expand-left"
                                data-plugin="ladda">
                                <span class="ladda-label">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="tabsTwitter" role="tabpanel">
                    <form autocomplete="off">
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" value="Twitter" />
                            <label class="floating-label">Secrect Key</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Key</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Secrect Token</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="inputFloatingText" />
                            <label class="floating-label">Token</label>
                        </div>
                        <div class="example example-buttons">
                        <button type="button" class="btn btn-success float-right ladda-button" data-style="expand-left"
                            data-plugin="ladda">
                            <span class="ladda-label">Update</span>
                        </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Example Menu Pergantian API -->
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
  <script src="{{asset('asset/global/vendor/jquery-placeholder/jquery.placeholder.minfd53.js?v4.0.1')}}"></script>

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

  <script src="{{asset('asset/global/js/Plugin/material.minfd53.js?v4.0.1')}}"></script>

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

</body>

</html>
