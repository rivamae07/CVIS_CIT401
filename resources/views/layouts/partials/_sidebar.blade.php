<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
      <div class="nav-item" style="margin:0px; padding:0px;">
        <a href="{{ route('dashboard') }}" class="d-block">&nbsp;&nbsp;&nbsp;<img width="10px" src="{{ asset('storage/images/favicon.png') }}">&nbsp;&nbsp;&nbsp; {{ Auth::user()->name ?? '' }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

       <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
            <i class="fa fa-home"></i>
            <p>&nbsp Dashboard</p>
          </a>
        </li>

      <li class="nav-item">
          <a href="{{ route('activityLogs') }}" class="nav-link {{ request()->is('activitylogs*') ? 'active' : '' }}">
            <i class="fa fa-newspaper"></i>
            <p>&nbsp Activity Logs</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link {{ request()->is('users*') ? 'active' : '' }}">
            <i class="fa fa-users"></i>
            <p>&nbsp Employees</p>
          </a>
        </li>

        <li class="nav-item">
        <a href="{{ route('requestHistory') }}" class="nav-link {{ request()->is('requests/history') ? 'active' : '' }}">
            <i class="fa fa-truck-loading"></i>
            <p>&nbsp Pending Requests</p>
          </a>
        </li>

        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="fas fa-tshirt"></i>
            <p>&nbsp Products
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('products.index') }}" class="nav-link {{ request()->is('products*') ? 'active' : '' }}">
                    <i class="fa fa-list"></i>
                    <p>&nbsp Product Inventory</p>
                  </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link {{ request()->is('categories*') ? 'active' : '' }}">
                  <i class="fa fa-list"></i>
                  <p>&nbsp Categories</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('brands.index') }}" class="nav-link {{ request()->is('brands*') ? 'active' : '' }}">
                    <i class="fa fa-list"></i>
                    <p>&nbsp Brands</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('sizes.index') }}" class="nav-link {{ request()->is('sizes*') ? 'active' : '' }}">
                    <i class="fa fa-list"></i>
                    <p>&nbsp Sizes</p>
                  </a>
              </li>
          </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="fas fa-warehouse"></i>
            <p>&nbsp Stocks
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('stock') }}" class="nav-link {{ request()->is('stocks') ? 'active' : '' }}">
                    <i class="fa fa-tags"></i>
                    <p>&nbsp Add Stock</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('soldProduct') }}" class="nav-link {{ request()->is('dispatched-products') ? 'active' : '' }}">
                  <i class="fa fa-tags"></i>
                    <p>&nbsp Dispatched Product</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('returnProduct') }}" class="nav-link {{ request()->is('return-products') ? 'active' : '' }}">
                  <i class="fa fa-tags"></i>
                    <p>&nbsp Return Product</p>
                  </a>
              </li>
            </li>
          </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-chart-line"></i>
              <p>&nbsp Product Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="{{ route('stockHistory') }}" class="nav-link {{ request()->is('stocks/history') ? 'active' : '' }}">
                    <i class="fa fa-history"></i>
                      <p>&nbsp Stock History</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('soldProductHistory') }}" class="nav-link {{ request()->is('dispatched-products/history') ? 'active' : '' }}">
                    <i class="fa fa-history"></i>
                      <p>&nbsp Dispatched History</p>
                    </a>
                </li>
            </li>

              <li class="nav-item">
                  <a href="{{ route('returnProductHistory') }}" class="nav-link {{ request()->is('return-products/history') ? 'active' : '' }}">
                    <i class="fa fa-history"></i>
                    <p>&nbsp Return History</p>
                  </a>
              </li>
          </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-store-alt"></i>
              <p>&nbsp Branches
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="{{ route('ADMcityhallDashboard') }}" class="nav-link {{ request()->is('ADM/City-Hall/dashboard*') ? 'active' : '' }}">
                    <i class="fa fa-code-branch"></i>
                      <p>&nbsp San Pedro City Hall</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('ADMmobileDashboard') }}" class="nav-link {{ request()->is('ADM/mobile/dashboard*') ? 'active' : '' }}">
                    <i class="fa fa-code-branch"></i>
                      <p>&nbsp Mobile Vaccine Center</p>
                    </a>
                </li>
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
