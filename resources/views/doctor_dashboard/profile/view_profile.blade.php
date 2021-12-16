@extends('doctor_dashboard.doctor_master')
@section('doctor')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">

            <!--user profile start-->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" >
                     {{-- style="background: url('../images/gallery/full/10.jpg') center center;" --}}
                  <h3 class="widget-user-username">Name :  <b>Dr. </b> {{ Str::title($user->name) }} </h3>
                  <a href=" {{ route('doctorprofile.edit') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Edit Profile </a>

                  <h6 class="widget-user-desc">Profession : {{$user->usertype}} </h6>
                  <h6 class="widget-user-desc">Email Address : {{$user->email}} </h6>
                  

                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{ (!empty($user->image))?url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Mobile Number </h5>
                        <span class="description-text"> {{$user->mobile}} </span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Address </h5>
                        <span class="description-text"> {{$user->address}} </span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header"> Gender </h5>
                        <span class="description-text"> {{$user->gender}} </span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                
             </div>

            <!--user profile end-->
           
           <!-- /.col -->
          </div>
         <!-- /.row -->
      </div>

      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
