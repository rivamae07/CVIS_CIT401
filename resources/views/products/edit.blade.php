@extends('layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Product</li>
            </ol>
            </div>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
                <product-edit :product="{{ $product }}"></product-edit>
        </div>
      </div>
</div>

@endsection
