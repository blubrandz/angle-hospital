@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($prefix) ; check which prefix is calling now --}}  

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{ Route('dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 40%" alt="">
						  {{-- <h3><b> Unicorn </b> Admin</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href=" {{ Route('dashboard') }} ">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  

        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{Route('profile.view')}} "><i class="ti-more"></i>Your Profile</a></li>
            <li><a href=" {{Route('password.view')}} "><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>

		
        {{-- <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}} "><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.add') }} "><i class="ti-more"></i>Add User</a></li>

          </ul>
        </li>  --}}

        <li class="header nav-small-cap">STAFF MANAGMENT</li>	

        <li class="treeview {{ ($prefix == '/doctorspecility')?'active':'' }}">
          <a href="#">
            <i data-feather="anchor"></i> <span>Manage Doctor Specility</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('doctorspecility.add')}}"><i class="ti-more"></i>Add Specility</a></li>
            <li><a href="{{route('doctorspecility.view')}}"><i class="ti-more"></i>View Speciality</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/services')?'active':'' }}">
          <a href="#">
            <i data-feather="globe"></i> <span>Manage Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('services.add')}}"><i class="ti-more"></i>Add services</a></li>
            <li><a href="{{route('services.view')}}"><i class="ti-more"></i>View services</a></li>
          </ul>
        </li>



        <li class="treeview {{ ($prefix == '/doctors')?'active':'' }}">
          <a href="#">
            <i data-feather="users"></i> <span>Manage Doctors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{route('doctors.add')}} "><i class="ti-more"></i>Add Doctors</a></li>
            <li><a href=" {{route('doctors.view')}} "><i class="ti-more"></i>View Doctors</a></li>
          </ul>
        </li>

        <li class="treeview  {{ ($prefix == '/reception')?'active':'' }}">
          <a href="#">
            <i data-feather="users"></i> <span>Manage Receptionist</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{route('reception.add')}} "><i class="ti-more"></i>Add Receptionist</a></li>
            <li><a href=" {{route('reception.view')}}  "><i class="ti-more"></i>View Receptionist</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">DISEASE SECTION</li>	

        <li class="treeview {{ ($prefix == '/diseasecatagory')?'active':'' }}">
          <a href="#">
            <i data-feather="grid"></i> <span>Disease Catagory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('diseasecatagory.add')}}"><i class="ti-more"></i>Add Catagory</a></li>
            <li><a href="{{route('diseasecatagory.view')}}"><i class="ti-more"></i>View Catagory</a></li>
          </ul>
        </li>


        <li class="treeview {{ ($prefix == '/disease')?'active':'' }}">
          <a href="#">
            <i data-feather="plus-square"></i> <span>Disease Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{route('disease.add')}} "><i class="ti-more"></i>Add Disease</a></li>
            <li><a href=" {{route('disease.view')}} "><i class="ti-more"></i>View Disease</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">MEDICINES SECTION</li>	

        <li class="treeview {{ ($prefix == '/adminmedicine')?'active':'' }}">
          <a href="#">
            <i data-feather="plus-circle"></i> <span>Manage Medicines</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminmedicine.add')}}"><i class="ti-more"></i>Add Medicine</a></li>
            <li><a href="{{route('adminmedicine.view')}}"><i class="ti-more"></i>View Medicine</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">DOCTOR MANAGEMENT </li>	

        <li class="treeview {{ ($prefix == '/doctormanagement')?'active':'' }}">
          <a href="#">
            <i data-feather="calendar"></i> <span>Date and Timeslot</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('doctormanagement.viewall')}}"><i class="ti-more"></i>View all Schedule</a></li>
            <li><a href="{{route('doctormanagement.viewalldoctorlist')}}"><i class="ti-more"></i>View all Doctors</a></li>
          </ul>
        </li>


        <li class="treeview {{ ($prefix == '/doctorprescriptionmanagement')?'active':'' }}">
          <a href="#">
            <i data-feather="edit-3"></i> <span>Doctor Prescriptions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('doctorprescriptionmanagement.viewall')}}"><i class="ti-more"></i>View All Prescriptions</a></li>
            <li><a href="{{route('doctorprescriptionmanagement.viewdoctorslist')}}"><i class="ti-more"></i>View Doctors List</a></li>
            <li><a href="{{route('doctorprescriptionmanagement.viewpatientslist')}}"><i class="ti-more"></i>View Patient List</a></li>
          </ul>
        </li>



		  
		        <li class="header nav-small-cap">EXTRA</li>	

            <li class="treeview">
              <a href="#">
                <i data-feather="mail"></i> <span>Mailbox</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
              </ul>
            </li>
		  
            <li>
                  <a href="{{Route('admin.logout')}}">
                    <i data-feather="lock"></i>
                    <span>Log Out</span>
                  </a>
            </li> 
        
      </ul>
    </section>
	
	{{-- <div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div> --}}
  </aside>

 


