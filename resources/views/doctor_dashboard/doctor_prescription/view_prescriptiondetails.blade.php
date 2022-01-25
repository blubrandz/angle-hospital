@extends('doctor_dashboard.doctor_master')
@section('doctor')

@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
    
@endphp

 <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
        

      <!-- Main content -->
      <section class="invoice printableArea">
          
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <div class="bb-1 clearFix">
                  <div class="text-right pb-15">
                      <button id="prints" class="btn btn-rounded btn-warning" type="button"> <span><i class="fa fa-print"></i> Print</span> <!--use id="#print1" to use only text method printing -->
                      </button>
                  </div>	
                </div>
              </div>
              <div class="col-12">
                <div class="">  <!-- class ="page-header" -->
                  <h2 class="d-inline"><span class="font-size-30"> <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 20%" alt=""> </span></h2>
                  <div class="pull-right text-right">
                      <h3 id="datedatas">  </h3> <!--date here-->
                  </div>	
                </div>
              </div>
              <!-- /.col -->
            </div>

            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-md-12 ">
                {{-- <strong><h5>Doctor Details</h5></strong>	 --}}
                <address>
                  <strong class="text-blue font-size-24">Doctor Details</strong><br>
                  <strong class="d-inline">Doctor Name: Dr.{{ $data->doctorname_prescription }} </strong><br>
                  <strong>Phone: (00) 123-456-7890 <br>
                     Email: {{ $data->doctoremail_prescription }}</strong>  
                </address>
              </div>
            </div>
            <!-- /.row -->


            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-md-12 ">
                {{-- <strong>Patient Details</strong>	 --}}
                <address>
                  <strong class="text-blue font-size-24">Patient Details</strong><br>
                  <strong class="d-inline">Doctor Name: {{ $data->patientname_prescription }} </strong><br>
                  <strong>Phone: {{ $data->patientphonenumber_prescription }} <br> 
                    Email: {{ $data->patientemail_prescription }}</strong>  <br>
                    <strong class="d-inline">Appoitment Date: {{ $data->patientapoitmentdate_prescription }} </strong><br>
                    <strong class="d-inline">TimeSlot : {{ $data->patientslot_prescription }} </strong><br>
                </address>
              </div>
            </div>
            <!-- /.row -->

            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-md-12 ">
                {{-- <strong>Patient Details</strong>	 --}}
                <address>
                  <strong class="text-blue font-size-24">Dignosis</strong><br>
                  
                  {!! $data->doctor_detailprescription !!}
                  
                </address>
              </div>
            </div>
            <!-- /.row -->

            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-md-12 ">
                {{-- <strong>Patient Details</strong>	 --}}
                <address>
                  <strong class="text-blue font-size-24">Medicines</strong><br>
                  
                  {{-- {{ $data->medicine_prescription }} --}}
                  @foreach ($data->medicine_prescription as $key=>$item)
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$key+1}}. {{ $item }}
                  <br>
                  @endforeach
                  
                </address>
              </div>
            </div>
            <!-- /.row -->

            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-md-12 ">
                {{-- <strong>Patient Details</strong>	 --}}
                <address>
                  <strong class="text-blue font-size-24">Next Apoitment</strong><br>
                  
                  <strong class="d-inline">After {{ $data->nextapoitment_prescription }} </strong><br>

                  
                </address>
              </div>
            </div>
            <!-- /.row -->

            
              
      </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->

<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    var tdate = new Date();
   var dd = tdate.getDate(); //yields day
   var MM = tdate.toLocaleString('default', { month: 'long' }); //yields month
   var yyyy = tdate.getFullYear(); //yields year
   var currentDate= dd + " " +( MM) + " " + yyyy;

   $("#datedatas").html(currentDate)
  })
</script>

<script>
  $(document).ready(function() {
    $("#prints").click(function() {
      window.print();
    })
  })
</script>

@endsection
