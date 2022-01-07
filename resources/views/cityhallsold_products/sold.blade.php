@extends('layouts.branchcityhallmaster')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dispatched Product</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('cityhallDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dispatched Product Manage</li>
            </ol>
            </div>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
                <cityhall-sold-product></cityhall-sold-product>
        </div>
      </div>

@endsection
