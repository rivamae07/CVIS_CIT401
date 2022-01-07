<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top" style="padding-top:13px; padding-bottom:13px;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        @if(Auth::user()->utype == "ADM")
          <p class="nav-link m-0"><i class="fa fa-clinic-medical"></i>&nbsp; Super Admin Side</p>
        @endif
        @if(Auth::user()->utype == "CHV")
          <p class="nav-link m-0"><i class="fa fa-clinic-medical"></i>&nbsp; San Pedro City Hall - Vaccine Center</p>
        @endif
        @if(Auth::user()->utype == "MCV")
          <p class="nav-link m-0"><i class="fa fa-clinic-medical"></i>&nbsp; Mobile Vaccine Center</p>
        @endif
      </li>
      
      @if(Auth::user()->utype == "ADM")
      <li class="nav-item">
          <a href="{{ route('organizations') }}" class="nav-link m-0">
          <i class="fa fa-sitemap"></i>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{ route('charts') }}" class="nav-link m-0">
          <i class="fa fa-chart-pie"></i>
          </a>
      </li>
        <li class="nav-item">
          <a href="{{ route('notifications') }}" class="nav-link m-0">
          <i class="fa fa-bell"><span class="badge badge-warning navbar-badge" style="margin-bottom:5px"><i class="fa fa-exclamation"></i></span></i>
          </a>
        </li>
      @endif

      <li class="nav-item">
        <a href="{{ route('2fa') }}" class="nav-link m-0">
        @if (! auth()->user()->two_factor_secret )
        <p class="text-danger"><i class="fa fa-key"></i>&nbsp;2FA disabled</p>
        @else
        <p class="text-success"><i class="fa fa-key"></i>&nbsp;2FA enabled</p>
        @endif
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  </nav>
  <!-- /.navbar -->
