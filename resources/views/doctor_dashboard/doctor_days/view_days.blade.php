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
                <h3 class="box-title">Appointment 
                    @if ($route == "doctorday.viewupcomingdate")
                        Upcoming Dates
                    @elseif($route == "doctorday.view")
                    All Dates
                    @else
                        Passed Dates
                    @endif
                </h3>
                <a href=" {{ route('doctorday.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Appointment Date</a> &nbsp;&nbsp;&nbsp;
                <a href=" {{ route('doctortimeslots.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Time Slot</a>

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Specilist Name </th>
                              <th width="60%"> Specilist Description </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->email_appointmentdate }} </td>
                              <td> {{ date('jS F Y' , strToTime($item->date_appointmentdate)) }}</td>
                               <td>
                                <a class="btn btn-danger" href=" {{Route('doctorday.delete',$item->id)}}" id="delete">Delete</a>
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
