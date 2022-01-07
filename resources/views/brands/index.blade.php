@extends('layouts.master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Lists of Brands</li>
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
                  <h5 class="d-inline">Brands List</h5>

                  <a href="{{ route('brands.create') }}" class="btn btn-sm btn-success d-inline float-right"><i class="fa fa-plus"></i> &nbsp; Add Brand </a>
                </div>

              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered datatable">
                  <thead>
                  <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if($brands)
                            @foreach($brands as $key => $brand)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $brand->name ?? '' }}</td>
                                    <td>
                                      <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-sm btn-info">
                                          <i class="fa fa-edit"></i>&nbsp; Edit
                                      </a>
                                      <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="brand-delete-{{ $brand->id }}">
                                          <i class="fa fa-trash"></i>&nbsp; Delete
                                      </a>

                                      <form id="brand-delete-{{ $brand->id }}" action="{{ route('brands.destroy', $brand->id) }}" method="post">
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
      </div><!-- /.container-fluid -->

  <!-- /.content-wrapper -->
  
@endsection