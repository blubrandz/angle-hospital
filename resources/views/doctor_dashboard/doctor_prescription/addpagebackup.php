@extends('doctor_dashboard.doctor_master')
@section('doctor')

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
                <a href=" {{ route('doctorday.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View All Dates </a>
                 <h3 class="box-title">Manage Your Day & Time Schedule</h3>

                 {{-- <h6 class="box-subtitle"><a class="text-warning" href=""> ( * ) </a> Star Maked field are mendatory to fill </h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form  method="POST" action=" {{ route('doctorprescription.store1') }}" enctype="multipart/form-data"> 
                        @csrf
                         <div class="row">
                        <div class="col-12">	
                              <!--row Stared here-->
                              <div class="row" style="display: none">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <div class="controls">
                                            <h5>Doctor Name <span class="text-danger">*</span></h5>
                                              <input type="text" name="doctorname_prescription" class="form-control"  required="" value=" {{ $user->name }} " aria-invalid="false" readonly > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->

                                  <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <h5>Doctor Email <span class="text-danger">*</span></h5>
                                            <input type="text" name="doctoremail_prescription" class="form-control"  required="" value=" {{$user->email }} " aria-invalid="false" readonly > </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->

                              
                               <!--row Stared here-->
                               <div class="row" >
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <h5>Patient Name <span class="text-danger">*</span></h5>
                                            <input type="text" name="patientname_prescription" class="form-control"  required="" value=" {{ $data->username_timeslot }} " aria-invalid="false" readonly > </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                  <div class="form-group">
                                      <div class="controls">
                                        <h5>Patient Email <span class="text-danger">*</span></h5>
                                          <input type="text" name="patientemail_prescription" class="form-control"  required="" value=" {{$data->useremail_timeslot }} " aria-invalid="false" readonly > </div>
                                  </div>
                              </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                              <!--row start-->
                              <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Appointmeent Date <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"  name="patientapoitmentdate_prescription" class="form-control" required="" value=" {{ $data->pateintappo_doctordate }} " data-validation-required-message="This field is required" aria-invalid="false" readonly > <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Timeslot <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="patientslot_prescription" class="form-control" required="" value=" {{ $data->pateintappo_doctortimeslot }} " data-validation-required-message="This field is required" aria-invalid="false" readonly > <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Phone number <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="patientphonenumber_prescription" class="form-control"  value=" {{ $data->patientappo_phonenumber }} " data-validation-required-message="This field is required" aria-invalid="false" readonly > <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                              </div>
                              <!--row end-->

                               <!--row Stared here-->
                               <div class="row" >
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Write Prescriptiona and Details <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea id="editor1"  name="doctor_detailprescription" rows="10" cols="80" placeholder="Write Prescriptions">  </textarea>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12 col-12"> <!-- /.col -->
                                    <div class="form-group">
                                    <label>Select Medicines</label>
                                    <select class="form-control select2 pl-2"  name="medicine_prescription[]" data-placeholder="Select a Medicine"
                                            style="width: 100%;">
                                        <option value="" hidden>-- Select Medicine--</option>
                                        @foreach ($medicineData as $meditem)
                                        <option value="{{ $meditem->medicine_name }}">{{ $meditem->medicine_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div> <!-- /.col -->



                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Request for next appoitment after  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="nextapoitment_prescription" class="form-control"  aria-invalid="false"  > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>patient apoitmeent id  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{ $data->id }}" name="patientappoitment_id" class="form-control"  aria-invalid="false"  > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->



                            </div>
                            <!--row Ended here-->


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
