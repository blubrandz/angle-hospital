@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Update User</h4>
                 {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('doctors.update',$editData->id)}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5> Role <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="usertype" style="background:#6a425c ; " id="select" required  class="form-control">
                                                <option value="" selected="" disabled>Select Role</option>
                                                <option value="Admin" {{ $editData->usertype == "Admin" ? "Selected": "" }} >Admin</option>
                                                <option value="User" {{ $editData->usertype == "doctor" ? "Selected": "" }}  >Doctor</option>
                                                <option value="User" {{ $editData->usertype == "reception" ? "Selected": "" }}  >Reception</option>
                                                <option value="User" {{ $editData->usertype == "User" ? "Selected": "" }}  >Patient</option>

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                

                            </div>
                            <!--row Ended here-->

                            <!--row Stared here-->
                            <div class="row">

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Name </h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" value=" {{$editData->name}} " required> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" value=" {{$editData->email}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Mobile Number</h5>
                                        <div class="controls">
                                            <input type="text" name="mobile" class="form-control" value=" {{$editData->mobile}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Address or City</h5>
                                        <div class="controls">
                                            <input type="text" name="address" class="form-control" value=" {{$editData->address}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Gender <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="gender" id="select" required  class="form-control">
                                                <option value="" selected="" disabled>Select Gender</option>
                                                <option value="Male" {{ $editData->gender == "Male" ? "Selected": "" }} >Male</option>
                                                <option value="Female" {{ $editData->gender == "Female" ? "Selected": "" }} >Female</option>
                                                <option value="other" {{ $editData->gender == "other" ? "Selected": "" }} >other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Date Of Birth<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="birth_date" class="form-control"  value= {{$editData->birth_date}}  required="" aria-invalid="false"> </div>
                                    </div>
                                </div>
                                <style>
                                    ::-webkit-calendar-picker-indicator {
                                        filter: invert(1);
                                    }
                                </style>                                
                                
                            </div>
                            <!--row Ended here-->

                           </div>
                         </div>
                           
                           
                           
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Update">
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

@endsection
