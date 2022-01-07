@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pending Requests</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('cityhallDashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Pending Requests</li>
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
                  <h5 class="d-inline">Branch Requests</h5>

                  <a href="{{ route('requests.store') }}" class="btn btn-sm btn-success d-inline float-right"><i class="fa fa-plus"></i> &nbsp; Fulfill Requests </a>

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
                        <!-- <th>Location</th> -->
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Branch</th>
                        <th>Actions</th>
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
                                    <!-- <td>{{ $request->size->product_size_stocks->location ?? '' }}</td> -->
                                    <td>{{ $request->quantity ?? '' }}</td>
                                    <td>{{ strtoupper($request->status) ?? '' }}</td>
                                    <td>{{ $request->utype ?? '' }}</td>
                                    <td>
                                      
                                      <!-- <a href="{{ route('requests.store') }}" class="btn btn-sm btn-info">
                                          <i class="fa fa-edit"></i>&nbsp; Fulfill Request
                                      </a> -->

                                      <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="request-delete-{{ $request->id }}">
                                          <i class="fa fa-trash"></i>&nbsp; Deny Request
                                      </a>

                                      <form id="request-delete-{{ $request->id }}" action="{{ route('requests.destroy', ['id' => $request->id]) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                      </form>

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
      </div>
  
@endsection