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
                       <form  method="POST" action="{{Route('doctorday.store')}}" enctype="multipart/form-data"> 
                        @csrf
                         <div class="row">
                        <div class="col-12">	
                              <!--row Stared here-->
                              <div class="row" style="display: none">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <div class="controls">
                                              <input type="text" name="username_appointmentdate" class="form-control"  required="" value=" {{ $user->name }} " aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->

                                  <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="email_appointmentdate" class="form-control"  required="" value=" {{$user->email }} " aria-invalid="false"> </div>
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
                                            <input type="date" name="date_appointmentdate" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div>
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



@endsection
