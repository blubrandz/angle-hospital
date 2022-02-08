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
                   All Doctors List
                </h3>
                

                {{-- <a href=" {{ route('doctormanagement.viewall') }} " class="btn btn-rounded btn-success md-5 " style="float: right; margin-left:10px"> View All Schedule</a> 

                <a href=" {{ route('doctormanagement.viewallpassedSchedules') }} " class="btn btn-rounded btn-success md-5 " style="float: right; margin-left:10px"> Passeed Schedule</a> 

                <a href=" {{ route('doctormanagement.viewallupcommingSchedules') }} " class="btn btn-rounded btn-success md-5 " style="float: right"> Upcoming Schedule</a> --}}

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
                              <th> Doctor Specilist </th>
                              <th> Doctor Services </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->name }} </td>
                              <td> {{$item->email  }} </td>
                              <td style="{{ $item->doctor_specilist==null?'color:red':'' }}"> {{ $item->doctor_specilist==null?"N/A":$item->doctor_specilist }} </td>
                              <td style="{{ $item->doctor_service==null?'color:red':'' }}"> {{$item->doctor_service==null?"N/A":$item->doctor_service }} </td>

                               <td>
                                <a class="btn btn-info" href=" {{Route('doctorprescriptionmanagement.viewalldoctorprescriptions',$item->id)}}">View All Prescriptions </a>                                
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
