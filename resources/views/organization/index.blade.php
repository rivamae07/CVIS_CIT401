<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layouts.partials._head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'CHO', 'f':'<strong>CITY HEALTH OFFICE (CHO)</strong><br>Dr. Robert R. Olivarez <br><div style="font-style: italic;">Chief of Hospital</div> Direct Line: 8868-5284'},
           '', 'The President'],
          [{'v':'Sub1', 'f':'<strong>JOSE L. AMANTE EMERGENCY HOSPITAL</strong>'}, 'CHO', '1'],
           [{'v':'Sub2', 'f':'<strong>GAVINO ALVAREZ LYING-IN CENTER</strong>'}, 'CHO', '2'],
           [{'v':'Sub3', 'f':'<strong>NUTRITION OFFICE</strong>'}, 'CHO', '3'],
           [{'v':'Sub4', 'f':'<strong>SANITATION OFFICE</strong>'}, 'CHO', '4'],
           [{'v':'Sub5', 'f':'<strong>RURAL HEALTH UNIT</strong>'}, 'CHO', '5'],
           [{'v':'Sub6', 'f':'<strong>CITY HEALTH OFFICE (CHO) - CLINIC</strong>'}, 'CHO', '6'],
           ['<strong>Ms. Maria Lourdes P. Apilado</strong> <br><div style="font-style: italic;">Hospital Administrator</div> Direct Line: 8801-0182', 'Sub1', ''],
           ['<strong>Ms. Riah Fojas</strong> <br><div style="font-style: italic;">Head Nurse</div> Direct Line: 8808-5301', 'Sub1', ''],
           ['<strong>Billing Section</strong> <br>Direct Line: 8478-5209', 'Sub1', ''],
           ['<strong>Ms. Cynthia Mayores</strong> <br><div style="font-style: italic;">Social Services</div> Direct Line: 8425-4639', 'Sub1', ''],
           ['<strong>Ms. Maria Tala A. Ferreira</strong> <br><div style="font-style: italic;">Hospital Administrator</div> Direct Line: 8519-0249 / 8478-6270', 'Sub2', ''],
           ['<strong>Ms. Angelina V. Tapan</strong> <br><div style="font-style: italic;">Ext. 302</div>', 'Sub3', ''],
           ['<strong>Ms. Arleen P. Mendoza</strong> <br><div style="font-style: italic;">Ext. 207</div>', 'Sub4', ''],
           ['<strong>Rural Health Unit 1 (RHU1)</strong> <br>Direct Line: 8856-5086', 'Sub5', ''],
           ['<strong>Rural Health Unit 2 (RHU2)</strong> <br>Direct Line: 8802-1960', 'Sub5', ''],
           ['<strong>Dr. Robert R. Olivarez (RHU2)</strong> <br><div style="font-style: italic;">Chief of Hospital</div>Direct Line: 8868-5284', 'Sub6', '']

        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" style="padding:3.5rem 0;">

    @include('layouts.partials._navbar')
    @include('layouts.partials._sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="app" style="padding-top:9px;">

    @include('flash::message')
    @yield('content')

    <!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">San Pedro Organization</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Organization</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
            <div class="card card-primary card-outline">
              
              <div class="card-body" style="padding-bottom:0;">
                  <h5 class="d-inline">Organization Chart  - City Health Office (CHO)</h5>

                </div>

              <!-- /.card-header -->
              <div class="card-body">
              <div id="chart_div"></div>
                </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

  @include('layouts.partials._footer')

</div>
<!-- ./wrapper -->

@include('layouts.partials._footerScript')

</body>
</html>
