<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <p class="nav-link m-0"><i class="fa fa-user"></i>&nbsp {{ Auth::user()->name ?? '' }} </p>
      </li>
      @if(Auth::user()->utype == "ADM")
        <li class="nav-item">
          <a href="{{ route('notifications') }}" class="nav-link m-0">
          <i class="fa fa-bell"><span class="badge badge-warning navbar-badge" style="margin-bottom:5px"><i class="fa fa-exclamation"></i></span></i>
          </a>
        </li>
      @endif
    </ul>

  

  </nav>
  <!-- /.navbar -->

  </nav>
  <!-- /.navbar -->
