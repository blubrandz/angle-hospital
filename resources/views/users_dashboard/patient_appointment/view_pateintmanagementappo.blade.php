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
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->username_timeslot }} </td>
                              <td> {{$item->pateintappo_doctorname }} </td>
                              <td class="rescheduledate"> {{$item->pateintappo_doctordate }} </td>
                              <td> {{$item->pateintappo_doctortimeslot }} </td>
                              <td>
                                <a class="btn btn-danger" id="rescheduleid" href=" {{Route('patientappointment.rescheduleadd',$item->id)}} "><i class="fa-repeat"></i> &nbsp; Reschedule </a>
                                {{-- <a class="btn btn-danger rescheduleid"  ><i class="fa-repeat"></i> &nbsp; Reschedule </a> --}}

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

{{-- <script>
  $(document).ready(function() {
    $(".rescheduleid").click(function() {
     var date = new Date() ;
     var year = date.getFullYear() ;
     var month = date.getMonth()+1 ;
     var date = date.getDate() ;
     var currentdate = year +"-"+ month +"-"+ date ;

     var currentrow = $(this).closest("tr") ;
     var correntcol = currentrow.find("td:eq(3)").text() ;

    //  if(currentdate == correntcol) {
    //    $(".rescheduleid").attr("disabled" , true) ;
    //    alert("disabled")
    //  }
    //  else{
    //   $(".rescheduleid").attr("disabled" , false) ;
    //    alert("Enabled")
    //  }

     

      
    })
  })
</script> --}}

{{-- <script>
  $(document).ready(function() {
      $(".rescheduleid").click(function() {
          let rescheduleid = $(this).val() ;
          alert(rescheduleid) ;
          jQuery.ajax({
              url: '/getpatient_doctordate',
              type: 'post',
              data: 'doctornameid='+doctornameid+'&_token={{ csrf_token() }}',
              success: function(result){
                  jQuery('#pateintappointment_doctordate').html(result) ;
              }
          })
      })
  })
</script> --}}


@endsection
