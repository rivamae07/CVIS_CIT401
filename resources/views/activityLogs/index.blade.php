@extends('layouts.master')
@section('content')
<div class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Activity Logs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Activity Logs</li>
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
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    <table class="table table-bordered datatable">

                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Log Name</th>
                                <th>Description</th>
                                <th>Subject ID</th>
                                <th>Causer ID</th>
                                <th>Properties</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($activities)

                                @foreach($activities as $key => $activity)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $activity->log_name ?? '' }}</td>
                                    <td>{{ $activity->description ?? '' }}</td>
                                    <td>{{ $activity->subject_type ?? '' }}</td>
                                    <td>{{ $activity->causer_type ?? '' }}</td>
                                    <td>{{ $activity->properties ?? '' }}</td>
                                    <td>{{ $activity->created_at ?? '' }}</td>
                                    <td>{{ $activity->updated_at ?? '' }}</td>

                                </tr>

                                @endforeach

                            @endif
                        </tbody>
                    </table>


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
