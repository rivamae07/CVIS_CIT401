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
                  <h5 class="d-inline">Perished Goods</h5>
                    <a href="{{ route('notifications') }}" class="btn btn-sm btn-danger d-inline float-right" style="margin-right:5px">
                        <i class="fa fa-exclamation-triangle"></i> &nbsp;
                            Depleting Stocks &nbsp;
                        {{-- <i class="text-warning fa fa-exclamation-circle"></i> --}}
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
                        <th>SKU</th>
                        <th>Brand</th>
                        <th>Expiration</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if($products)
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $product->name ?? '' }}</td>
                                    <td>{{ $product->sku ?? '' }}</td>
                                    <td>{{ $product->brand->name ?? '' }}</td>
                                    <td>{{ $product->expiration_date ?? '' }}</td>
                                    <td>
                                        <i class="fa fa-exclamation-triangle" style="color:#d9534f"></i>
                                        &nbsp; <strong style="color:#d9534f">DANGER:</strong> This product is expired. Delete <strong>NOW!</strong>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="product-delete-{{ $product->id }}">
                                            <i class="fa fa-trash"></i>&nbsp; Delete
                                        </a>
                                        <form id="product-delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post">
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
      </div>

  <!-- /.content-wrapper -->

@endsection

