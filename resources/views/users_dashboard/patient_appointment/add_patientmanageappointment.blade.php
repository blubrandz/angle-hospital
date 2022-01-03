@extends('users_dashboard.user_master')
@section('user')

@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp

<style>
    ::-webkit-calendar-picker-indicator {
    filter: invert(1);
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                <a href=" {{ route('patientappointment.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View All Your Appointment Booking </a>
                 <h3 class="box-title">Add Your Day & Time Schedule</h3>

                 {{-- <h6 class="box-subtitle"><a class="text-warning" href=""> ( * ) </a> Star Maked field are mendatory to fill </h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form  method="POST" action="{{Route('doctortimeslots.store')}}" enctype="multipart/form-data"> 
                        @csrf
                         <div class="row">
                        <div class="col-12">	
                              <!--row Stared here-->
                              <div class="row" style="display: none">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <div class="controls">
                                              <input type="text" name="username_timeslot" class="form-control"   value=" {{ $user->name }} " aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->

                                  <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="useremail_timeslot" class="form-control"   value=" {{$user->email }} " aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->

                              <!--row start-->
                              <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Doctor </h5>
                                        <div class="controls">
                                            <select name="selectdate_timeslot" id="selectdate_timeslot"  class="form-control">
                                                <option value="" selected="" disabled>----Select Doctor----</option>
                                                @foreach ($doctorList as $item)
                                                <option value="{{ $item->name }}"> {{ $item->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                              </div>
                              <!--row end-->

                              <!--row start-->
                              <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Date </h5>
                                        <div class="controls">
                                            <select name="selectdate_timeslot" id="selectdate_timeslot"  class="form-control">
                                                <option value="" selected="" disabled>----Select Date----</option>
                                                @foreach ($dateData as $item)
                                                <option value="{{ $item->date_appointmentdate }}"> {{ date('jS F Y' , strToTime($item->date_appointmentdate)) }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                              </div>
                              <!--row end-->

                              <!--row start-->
                              <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Timeslot </h5>
                                        <div class="controls">
                                            <select name="selectdate_timeslot" id="selectdate_timeslot"  class="form-control">
                                                <option value="" selected="" disabled>----Select Timeslot----</option>
                                                @foreach ($dateData as $item)
                                                <option value="{{ $item->date_appointmentdate }}"> {{ date('jS F Y' , strToTime($item->date_appointmentdate)) }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                              </div>
                              <!--row end-->

                              <div class="row">
                                  <div class="col-md-6">
                                    <!-- time Picker -->
                                    
                                    <div class="bootstrap-timepicker">                                     
                                        <!-- /.form group -->
                                        <div class="form-group">
                                            <h5>Appointment time from <span class="text-danger">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" name="starting_time_timeslot" class="form-control timepicker">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <!-- time Picker -->
                                    <div class="bootstrap-timepicker">                                     
                                        <!-- /.form group -->
                                        <div class="form-group">
                                            <h5>Appointmeent Time to <span class="text-danger">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" name="ending_time_timeslot" class="form-control timepicker">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                              </div>
                        </div> 
                           
                           <div class="text-xs-right">
                               <br>
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script> --}}

<script>
    let fileInput = document.getElementById("file-input");
    let imageContainer = document.getElementById("images");
    let numOfFiles = document.getElementById("num-of-files");

    function preview(){
        imageContainer.innerHTML = "";
        numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

        for(i of fileInput.files){
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload=()=>{
                let img = document.createElement("img");
                img.classList.add('multi-img')
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);

            }
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }
</script>

{{-- <script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script> --}}



@endsection
