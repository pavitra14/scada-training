<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            @if (auth()->user()->display_picture != '')
            <img src="{{ auth()->user()->display_picture }}" class="img-circle" alt="User Image">

            @else
            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="img-circle" alt="User Image">

            @endif
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="{{ Route::currentRouteNamed('resources') ? 'active' : '' }}">
            <a href="{{route('resources')}}">
              <i class="fa fa-folder-open"></i> <span>Student Resources</span>
            </a>
        </li>
        <li class="{{ Route::currentRouteNamed('downloads') ? 'active' : '' }}">
            <a href="{{route('downloads')}}">
              <i class="fa fa-download"></i> <span>Download Section</span>
            </a>
        </li>
        <li class="{{ Route::currentRouteNamed('jobs') ? 'active' : '' }}">
            <a href="{{route('jobs')}}">
              <i class="fa fa-briefcase"></i> <span>Careers</span>
            </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
