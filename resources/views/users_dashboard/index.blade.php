@extends('users_dashboard.user_master')
@section('user')
    

  <!-- Content Wrapper. Contains page content -->
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
                              <h3 class="text-white mb-0 font-weight-500">hELLO <small class="text-success"><i class="fa fa-caret-up"></i> Upcoming Party</small></h3>
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
                              <h3 class="text-white mb-0 font-weight-500">hELLO <small class="text-success"><i class="fa fa-caret-up"></i> Missed Party</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p> --}}
                              <h3 class="text-white mb-0 font-weight-500"> hELLO <small class="text-danger"><i class="fa fa-caret-down"></i> Your total Request</small></h3>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              Upcomming Partys 
                              {{-- <small class="subtitle">More than 400+ new members</small> --}}
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">Upcoming Party</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">Date</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">City</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">Total Fees</span></th>
                                          <th style="min-width: 90px"><span class="text-fade">Discount</span></th>
                                          <th style="min-width: 90px ; text-align:right"><span class="text-fade">Make A request</span></th>
                                      </tr>
                                  </thead>
                                  {{-- <tbody>

                                      @foreach ($UserDashboardPartyData as $item)
                                        <tr>										
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                    </div>

                                                    <div>
                                                        <span class="text-white font-weight-600 hover-primary mb-1 font-size-16"> {{ $item->party_name }} </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    {{$item->party_starting_date}}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    {{ $item->party_city }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    <span class="font-weight-bold" >₹ </span>{{ $item->party_fees }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    <span class="font-weight-bold" >₹ </span>{{ $item->party_discount }}
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <a href=" {{ route('userpartyrequest.partyrequestadd') }} " class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
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
  <!-- /.content-wrapper -->


@endsection
