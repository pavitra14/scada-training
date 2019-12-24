<header class="main-header">
    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>CAD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ECAD</b>Solutions</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                  @if (auth()->user()->display_picture != '')
                  <img src="{{ auth()->user()->display_picture }}" class="img-circle" alt="User Image">

                  @else
                  <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="img-circle" alt="User Image">

                  @endif

                <p>
                  {{auth()->user()->name}} - {{auth()->user()->user_type()}}
                  <small>Member since {{date('d M Y', strtotime(auth()->user()->created_at))}}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                {{-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> --}}
                <div class="pull-right">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
