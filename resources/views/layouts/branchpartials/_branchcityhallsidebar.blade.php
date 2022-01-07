<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

    <div class="nav-item" style="margin:0px; padding:0px;">
        <a href="{{ route('cityhallDashboard') }}" class="d-block">&nbsp;&nbsp;&nbsp;<img width="10px" src="{{ asset('storage/images/favicon.png') }}">&nbsp;&nbsp;&nbsp; {{ Auth::user()->name ?? '' }}</a>
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
            <a href="{{ route('ADMcityhallDashboard') }}" class="nav-link {{ request()->is('ADM/cityhall/dashboard*') ? 'active' : '' }}">
          @elseif(Auth::user()->utype == "CHV")
            <a href="{{ route('cityhallDashboard') }}" class="nav-link {{ request()->is('cityhall/dashboard*') ? 'active' : '' }}">
          @endif
            <i class="fa fa-home"></i>
            <p>&nbsp Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          @if(Auth::user()->utype == "ADM")
            <a href="{{ route('ADMcityhallusers.index') }}" class="nav-link {{ request()->is('ADMcityhallusers*') ? 'active' : '' }}">
          @elseif(Auth::user()->utype == "CHV")
            <a href="{{ route('cityhallusers.index') }}" class="nav-link {{ request()->is('cityhallusers*') ? 'active' : '' }}">
          @endif
            <i class="fa fa-users"></i>
            <p>&nbsp Employees</p>
          </a>
        </li>

        <li class="nav-item">
          @if(Auth::user()->utype == "ADM")
            <a href="{{ route('ADMcityhallproducts.index') }}" class="nav-link {{ request()->is('ADMcityhallproducts*') ? 'active' : '' }}">
          @elseif(Auth::user()->utype == "CHV")
            <a href="{{ route('cityhallproducts.index') }}" class="nav-link {{ request()->is('cityhallproducts*') ? 'active' : '' }}">
          @endif
              <i class="fa fa-list"></i>
              <p>&nbsp Product Inventory</p>
            </a>
        </li>

        @if(Auth::user()->utype == "CHV")
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="fas fa-warehouse"></i>
            <p>&nbsp Stocks
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('cityhallrequest') }}" class="nav-link {{ request()->is('cityhall/requests') ? 'active' : '' }}">
                    <i class="fa fa-tags"></i>
                    <p>&nbsp Request Stock</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('cityhallsoldProduct') }}" class="nav-link {{ request()->is('cityhall/dispatched-products') ? 'active' : '' }}">
                  <i class="fa fa-tags"></i>
                    <p>&nbsp Dispatched Product</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('cityhallreturnProduct') }}" class="nav-link {{ request()->is('cityhall/return-products') ? 'active' : '' }}">
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
                    <a href="{{ route('ADMcityhallrequestHistory') }}" class="nav-link {{ request()->is('ADM/cityhall/requests/history') ? 'active' : '' }}">
                  @elseif(Auth::user()->utype == "CHV")
                    <a href="{{ route('cityhallrequestHistory') }}" class="nav-link {{ request()->is('cityhall/requests/history') ? 'active' : '' }}">
                  @endif
                    <i class="fa fa-history"></i>
                      <p>&nbsp Pending Requests</p>
                    </a>
                </li>

                <li class="nav-item">
                  @if(Auth::user()->utype == "ADM")
                    <a href="{{ route('ADMcityhallsoldProductHistory') }}" class="nav-link {{ request()->is('ADM/cityhall/dispatched-products/history') ? 'active' : '' }}">
                  @elseif(Auth::user()->utype == "CHV")
                    <a href="{{ route('cityhallsoldProductHistory') }}" class="nav-link {{ request()->is('cityhall/dispatched-products/history') ? 'active' : '' }}">
                  @endif
                    <i class="fa fa-history"></i>
                      <p>&nbsp Dispatched History</p>
                    </a>
                </li>
            </li>

              <li class="nav-item">
                @if(Auth::user()->utype == "ADM")
                  <a href="{{ route('ADMcityhallreturnProductHistory') }}" class="nav-link {{ request()->is('ADM/cityhall/return-products/history') ? 'active' : '' }}">
                @elseif(Auth::user()->utype == "CHV")
                  <a href="{{ route('cityhallreturnProductHistory') }}" class="nav-link {{ request()->is('cityhall/return-products/history') ? 'active' : '' }}">
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