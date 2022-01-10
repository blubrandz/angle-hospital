@extends('users_dashboard.user_master')
@section('user')

@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp

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
                <h3 class="box-title"> Yours Appointments </h3>
                <a href=" {{ route('patientappointment.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Book An Appoitment </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Your Name </th>
                              <th> Doctor name </th>
                              <th> Date of Appointment </th>
                              <th> Timeslot </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->username_timeslot }} </td>
                              <td> {{$item->pateintappo_doctorname }} </td>
                              <td> {{$item->pateintappo_doctordate }} </td>
                              <td> {{$item->pateintappo_doctortimeslot }} </td>
                              <td>
                                <a class="btn btn-danger " href=" {{Route('disease.edit',$item->id)}} "><i class="fa-repeat"></i> &nbsp; Reschedule </a>
                                &nbsp;&nbsp;
                                {{-- <a class="btn btn-danger" href=" {{Route('disease.delete',$item->id)}}" id="delete">Delete</a> --}}
                            </td>
                          </tr>
                        @endforeach

                      </tbody>

                    </table>
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
