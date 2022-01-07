@extends('layouts.branchmaster')
@section('content')

@foreach($products->product_stocks as $p_stock)
    @if($p_stock->quantity <= 10)
        <div class="alert alert-warning">The Amount of Products Stored for this Product is below the Safety Level</div>
    @endif
@endforeach

<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product View</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('mobileDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Product View</li>
            </ol>
            </div>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                    <div class="card-body">
                    <h5 class="card-title">Product Information</h5>

                    <br />

                        <div class="card-body">
                            <table class="table table-sm table-bordered">
                                <tr>
                                    <td>Product Name</td>
                                    <td>{{ $products->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>{{ $products->category->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Brand</td>
                                    <td>{{ $products->brand->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>SKU</td>
                                    <td>{{ $products->sku ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Cost Price(₱)</td>
                                    <td>{{ $products->cost_price ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Expiration Date</td>
                                    <td>{{ $products->expiration_date ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td>{{ $products->year ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $products->description ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $products->status ? 'Active' : 'Inactive' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class = "card-footer">
                            <a class="btn btn-sm btn-dark" href="{{ route('mobileproducts.index') }}"><i class="fa fa-arrow-left"></i>&nbsp; Back</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                    <div class="card-body">
                    <h5 class="card-title">Image</h5>

                    <br />

                        <div class="card-body text-center">
                            <img width="200px" src="{{ asset('storage/product_images/' . $products->image) }}">
                        </div>

                    </div>
                    </div>
                    <div class="card card-primary card-outline">
                    <div class="card-body">
                    <h5 class="card-title">Product Stock</h5>

                    <br />

                        <div class="card-body">
                            <table class="table table-sm table-bordered">
                                @foreach($products->product_stocks as $p_stock)
                                    <tr>
                                        <td>{{ $p_stock->size->size ?? '' }}</td>
                                        <td>{{ $p_stock->quantity ?? 0 }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
      </div>
</div>
</div>
@endsection
