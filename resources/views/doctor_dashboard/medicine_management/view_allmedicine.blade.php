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
                <h3 class="box-title">View all medicine </h3>
                <a href=" {{ route('doctormedicine.addmedicine') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Medicine</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Username </th>
                              <th> user email </th>
                              <th> Medicine Name </th>
                              <th width="60%"> Medicine Description </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <th> {{ $item->medicine_username }} </th>
                              <th> {{ $item->medicine_useremail }} </th>
                              <td> {{$item->medicine_name }} </td>
                              <td> {{ $item->medicine_note }}</td>
                               <td>
                                <a class="btn btn-danger" href=" {{Route('doctormedicine.delete',$item->id)}}" id="delete">Delete</a>
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
