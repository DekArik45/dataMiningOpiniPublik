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
  <link rel="stylesheet" href="{{asset('asset/global/vendor/jsgrid/jsgrid.minfd53.css?v4.0.1')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{asset('asset/examples/css/pages/user.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/examples/css/uikit/buttons.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/examples/css/tables/jsgrid.minfd53.css?v4.0.1')}}">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{asset('asset/global/vendor/datatables.net-bs4/dataTables.bootstrap4.minfd53.css?v4.0.1')}}">
  <!-- <link rel="stylesheet" href="../../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="../../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.minfd53.css?v4.0.1"> -->
  <link rel="stylesheet" href="{{asset('asset/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.minfd53.css?v4.0.1')}}">
  <link rel="stylesheet" href="{{asset('asset/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.minfd53.css?v4.0.1')}}">
  
  <link rel="stylesheet" href="{{asset('asset/global/vendor/bootstrap-select/bootstrap-select.minfd53.css?v4.0.1')}}">

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
        <div class="panel-body container-fluid">
          <div class="btn-group hidden-sm-down" id="exampleToolbar" role="group">
            <button type="button" class="btn btn-info btn-icon" data-target="#examplePositionCenter" data-toggle="modal">
              <i class="icon md-plus" aria-hidden="true"></i> Tambah User
            </button>
          </div>
          <div class="example table-responsive">
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Tipe User</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->username}}</td>
                  <td>{{$item->tipe_user}}</td>
                  <td class="text-nowrap">
                    <a class="btn btn-danger btn-icon" href="/delete-user/{{$item->id_user}}">
                      <i class="icon md-delete" style="color: white;" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- End Panel -->

    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  @include('layouts.footer')

  <!-- Modal -->
  <!-- Modal -->
  <div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter"
    role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">Tambah User</h4>
        </div>
        <form autocomplete="off" action="user" method="POST">
          @csrf
          <div class="modal-body">
            <div class="panel-body container-fluid">
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nama" />
                <label class="floating-label">Nama</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="username" />
                <label class="floating-label">Username</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="password" />
                <label class="floating-label">Password</label>
              </div>
              {{-- <div class="example-wrap"> --}}
                <p style="margin-bottom: -15px; color: #000000;">Tipe User</p>
                <div class="example">
                  <select data-plugin="selectpicker" name="tipe_user">
                    <option value="pegawai">Pegawai</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
              {{-- </div> --}}
            </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button> -->
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal -->

  
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

  <script src="{{asset('asset/global/vendor/datatables.net/jquery.dataTablesfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-bs4/dataTables.bootstrap4fd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-scroller/dataTables.scroller.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-responsive/dataTables.responsive.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-buttons/dataTables.buttons.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-buttons/buttons.html5.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-buttons/buttons.flash.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-buttons/buttons.print.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-buttons/buttons.colVis.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/asrange/jquery-asRange.minfd53.js?v4.0.1')}}"></script>
  <script src="{{asset('asset/global/vendor/bootbox/bootbox.minfd53.js?v4.0.1')}}"></script>
  
  <script src="{{asset('asset/global/vendor/bootstrap-select/bootstrap-select.minfd53.js?v4.0.1')}}"></script>

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

  <script src="{{asset('asset/global/js/Plugin/datatables.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/examples/js/tables/datatable.minfd53.js?v4.0.1')}}"></script>

  <script src="{{asset('asset/global/js/Plugin/bootstrap-select.minfd53.js?v4.0.1')}}"></script>

  <!-- ChartJS -->
  <script src="{{asset('asset2/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- jQuery -->
  <script src="{{asset('asset/global/js/Plugin/material.minfd53.js?v4.0.1')}}"></script>
  

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>
