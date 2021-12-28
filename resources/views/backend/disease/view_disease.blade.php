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
                <h3 class="box-title">Disease List</h3>
                <a href=" {{ route('disease.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add Disease </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Disease Main Catagory </th>
                              <th> Disease Name </th>
                              <th> Detail View </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $user)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$user->disease_main_catagory == null?"N/A":$user->disease_main_catagory }} </td>
                              <td> {{$user->disease_name }} </td>
                              <td>
                                <a class="btn btn-warning d-block" href=" {{Route('disease.details',$user->id)}} ">View Full Details</a>
                              </td>

                              <td>
                                <a class="btn btn-info " href=" {{Route('disease.edit',$user->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('disease.delete',$user->id)}}" id="delete">Delete</a>
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
