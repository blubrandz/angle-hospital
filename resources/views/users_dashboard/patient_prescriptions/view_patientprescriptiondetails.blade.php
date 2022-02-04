@extends('users_dashboard.user_master')
@section('user')

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
              
              <div class="col-12  pt-4 pb-4 mb-5 bg-primary pl-4" >
                  <div class="row">
                    <div class="col-10">
                      <h2 class="d-inline">
                        <span class="font-size-50 text-center"> Angle Fertility Hospital</span>
                      </h2>
                      <h4> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad sit </h4>
                      <h3> www.xyz.com / www.youtube.com </h3>
                    </div>
                    <div class="col-2">
                      <img  src="{{asset('backend/images/logo/logo.png')}}" style="width: 80%" alt="">
                    </div>
                  </div>
              </div>
              <!-- /.col -->
            </div>

            <!-- info row -->
            <div class="row invoice-info text-dark font-size-18" style="border-top:5px solid #b4b8bf;border-bottom:5px solid #b4b8bf;margin-top:40px; padding:10px 0px ; ">
              <div class="col-8 ">
                {{-- <strong><h5>Doctor Details</h5></strong>	 --}}
                <address class="mt-5 ">
                  <strong class="text-blue font-size-24">Doctor Details</strong><br>
                  <strong class="d-inline ">Doctor Name: <span style="color: #14bef0">Dr.{{ $data->doctorname_prescription }}</span> </strong><br>
                  <strong>Phone: (00) 123-456-7890 <br>
                     Email: {{ $data->doctoremail_prescription }}</strong>  
                </address>
              </div>
              <div class="col-4 float text-right ">
                {{-- <strong><h5>Doctor Details</h5></strong>	 --}}
                <address class="mt-5 ">
                  <strong class="text-blue font-size-24">Schedule Details</strong><br>
                  <strong class="d-inline">Appoitment Date: {{ date('j F, Y',strtotime($data->patientapoitmentdate_prescription)) }} </strong><br>
                  <strong class="d-inline">TimeSlot : {{ $data->patientslot_prescription }} </strong><br>

                </address>
              </div>
            </div>
            <!-- /.row -->

            <div style="padding: 30px 0px">
            <!-- info row -->
            <div class="row invoice-info text-dark ">
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
                
                <div class="row mt-3 ml-5"> 
                    <div class="col-md-3 m-0 p-0">
                    <div class="list-group">
                        <a  class="list-group-item list-group-item-action active">
                        Medicine Name
                        </a>
                        
                        @empty($data->medicine_prescription)
                        <span class="list-group-item list-group-item-action disabled"> N/A </span>
                        @else
                        @foreach ($data->medicine_prescription as $item)
                        <span class="list-group-item list-group-item-action disabled"> {{ $item }} </span>
                        @endforeach
                        @endempty
                    </div>
                    </div>

                    <div class="col-md-4 m-0 p-0">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                        Frequency
                        </a>
                        
                        @empty($data->frequency_prescription)
                        <span class="list-group-item list-group-item-action disabled"> N/A </span>
                        @else
                        @foreach ($data->frequency_prescription as $freq)
                        <span class="list-group-item list-group-item-action disabled"> {{ $freq }} </span>
                        @endforeach
                        @endempty
                    
                    </div>
                    </div>

                    <div class="col-md-4 m-0 p-0">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                        Note
                        </a>
                        
                        @empty($data->note_prescription)
                        <span class="list-group-item list-group-item-action disabled"> N/A </span>
                        @else
                        @foreach ($data->note_prescription as $note)
                        <span class="list-group-item list-group-item-action disabled"> {{ $note }} </span>
                        @endforeach
                        @endempty
                    </div>
                    </div>
                    

                </div>
                
                </address>
            </div>
            </div>
            <!-- /.row -->

            <!-- info row -->
            <div class="row invoice-info text-dark">
              <div class="col-md-12 ">
                {{-- <strong>Patient Details</strong>	 --}}
                <address>
                  <strong class="text-blue font-size-24">Next Apoitment</strong><br>
                  
                  <strong class="d-inline text-danger"><b> {{ $data->nextapoitment_prescription==null?"Not AVailable":$data->nextapoitment_prescription }}</b> </strong><br>

                  
                </address>
              </div>
            </div>
            <!-- /.row -->
            </div>

            <!-- info row -->
            <div class="row invoice-info text-dark font-size-18" style="border-top:5px solid #b4b8bf;border-bottom:5px solid #b4b8bf;margin-top:40px; padding:10px 0px ; ">
              <div class="col-8 ">
                {{-- <strong><h5>Doctor Details</h5></strong>	 --}}
                <address class="mt-5 ">
                  <strong class="text-blue font-size-24">Patient Details</strong><br>
                  <strong class="d-inline">Patient Name: {{ $data->patientname_prescription }} </strong><br>
                  <strong>Phone: {{ $data->patientphonenumber_prescription }} <br> 
                    Patient Email: {{ $data->patientemail_prescription }}</strong>  <br>
                </address>
              </div>
              <div class="col-4 float text-right ">
                {{-- <strong><h5>Doctor Details</h5></strong>	 --}}
                <address class="mt-5 ">
                  <strong class="text-blue font-size-24">Schedule Details</strong><br>
                  <strong class="d-inline">Appoitment Date: {{ date('j F, Y',strtotime($data->patientapoitmentdate_prescription)) }} </strong><br>
                  <strong class="d-inline">TimeSlot : {{ $data->patientslot_prescription }} </strong><br>

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
