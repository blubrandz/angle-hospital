@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <a href=" {{ route('disease.add') }} " class="btn btn-rounded btn-success md-5" style="float: right ; "> Add Disease &nbsp; <i class="fa fa-plus" aria-hidden="true"></i> </a>
                
                <a href="{{ URL::previous() }}" class="btn btn-rounded btn-info md-5" style="float: right ; margin-right: 15px"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Go Back </a>

                <h3 class="box-title"> {{ Str::upper($data->disease_name) }} </h3> <br>
                <h6 class="box-title" style="color: gray"> {{ Str::title($data->disease_main_catagory) }} </h6> 

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive" style="padding: 10px 25px">
                      <tr>
                          <td >
                            <div style="padding-bottom: 50px ; ">
                                {!! $data->disease_description !!}
                                
                            </div>
                          </td>

                          <td>  <!--mutli imag starded here-->
                           <div style="padding-bottom: 50px" id="gallery-content-center">
                            <h3> {{$data->disease_name}} Images </h3>

                            @php
                            $imgData = explode('|' , $data->disease_image)
                        @endphp
                        @foreach ($imgData as $item)
                            <img src=" {{ URL::to($item) }} " class="all studio isotope-item" style="width: 300px ; height: 300px ; margin:10px ; object-fit: cover; border:5px solid white ; "  alt="">
                        @endforeach
                           </div>
                        </td>  
                        <!--multiple image end here-->

                        <td > <!--video started here-->
                           <div id="gallery-content-center">
                            <h3> {{$data->disease_name}} Videos </h3>
                                    @php
                                    $videoData = explode('|' , $data->disease_video)
                                @endphp
                                @foreach ($videoData as $item)
                                    <video width="450px" height="300px" style=" margin:10px ; object-fit: cover; border:5px solid white"  controls>
                                        <source src="{{ URL::to($item) }}" type="video/mp4">
                                        <source src="{{ URL::to($item) }}" type="video/ogg">
                                        Your browser does not support HTML video.
                                    </video>
                                @endforeach
                           </div>   
                        </td>
                           <!-- video end here-->

    
                      </tr>


                  </div>
                  
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
