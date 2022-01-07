@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Notifications</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Notifications</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">

              <div class="card-body" style="padding-bottom:0;">
                  <h5 class="d-inline">Depleting Stocks</h5>
                    <a href="{{ route('expired-products') }}" class="btn btn-sm btn-danger d-inline float-right" style="margin-right:5px">
                        <i class="fa fa-calendar-times"></i> &nbsp;
                            Expired Products &nbsp;
                        {{-- <i class="text-warning fa fa-exclamation-circle"></i> --}}
                        {{-- <i class="fa fa-exclamation-circle"></i> --}}
                        </span>
                    </a>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered datatable">
                  <thead>
                  <tr>
                        <th>#SL</th>
                        <th>Product Name</th>
                        <th>Stock Size</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if($products)
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $product->product->name ?? '' }}</td>
                                    <td>{{ $product->size->size ?? '' }}</td>
                                    <td>{{ $product->quantity ?? '' }}</td>
                                    <td>
                                    @if($product->quantity > 0)
                                      <i class="fa fa-exclamation-triangle" style="color:#f0ad4e"></i>
                                      &nbsp; <strong style="color:#f0ad4e">WARNING:</strong> Critically Low Stock. Check it out <strong>NOW!</strong>
                                    @endif

                                    @if($product->quantity <= 0)
                                      <i class="fa fa-exclamation-triangle" style="color:#d9534f"></i>
                                      &nbsp; <strong style="color:#d9534f">DANGER:</strong> No Stocks Available. Add a Stock <strong>NOW!</strong>
                                    @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('stock')}}" class="btn btn-sm btn-success">
                                            <i class="fa fa-plus"></i>&nbsp; Add Stock
                                        </a>
                                        <a href="{{ route('products.show', $product->product->id) }}" class="btn btn-sm btn-primary">
                                          <i class="fa fa-desktop"></i>&nbsp; Show
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>

  <!-- /.content-wrapper -->

@endsection
