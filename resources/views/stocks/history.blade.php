@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Stock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Stock History</li>
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
                  <h5 class="d-inline">Stock History</h5>
                  <a href="{{ route('printHistory') }}" class="btn btn-sm btn-primary d-inline float-right"><i class="fa fa-table"></i> &nbsp; Generate Report </a>
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
                        <th>Status</th>
                        <th>Branch</th>
                  </tr>
                  </thead>
                  <tbody>
                        @if($stocks)
                            @foreach($stocks as $key => $stock)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $stock->date ?? '' }}</td>
                                    <td>{{ $stock->product->name ?? 'Unaccessible Data' }}</td>
                                    <td>{{ $stock->size->size ?? '' }}</td>
                                    <td>{{ $stock->quantity ?? '' }}</td>
                                    <td>{{ strtoupper($stock->status) ?? '' }}</td>
                                    <td>{{ strtoupper($stock->utype) ?? '' }}</td>
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
  
@endsection