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
                <h3 class="box-title">Details</h3>
                <a href=" {{ route('users.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add User </a>
              </div>
              <!-- /.box-header -->
              <div class="box">
                <div class="box-body box-profile">            
                  <div class="row">
                    <div class="col-12">
                        <div>
                            <p>Usertype :<span class="text-gray pl-10" style="color: {{$data->usertype ==null?'red':'green'}}" > {{ $data->usertype == null?"NOT APPROVED YET":Str::upper($data->usertype) }} </span> </p>
                            <p>Name :<span class="text-gray pl-10"> {{ $data->name }} </span> </p>
                            <p>Email  :<span class="text-gray pl-10"> {{ $data->email == null?"NA":$data->email  }} </span> </p>
                            <p>Mobile No :<span class="text-gray pl-10"> {{ $data->mobile == null?"NA":$data->mobile }} </span> </p>
                            <p>Address :<span class="text-gray pl-10"> {{ $data->address == null?"NA":Str::upper( $data->address) }} </span> </p>
                            <p>Gender  :<span class="text-gray pl-10"> {{ $data->gender== null?"NA":$data->gender  }} </span> </p>
                            <p>Date of Birth  :<span class="text-gray pl-10"> {{ $data->birth_date== null?"NA":$data->birth_date  }} </span> </p>

                        </div>
                    </div>
                   

                  </div>
                </div>
                <!-- /.box-body -->
              </div>              <!-- /.box-body -->
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
