@extends('layouts.master')
@section('content')
<div class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Confirm Password</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Confirm Password</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class='content'>

<div class='container-fluid'>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="card card-primary card-outline">
                <div class="card-body">
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <p>Enter your password to continue</p>

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                <div class="input-group">
                                    <input type="password" class="block mt-1 w-full form-control" placeholder="Password" id="password" name="password" required autocomplete="current-password" autofocus >
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-key"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('Confirm') }}
                                            </button>
                                    </div>
                                    </div>
                            </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection

