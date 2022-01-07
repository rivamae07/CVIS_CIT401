@extends('layouts.branchmaster')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Request Stocks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('mobileDashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Request History</li>
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
                  <h5 class="d-inline">Request Stock History</h5>
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
                  </tr>
                  </thead>
                  <tbody>
                  @if($requests)
                            @foreach($requests as $key => $request)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $request->date ?? '' }}</td>
                                    <td>{{ $request->product->name ?? 'Unaccessible Data' }}</td>
                                    <td>{{ $request->size->size ?? '' }}</td>
                                    <td>{{ $request->quantity ?? '' }}</td>
                                    <td>{{ strtoupper($request->status) ?? '' }}</td>
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