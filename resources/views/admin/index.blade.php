@extends('admin.admin_master')
@section('admin')
    

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">data new <small class="text-success"><i class="fa fa-caret-up"></i> Total Users</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">data new <small class="text-success"><i class="fa fa-caret-up"></i> Total Partys</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              
 
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-success-light rounded w-60 h-60">
                              <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">data new <small class="text-success"><i class="fa fa-caret-up"></i> Party Requests</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-12 ">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              New Users
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 100px"><span class="text-white">Name</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Type</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Email</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">Mobile</span></th>
                                          <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>

                                  {{-- <tbody>
                                      @foreach ($userDataAllDataAdminDashBoard as $item)
                                      <tr>										
                                        <td class="pl-0 py-8 ml-5 pl-5">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 ">
                                                </div>

                                                <div>
                                                    <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16"> {{ Str::ucfirst($item->name)}} </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->usertype }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->email  }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->mobile == null?"NA":$item->mobile }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary-light badge-lg" style="color:white ; background :yellowgreen ; font-weight:bold "> {{ $item->usertype == 'user'?"Approved":"Not Approved" }} </span>
                                        </td>

                                        <td class="text-right">
                                            <a href="{{route('user.view')}}" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                        </td>
                                        
                                    </tr>

                                      @endforeach

                                  </tbody> --}}
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>

          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection

