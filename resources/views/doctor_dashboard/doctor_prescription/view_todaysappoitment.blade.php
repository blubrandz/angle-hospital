@extends('doctor_dashboard.doctor_master')
@section('doctor')

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
                <h3 class="box-title">Dr.{{ $user->name }} Todays Appoitment </h3>
                <a href=" {{ route('doctorday.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Appointment Date</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Patient Name </th>
                              <th> Patient Phone Number </th>
                              <td> Date </td>
                              <th> time </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->username_timeslot }} </td>
                              <td> {{ $item->patientappo_phonenumber }}</td>
                              <td> {{ date('jS F Y' , strToTime($item->pateintappo_doctordate)) }} </td>
                              <td> {{ $item->pateintappo_doctortimeslot }} </td>
                               <td>
                                <a class="btn btn-info" href=" {{Route('doctorprescription.addprescription',$item->id)}}" ><i class="fa fa-edit"></i> &nbsp; Write Prescription</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-warning" href=" {{Route('doctorprescription.previoushistory',$item->id)}}" ><i class="fa fa-book"></i> &nbsp;View Previous History</a>

                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('doctorday.delete',$item->id)}}" id="delete"><i class="fa fa-trash"></i> &nbsp;Cancel Appoitment</a>
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
