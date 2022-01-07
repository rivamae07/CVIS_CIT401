@extends('layouts.branchcityhallmaster')
@section('content')

<div class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('cityhallDashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class='content'>

<div class='container-fluid'>
<div class="row">
<div class="col">
<div class="callout callout-warning">
                <h5><img width="40px" src="{{ asset('storage/images/favicon.png') }}"> <strong>COVID VACCINE INVENTORY SYSTEM</strong></h5>
    This Inventory Management System is created in hopes of helping the authorized personnels manage and organize COVID-19 related products. This will serve as the main inventory of all the products stored in San Pedro, laguna used to solve the crisis we are currently facing.
    </div>
</div>
</div>

<div class="row">
          <div class="col">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Inventory Reports</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Summary Report -->

<div class="row">
          <div class="col">
            <div class="card card-success collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Summary Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3 class="text-white">{{ $total_users ?? 0 }}</h3>

                      <p class="text-white">Employees</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="{{ route('cityhallusers.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 class="text-white">{{ $total_products ?? 0 }}</h3>

                      <p class="text-white">Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-list"></i>
                    </div>
                    <a href="{{ route('cityhallproducts.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3 class="text-white">{{ $total_requests ?? 0 }}</h3>

                      <p class="text-white">Requests</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-truck-loading"></i>
                    </div>
                    <a href="{{ route('cityhallrequestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3 class="text-white">{{ $total_return_products ?? 0 }}</h3>

                      <p class="text-white">Return Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-undo-alt"></i>
                    </div>
                    <a href="{{ route('cityhallreturnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3 class="text-white">{{ $total_sold_products ?? 0 }}</h3>

                      <p class="text-white">Dispatched Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-bag"></i>
                    </div>
                    <a href="{{ route('cityhallsoldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>

<!-- Today -->

<div class="row">
          <div class="col">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daily Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3 class="text-white">{{ $TOD_total_users ?? 0 }}</h3>

                      <p class="text-white">Employees</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="{{ route('cityhallusers.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 class="text-white">{{ $TOD_total_products ?? 0 }}</h3>

                      <p class="text-white">Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-list"></i>
                    </div>
                    <a href="{{ route('cityhallproducts.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3 class="text-white">{{ $TOD_total_requests ?? 0 }}</h3>

                      <p class="text-white">Requests</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-truck-loading"></i>
                    </div>
                    <a href="{{ route('cityhallrequestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3 class="text-white">{{ $TOD_total_return_products ?? 0 }}</h3>

                      <p class="text-white">Return Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-undo-alt"></i>
                    </div>
                    <a href="{{ route('cityhallreturnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3 class="text-white">{{ $TOD_total_sold_products ?? 0 }}</h3>

                      <p class="text-white">Dispatched Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-bag"></i>
                    </div>
                    <a href="{{ route('cityhallsoldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>

<!-- Weekly -->

<div class="row">
          <div class="col">
            <div class="card card-info collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Weekly Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3 class="text-white">{{ $WK_total_users ?? 0 }}</h3>

                      <p class="text-white">Employees</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="{{ route('cityhallusers.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 class="text-white">{{ $WK_total_products ?? 0 }}</h3>

                      <p class="text-white">Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-list"></i>
                    </div>
                    <a href="{{ route('cityhallproducts.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3 class="text-white">{{ $WK_total_requests ?? 0 }}</h3>

                      <p class="text-white">Requests</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-truck-loading"></i>
                    </div>
                    <a href="{{ route('cityhallrequestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3 class="text-white">{{ $WK_total_return_products ?? 0 }}</h3>

                      <p class="text-white">Return Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-undo-alt"></i>
                    </div>
                    <a href="{{ route('cityhallreturnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3 class="text-white">{{ $WK_total_sold_products ?? 0 }}</h3>

                      <p class="text-white">Dispatched Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-bag"></i>
                    </div>
                    <a href="{{ route('cityhallsoldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>

<!-- Monthly -->

<div class="row">
          <div class="col">
            <div class="card card-secondary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Monthly Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3 class="text-white">{{ $MO_total_users ?? 0 }}</h3>

                      <p class="text-white">Employees</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="{{ route('cityhallusers.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 class="text-white">{{ $MO_total_products ?? 0 }}</h3>

                      <p class="text-white">Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-list"></i>
                    </div>
                    <a href="{{ route('cityhallproducts.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3 class="text-white">{{ $MO_total_requests ?? 0 }}</h3>

                      <p class="text-white">Requests</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-truck-loading"></i>
                    </div>
                    <a href="{{ route('cityhallrequestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3 class="text-white">{{ $MO_total_return_products ?? 0 }}</h3>

                      <p class="text-white">Return Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-undo-alt"></i>
                    </div>
                    <a href="{{ route('cityhallreturnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3 class="text-white">{{ $MO_total_sold_products ?? 0 }}</h3>

                      <p class="text-white">Dispatched Products</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-bag"></i>
                    </div>
                    <a href="{{ route('cityhallsoldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            </div>

          </div>
          </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>



<!-- <div class="content-header" style="padding: 10px 0rem;">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" style="padding: 0px 0rem;">
                <h1 class="m-0 text-dark">Recent Products</h1>
                </div>
        </div>
    </div>
</div> -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
            <div class="card card-primary card-outline">
              
              <div class="card-body" style="padding-bottom:0;">
                  <h5 class="d-inline">Most Recent Products</h5>

                </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                        <th>#SL</th>
                        <th class="text-center">Image</th>
                        <th>Name</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Expiration Date</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if($recent_products)
                            @foreach($recent_products as $key => $product)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="text-center">
                                      <img width="64px" src="{{ asset('storage/product_images/'. $product->image) }}">
                                    </td>
                                    <td>{{ $product->name ?? '' }}</td>
                                    <td>{{ $product->sku ?? '' }}</td>
                                    <td>{{ $product->category->name ?? '' }}</td>
                                    <td>{{ $product->brand->name ?? '' }}</td>
                                    <td>{{ $product->expiration_date ?? '' }}</td>
                                    <td>
                                      <a href="{{ route('cityhallproducts.show', $product->id) }}" class="btn btn-sm btn-primary">
                                          <i class="fa fa-desktop"></i>&nbsp; Show
                                      </a>
                                                                          
                                      
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
                </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection