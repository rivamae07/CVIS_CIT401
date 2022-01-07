<!DOCTYPE html>
<head>
@include('layouts.partials._head')
</head>
<body>
<div class="wrapper" style="margin:20px">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">San Pedro City Hall - Return Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Print Form</a></li>
              <li class="breadcrumb-item active"><a href = "{{ route('cityhallreturnProductHistory') }}">Return Product History</a></li>
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
              <h5 class="d-inline float-left">Return Product History: {{ date('Y/m/d') }}</h5>
              <a onClick="window.print()" class="btn btn-sm btn-dark d-inline float-right" style="color:white"><i class="fa fa-print"></i> &nbsp; Print Records </a>
                </div>

              <!-- /.card-header -->
              <div class="card-body">
              <a href="{{ route('cityhallprintReturnToday') }}" class="btn btn-sm btn-primary d-inline float-left" style="margin-right:5px"><i class="fa fa-calendar"></i> &nbsp; Today </a>
              <a href="{{ route('cityhallprintReturnWeek') }}" class="btn btn-sm btn-info d-inline float-left" style="margin-right:5px"><i class="fa fa-calendar"></i> &nbsp; This Week </a>
              <a href="{{ route('cityhallprintReturnMonth') }}" class="btn btn-sm btn-secondary d-inline float-left" style="margin-right:5px"><i class="fa fa-calendar"></i> &nbsp; This Month </a>
              <a href="{{ route('cityhallreturnPrintHistory') }}" class="btn btn-sm btn-success d-inline float-left" style="margin-right:5px"><i class="fa fa-calendar"></i> &nbsp; All Records </a>
              <table class="table table-bordered printTable">
                  <thead>
                  <tr>
                        <th>#SL</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Branch</th>
                  </tr>
                  </thead>
                  <tbody>
                        @if($return_products)
                            @foreach($return_products as $key => $return_products)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $return_products->date ?? '' }}</td>
                                    <td>{{ $return_products->product->name ?? 'Unaccessible Data' }}</td>
                                    <td>{{ $return_products->size->size ?? '' }}</td>
                                    <td>{{ $return_products->quantity ?? '' }}</td>
                                    <td>{{ strtoupper($return_products->utype) ?? '' }}</td>
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
      </div>
      </div>
      </div>

<script src="{{ asset('js/app.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>

    $('.printTable').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

</script>

</body>
</html>