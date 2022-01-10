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
                <a href=" {{ route('patientappointment.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Your Appoitment</a>
                 <h3 class="box-title">Add Your Day & Time Schedule</h3>

                 {{-- <h6 class="box-subtitle"><a class="text-warning" href=""> ( * ) </a> Star Maked field are mendatory to fill </h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form  method="POST" action="{{Route('patientappointment.store')}}" enctype="multipart/form-data"> 
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
                                            <select name="pateintappo_doctorname" id="pateintappointment_doctorname"  class="form-control">
                                                <option value="" selected="" disabled>----Select Doctor----</option>
                                                @foreach ($doctorList as $item)
                                                <option value="{{ $item->email }}"> {{ $item->name }} </option>
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
                                            <select name="pateintappo_doctordate" id="pateintappointment_doctordate"  class="form-control">
                                                <option value="" selected="" disabled>----Select Date----</option>
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
                                            <select name="pateintappo_doctortimeslot" id="pateintappointment_doctortimeslot"  class="form-control">
                                                <option value="" selected="" disabled>----Select Timeslot----</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                              </div>
                              <!--row end-->

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#pateintappointment_doctorname").change(function() {
            let doctornameid = $(this).val() ;
            jQuery.ajax({
                url: '/getpatient_doctordate',
                type: 'post',
                data: 'doctornameid='+doctornameid+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#pateintappointment_doctordate').html(result) ;
                }
            })
        })
    })
</script>

<!--time picker -->
<script>
    $(document).ready(function() {
        $("#pateintappointment_doctordate").change(function() {
            let doctordateid = $(this).val() ;
            let doctornamedata = $("#pateintappointment_doctorname").find(":selected").text() ;
            jQuery.ajax({
                url: '/getpatient_doctortime',
                type: 'post',
                data: 'doctordateid='+doctordateid+ '&doctornamedata='+doctornamedata+'&_token={{ csrf_token() }}' ,
                success: function(result){
                    jQuery('#pateintappointment_doctortimeslot').html(result) ;
                }
            })
        })
    })
</script>





@endsection
