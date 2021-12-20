@extends('admin.admin_master')
@section('admin')

@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Add Doctor</h4>
                 <h6 class="box-subtitle"><a class="text-warning" href=""> ( * ) </a> Star Maked field are mendatory to fill </h6>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action="{{Route('doctors.store')}}"> 
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" value="doctor" name="usertype" class="form-control" hidden required> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                              <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-12"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Mobile<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="mobile" class="form-control"  required="" aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->
  
                                <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Gender <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <select name="gender" id="gender" required  class="form-control">
                                                  <option value="" selected="" disabled>Select Gender</option>
                                                  <option value="Male" >Male</option>
                                                  <option value="Female" >Female</option>
                                                  <option value="other" >other</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Profile Image </h5>
                                          <div class="controls">
                                              <input type="file" id="image" name="image" class="form-control"  > </div>
                                      </div>
  
                                      <!--image display after selecting UISNG AJEX-->
                                      <div class="form-group">
                                          <div class="controls">
                                              <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="" style="width: 100px;height:100px;border:2px solid black">
                                          </div>
                                      </div>
                                      <!--image display ended here-->
  
                                  </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->


                           </div>
                         </div>
                           
                           
                           
                           <div class="text-xs-right">
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
