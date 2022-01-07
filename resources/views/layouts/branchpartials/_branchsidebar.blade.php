<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

    <div class="nav-item" style="margin:0px; padding:0px;">
        <a href="{{ route('mobileDashboard') }}" class="d-block">&nbsp;&nbsp;&nbsp;<img width="10px" src="{{ asset('storage/images/favicon.png') }}">&nbsp;&nbsp;&nbsp; {{ Auth::user()->name ?? '' }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        @if(Auth::user()->utype == "ADM")
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                <i class="fa fa-store-alt"></i>
                <p>&nbsp Super Admin Dashboard</p>
              </a>
            </li>
        @endif
       
       <li class="nav-item">
          @if(Auth::user()->utype == "ADM")
            <a href="{{ route('ADMmobileDashboard') }}" class="nav-link {{ request()->is('ADM/mobile/dashboard*') ? 'active' : '' }}">
          @elseif(Auth::user()->utype == "MCV")
            <a href="{{ route('mobileDashboard') }}" class="nav-link {{ request()->is('mobile/dashboard*') ? 'active' : '' }}">
          @endif
            <i class="fa fa-home"></i>
            <p>&nbsp Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          @if(Auth::user()->utype == "ADM")
            <a href="{{ route('ADMmobileusers.index') }}" class="nav-link {{ request()->is('ADMmobileusers*') ? 'active' : '' }}">
          @elseif(Auth::user()->utype == "MCV")
            <a href="{{ route('mobileusers.index') }}" class="nav-link {{ request()->is('mobileusers*') ? 'active' : '' }}">
          @endif
            <i class="fa fa-users"></i>
            <p>&nbsp Employees</p>
          </a>
        </li>

        <li class="nav-item">
          @if(Auth::user()->utype == "ADM")
            <a href="{{ route('ADMmobileproducts.index') }}" class="nav-link {{ request()->is('ADMmobileproducts*') ? 'active' : '' }}">
          @elseif(Auth::user()->utype == "MCV")
            <a href="{{ route('mobileproducts.index') }}" class="nav-link {{ request()->is('mobileproducts*') ? 'active' : '' }}">
          @endif
              <i class="fa fa-list"></i>
              <p>&nbsp Product Inventory</p>
            </a>
        </li>

        @if(Auth::user()->utype == "MCV")
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="fas fa-warehouse"></i>
            <p>&nbsp Stocks
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('mobilerequest') }}" class="nav-link {{ request()->is('mobile/requests') ? 'active' : '' }}">
                    <i class="fa fa-tags"></i>
                    <p>&nbsp Request Stock</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('mobilesoldProduct') }}" class="nav-link {{ request()->is('mobile/dispatched-products') ? 'active' : '' }}">
                  <i class="fa fa-tags"></i>
                    <p>&nbsp Dispatched Product</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('mobilereturnProduct') }}" class="nav-link {{ request()->is('mobile/return-products') ? 'active' : '' }}">
                  <i class="fa fa-tags"></i>
                    <p>&nbsp Return Product</p>
                  </a>
              </li>
            </li>
          </ul>
          </li>
          @endif

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-chart-line"></i>
              <p>&nbsp Product Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                  @if(Auth::user()->utype == "ADM")
                  <a href="{{ route('ADMmobilerequestHistory') }}" class="nav-link {{ request()->is('ADM/mobile/requests/history') ? 'active' : '' }}">
                  @elseif(Auth::user()->utype == "MCV")
                    <a href="{{ route('mobilerequestHistory') }}" class="nav-link {{ request()->is('mobile/requests/history') ? 'active' : '' }}">
                  @endif
                    <i class="fa fa-history"></i>
                      <p>&nbsp Pending Requests</p>
                    </a>
                </li>

                <li class="nav-item">
                  @if(Auth::user()->utype == "ADM")
                    <a href="{{ route('ADMmobilesoldProductHistory') }}" class="nav-link {{ request()->is('ADM/mobile/dispatched-products/history') ? 'active' : '' }}">
                  @elseif(Auth::user()->utype == "MCV")
                    <a href="{{ route('mobilesoldProductHistory') }}" class="nav-link {{ request()->is('mobile/dispatched-products/history') ? 'active' : '' }}">
                  @endif
                    <i class="fa fa-history"></i>
                      <p>&nbsp Dispatched History</p>
                    </a>
                </li>
            </li>

              <li class="nav-item">
                @if(Auth::user()->utype == "ADM")
                  <a href="{{ route('ADMmobilereturnProductHistory') }}" class="nav-link {{ request()->is('ADM/mobile/return-products/history') ? 'active' : '' }}">
                @elseif(Auth::user()->utype == "MCV")
                  <a href="{{ route('mobilereturnProductHistory') }}" class="nav-link {{ request()->is('mobile/return-products/history') ? 'active' : '' }}">
                @endif
                    <i class="fa fa-history"></i>
                    <p>&nbsp Return History</p>
                  </a>
              </li>
          </ul>
        </li>

        <li class="nav-item">
        <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
              @csrf
                                
              <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <i class="fa fa-sign-out-alt"></i>
                    <p>&nbsp Log Out</p>
              </a>
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>