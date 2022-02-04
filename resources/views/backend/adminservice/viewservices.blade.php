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
                <h3 class="box-title">Services List</h3>
                <a href=" {{ route('services.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add Services </a>
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
                              <td> {{ Str::title($item->services_name) }} </td>
                              <td style="{{ $item->services_description==null?'color:red':'' }}"> {{ $item->services_description==null?"No description available for this service":$item->services_description }} </td>

                              <td>
                                {{-- <a class="btn btn-info " href=" {{Route('doctorspecility.edit',$item->id)}} ">Edit</a>
                                &nbsp;&nbsp; --}}
                                <a class="btn btn-danger" href=" {{Route('services.delete',$item->id)}}" id="delete">Delete</a>
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
