@extends('layouts.branchcityhallmaster')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dispatched Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('cityhallDashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dispatched Product History</li>
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
                  <h5 class="d-inline">Dispatched Product History</h5>
                  <a href="{{ route('cityhallsoldPrintHistory') }}" class="btn btn-sm btn-primary d-inline float-right"><i class="fa fa-table"></i> &nbsp; Generate Report </a>
                </div>

              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered datatable">
                  <thead>
                  <tr>
                        <th>#SL</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Quantity</th>
                  </tr>
                  </thead>
                  <tbody>
                        @if($sold_products)
                            @foreach($sold_products as $key => $sold_products)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $sold_products->date ?? '' }}</td>
                                    <td>{{ $sold_products->product->name ?? 'Unaccessible Data' }}</td>
                                    <td>{{ $sold_products->size->size ?? '' }}</td>
                                    <td>{{ $sold_products->quantity ?? '' }}</td>
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
      </div>
      </div>
  
@endsection