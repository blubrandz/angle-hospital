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
                <h3 class="box-title">Doctor List</h3>
                <a href=" {{ route('doctors.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add Doctor </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Role</th>
                              <th>Name</th>
                              <th> Specility </th>
                              <th> Services </th>
                              <th>Email</th>
                              <th> Phone number </th>
                              <th> Address </th>
                              <th> Birth Date </th>
                              <th> Gender </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($allData as $key => $user)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td>
                                <span {{Route('users.userapprove',$user->id)}} ><span class="badge badge-lg badge-info" style="background: @if ($user->usertype ==null)
                                  gray 
                                @elseif($user->usertype == 'user')
                                    green
                                @elseif($user->usertype == 'doctor')
                                    green

                                @else
                                    red
                                @endif "> 
                                @if ($user->usertype ==null)
                                    Unidentified user type 
                                @elseif($user->usertype == 'user')
                                    Patient
                                @elseif($user->usertype == 'doctor')
                                    Doctor
                                @elseif($user->usertype == 'reception')
                                    Receptionist
                                @else
                                    Admin
                                @endif
                                </span></span>

                              </td>
                              <td style="font-weight: bold"> {{Str::title($user->name) }} </td>
                              <td> {{$user->doctor_specilist}} </td>
                              <td style="{{ $user->doctor_service==null?'color:red':'' }}"> {{ $user->doctor_service==null?"N/A":$user->doctor_service }} </td>
                              <td> {{$user->email }} </td>
                              <td> {{$user->mobile }} </td>
                              <td> {{$user->address == null?"N/A":$user->address }} </td>
                              <td> {{$user->birth_date == null?"N/A":$user->birth_date }} </td>
                              <td> {{$user->gender== null?"N/A":$user->gender}} </td>

                              <td>
                                <!--button here-->
                                {{-- <a class="btn btn-success" href=" {{Route('users.viewuserprofile',$user->id)}} ">View User Profile</a>
                                &nbsp;&nbsp; --}}
                                <a class="btn btn-info" href=" {{Route('doctors.edit',$user->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('doctors.delete',$user->id)}}" id="delete">Delete</a>
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
