@extends('admin.admin_master')
@section('admin')

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
                <h3 class="box-title">
                    @if ($route == "doctormanagement.viewallupcommingSchedules")
                        All Upcoming Schedules of Doctors
                    @elseif($route == "doctormanagement.viewallpassedSchedules")
                    All Passed Schedules of Doctors
                    @else
                    All Doctor Schedule 
                    @endif
                </h3>
                <a href=" {{ route('doctormanagement.viewalldoctorlist') }} " class="btn btn-rounded btn-success md-5 " style="float: right; margin-left:10px"> View All Doctor List</a> 

                <a href=" {{ route('doctormanagement.viewall') }} " class="btn btn-rounded btn-success md-5 " style="float: right; margin-left:10px"> View All Schedule</a> 

                <a href=" {{ route('doctormanagement.viewallpassedSchedules') }} " class="btn btn-rounded btn-success md-5 " style="float: right; margin-left:10px"> Passeed Schedule</a> 

                <a href=" {{ route('doctormanagement.viewallupcommingSchedules') }} " class="btn btn-rounded btn-success md-5 " style="float: right"> Upcoming Schedule</a>

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Doctor Name </th>
                              <th> Doctor Email </th>
                              <th> Date </th>
                              <th> Timeslot from  </th>
                              <th > Timeslot to </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->username_timeslot }} </td>
                              <td> {{$item->useremail_timeslot }} </td>
                              <td> <span class="btn btn-info">{{ date('jS F Y' , strToTime($item->selectdate_timeslot)) }}</span></td>
                              <td> {{$item->starting_time_timeslot }} </td>
                              <td> {{$item->ending_time_timeslot }} </td>
                               <td>
                                <a class="btn btn-danger" href=" {{Route('doctormanagement.delete',$item->id)}}" id="delete">Delete</a>
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
