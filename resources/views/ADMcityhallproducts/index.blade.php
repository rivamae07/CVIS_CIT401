@extends('layouts.branchcityhallmaster')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('ADMcityhallDashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Inventory</li>
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
                  <h5 class="d-inline">Product Inventory</h5>
                  <a href="{{ route('ADMcityhallproductsPrintHistory') }}" class="btn btn-sm btn-primary d-inline float-right" style="margin-left:5px;"><i class="fa fa-table"></i> &nbsp; Generate Report </a>
                  <!-- <a href="{{ route('cityhallproducts.create') }}" class="btn btn-sm btn-success d-inline float-right"><i class="fa fa-plus"></i> &nbsp; Add Product </a> -->
                </div>

              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered datatable">
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
                        @if($products)
                            @foreach($products as $key => $product)
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
                                      <a href="{{ route('ADMcityhallproducts.show', $product->id) }}" class="btn btn-sm btn-primary">
                                          <i class="fa fa-desktop"></i>&nbsp; Show
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