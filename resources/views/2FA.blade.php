@extends('layouts.master')
@section('content')
<div class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Two-Factor Authentication</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Two-Factor Authentication</li>
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
                            @if (! auth()->user()->two_factor_secret )
                                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fa fa-key"></i>&nbsp;Enable 2FA</button>
                                </form>
                            @else
                                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-lock-open"></i>&nbsp;Disable 2FA</button>
                                </form>
                            @endif

                            @if(session('status')=='two-factor-authentication-enabled')

                            <p class="text-justify"><br>You have now enabled the Two Factor Authentication, please scan the<br>
                            following QR code into your google authenticator application. <br></p>
                            <p>
                            {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            </p>
                            @endif
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- Default box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Guidelines</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <p>You will need to install an application called <b>Google Authenticator</b>.
                Scan the QR Code provided below to install the application.</p>

                        <img width="200px" src="{{ asset('storage/images/googleAuthQR.png') }}"><br><br>
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
