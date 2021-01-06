<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-category">Menu</li>

            @if (Auth::user()->is_admin==0)
              <li class="site-menu-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a href="{{ url('/home') }}">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                </a>
              </li>
              <li class="site-menu-item {{ (request()->is('tracking')) ? 'active' : '' }}">
                <a href="{{ url('tracking') }}">
                    <i class="site-menu-icon md-assignment" aria-hidden="true"></i>
                    <span class="site-menu-title">Tracking</span>
                    <!-- <span class="site-menu-arrow"></span> -->
                </a>
              </li>
              {{-- <li class="site-menu-item {{ (request()->is('api')) ? 'active' : '' }}">
                <a href="{{ url('api') }}">
                  <i class="site-menu-icon md-fire" aria-hidden="true"></i>
                  <span class="site-menu-title">API</span>
                  <!-- <span class="site-menu-arrow"></span> -->
                </a>
              </li>  --}}
            @else
              <li class="site-menu-item {{ (request()->is('admin/home')) ? 'active' : '' }}">
                <a href="{{ url('/admin/home') }}">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                </a>
              </li>
              <li class="site-menu-item has-sub {{ (request()->is('keyword','katadasar','sentiment','stopword','user')) ? 'active open' : '' }}">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon md-dns" aria-hidden="true"></i>
                    <span class="site-menu-title">Master Data</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item {{ (request()->is('keyword')) ? 'active' : '' }}">
                    <a href="{{ url('keyword') }}">
                      <i class="site-menu-icon md-key" aria-hidden="true"></i>
                      <span class="site-menu-title">Kata Kunci</span>
                    </a>
                  </li>
                  <li class="site-menu-item {{ (request()->is('sentiment')) ? 'active' : '' }}">
                    <a href="{{ url('sentiment') }}">
                      <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                      <span class="site-menu-title">Sentimen</span>
                    </a>
                  </li>
                  <li class="site-menu-item {{ (request()->is('stopword')) ? 'active' : '' }}">
                    <a href="{{ url('stopword') }}">
                      <i class="site-menu-icon md-file" aria-hidden="true"></i>
                      <span class="site-menu-title">Kata Hubung</span>
                    </a>
                  </li>
                  <li class="site-menu-item {{ (request()->is('user')) ? 'active' : '' }}">
                    <a href="{{ url('user') }}">
                      <i class="site-menu-icon md-account-add" aria-hidden="true"></i>
                      <span class="site-menu-title">User</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item {{ (request()->is('tracking')) ? 'active' : '' }}">
                <a href="{{ url('tracking') }}">
                    <i class="site-menu-icon md-assignment" aria-hidden="true"></i>
                    <span class="site-menu-title">Tracking</span>
                    <!-- <span class="site-menu-arrow"></span> -->
                </a>
              </li>
              {{-- <li class="site-menu-item {{ (request()->is('api')) ? 'active' : '' }}">
                <a href="{{ url('api') }}">
                  <i class="site-menu-icon md-fire" aria-hidden="true"></i>
                  <span class="site-menu-title">API</span>
                  <!-- <span class="site-menu-arrow"></span> -->
                </a>
              </li> --}}
            @endif

            {{-- <li class="site-menu-item">

              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="site-menu-icon md-power" aria-hidden="true"></i>
                  <span class="site-menu-title">Logout</span>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              
            </li> --}}
          </ul>
        </div>
      </div>
    </div>

<!-- bawah menu -->
    {{-- <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Logout" style="width: 100%;">
        <span class="icon md-power" aria-hidden="true"></span>
      </a>
    </div> --}}
<!-- bawah menu -->
  </div>

  <div class="site-gridmenu">
    <div>
      <div>
        <ul>
          <li>
            <a href="apps/mailbox/mailbox.html">
                <i class="icon md-email"></i>
                <span>Mailbox</span>
              </a>
          </li>
          <li>
            <a href="apps/calendar/calendar.html">
                <i class="icon md-calendar"></i>
                <span>Calendar</span>
              </a>
          </li>
          <li>
            <a href="apps/contacts/contacts.html">
                <i class="icon md-account"></i>
                <span>Contacts</span>
              </a>
          </li>
          <li>
            <a href="apps/media/overview.html">
                <i class="icon md-videocam"></i>
                <span>Media</span>
              </a>
          </li>
          <li>
            <a href="apps/documents/categories.html">
                <i class="icon md-receipt"></i>
                <span>Documents</span>
              </a>
          </li>
          <li>
            <a href="apps/projects/projects.html">
                <i class="icon md-image"></i>
                <span>Project</span>
              </a>
          </li>
          <li>
            <a href="apps/forum/forum.html">
                <i class="icon md-comments"></i>
                <span>Forum</span>
              </a>
          </li>
          <li>
            <a href="index.html">
                <i class="icon md-view-dashboard"></i>
                <span>Dashboard</span>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>