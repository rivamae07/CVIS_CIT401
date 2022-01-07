@extends('layouts.branchcityhallmaster')

@section('content')

<div class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Find our Branches here:</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Location</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="container-fluid">
      
        <div class="row">
        <div class="col">
            <!-- Default box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">System Description</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <h5><img width="40px" src="{{ asset('storage/images/favicon.png') }}"> <strong>COVID VACCINE INVENTORY SYSTEM</strong></h5>
                <p>CVIS is an application meant to be used by the Head Administrators of San Pedro Laguna. The system's main aim is to help the administrators organize and manage COVID related products like Vaccines and Medical Equipments. With this application, the administrators and the front liners stationed in San Pedro, Laguna can easily manage the stocks used to save and cure people. <br><br> Pandemic is a crisis that we must eradicate as soon as possible. Let's do our best to <strong>heal as one!</strong></p>
                </div>
            </div>
            </div>

            <div class="container-fluid">
      
        <div class="row">
        <div class="col">
            <!-- Default box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Vaccination Centers</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

                <div class="card-body" style="margin-top:0;">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                        <h5><img width="40px" src="{{ asset('storage/images/favicon.png') }}"> <strong>San Pedro City Hall - Vaccine Center</strong></h5>
                            <iframe width="100%" height="460" id="gmap_canvas" src="https://maps.google.com/maps?q=San%20Pedro%20City%20Hall,%20San%20Pedro,%20Laguna&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://fmovies-online.net"></a><br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                        </div>
                    </div>
                </div>

                <div class="card-body" style="margin-top:0;">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                        <h5><img width="40px" src="{{ asset('storage/images/favicon.png') }}"> <strong>Mobile Vaccine Center - Main Office</strong></h5>
                        <iframe width="100%" height="460" id="gmap_canvas" src="https://maps.google.com/maps?q=Robinsons%20Galleria%20South&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://fmovies-online.net"></a><br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
            <div class="col">
            <!-- Default box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">System Developers</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
              <div class="row">
              <div class="col">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('https://images.pexels.com/photos/3960076/pexels-photo-3960076.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') center center;">
                <h3 class="widget-user-username text-right">Riva Mae Alejandro</h3>
                <h5 class="widget-user-desc text-right">Programmer/Researcher</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('storage/images/riva.png') }}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://www.facebook.com/rivamae.alejandro"><i class="fab fa-facebook"></i></a></h5>
                      <span class="description-text">Facebook</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://twitter.com/rivamae0507"><i class="fab fa-twitter"></i></a></h5>
                      <span class="description-text">Twitter</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://www.instagram.com/rivamae07/?hl=en"><i class="fab fa-instagram"></i></a></h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
            </div>

            <!-- second -->

            <div class="col">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('https://images.pexels.com/photos/3849598/pexels-photo-3849598.jpeg?cs=srgb&dl=pexels-miguel-%C3%A1-padri%C3%B1%C3%A1n-3849598.jpg&fm=jpg') center center;">
                <h3 class="widget-user-username text-right">Alyssa Bautista</h3>
                <h5 class="widget-user-desc text-right">Programmer/Researcher</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('storage/images/alyssa.png') }}" alt="User Avatar">
              </div>
              <div class="card-footer">
              <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://www.facebook.com/lyss9999"><i class="fab fa-facebook"></i></a></h5>
                      <span class="description-text">Facebook</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://twitter.com/alyssabae99"><i class="fab fa-twitter"></i></a></h5>
                      <span class="description-text">Twitter</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://instagram.com/alyssabae99?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
            </div>

            <!-- third  -->
            <div class="col">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') center center;">
                <h3 class="widget-user-username text-right">Ailah Carelle Bunag</h3>
                <h5 class="widget-user-desc text-right">Programmer/Researcher</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('storage/images/ailah.jpg') }}" alt="User Avatar">
              </div>
              <div class="card-footer">
              <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://www.facebook.com/ailahcarelle.bunag.1"><i class="fab fa-facebook"></i></a></h5>
                      <span class="description-text">Facebook</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href=" https://twitter.com/CarelleAilah"><i class="fab fa-twitter"></i></a></h5>
                      <span class="description-text">Twitter</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://instagram.com/carelle.xx?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
            </div>
            </div>


            <!-- fourth -->
            <div class="row" style="justify-content: center;">
            <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('https://images.pexels.com/photos/3376790/pexels-photo-3376790.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') center center;">
                <h3 class="widget-user-username text-right">Angelu Merry Ilagan</h3>
                <h5 class="widget-user-desc text-right">Programmer/Researcher</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('storage/images/angelu.jpg') }}" alt="User Avatar">
              </div>
              <div class="card-footer">
              <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://www.facebook.com/amtilagan"><i class="fab fa-facebook"></i></a></h5>
                      <span class="description-text">Facebook</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://twitter.com/amtilagan"><i class="fab fa-twitter"></i></a></h5>
                      <span class="description-text">Twitter</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://instagram.com/perfxxgel?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
            </div>

            <!-- fifth -->
            <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('https://images.pexels.com/photos/6075007/pexels-photo-6075007.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') center center;">
                <h3 class="widget-user-username text-right">Mariz Menorca</h3>
                <h5 class="widget-user-desc text-right">Programmer/Researcher</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('storage/images/mariz.jpg') }}" alt="User Avatar">
              </div>
              <div class="card-footer">
              <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://www.facebook.com/marz.menorca"><i class="fab fa-facebook"></i></a></h5>
                      <span class="description-text">Facebook</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="#"><i class="fab fa-twitter"></i></a></h5>
                      <span class="description-text">Twitter</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><a  href="https://instagram.com/maarizzqt?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
            </div>

          <!-- end -->

          </div>

                </div>
            </div>
            </div>
            </div>

            

            <!-- hoyyyy -->

            </div>

            

          

          
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>

      

  <!-- /.content-wrapper -->


@endsection