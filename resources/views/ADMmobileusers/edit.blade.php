@extends('layouts.branchmaster')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('ADMmobileDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Employee</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
                          <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">Update Employee</h5>

                    <br>

                  <form role="form" action="{{ route('ADMmobileusers.update', $user->id) }}" method="post">
                      @csrf
                      @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                        <input name="name" type="text" class="form-control" placeholder="Enter User Name" value="{{ $user->name ?? '' }}">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" placeholder="Enter User Email" value="{{ $user->email ?? '' }}">
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Password </label>
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password </label>
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                      </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            &nbsp;Submit
                        </button>
                    </div>
                  </form>

                </div>
              </div><!-- /.card -->
            </div>

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection
