<!--active sidbar menu functionality -->
@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($route) --}}
<!--end active sidebar functionality here-->

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{Route('userdashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
            {{-- <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 40%" alt=""> --}}
            <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 40%" alt="">
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'userdashboard')?'active':'' }}">
          <a href="{{Route('userdashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/userprofile')?"active":"" }} ">
            <a href="#">
              <i data-feather="user"></i> <span>Manage Your Profile</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=" {{ route('userprofile.view') }} "><i class="ti-more"></i>Your Profile</a></li>
              <li><a href=" {{ Route('userpassword.view') }} "><i class="ti-more"></i>Change Password</a></li>
            </ul>
          </li>

        <li class="header nav-small-cap">Manage Booking</li>


      <li class="treeview {{ ($prefix == '/patientappointment')?"active":"" }}"> 
        <a href="#">
          <i data-feather="clock"></i> <span>Manage Appointment</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=" {{ route('patientappointment.add') }} "><i class="ti-more"></i>Add Appointment</a></li>
          <li><a href="{{ route('patientappointment.view') }}"><i class="ti-more"></i>View Appintment</a></li>
        </ul>
      </li>

      <li class="treeview {{ ($prefix == '/patientprescription')?"active":"" }}">
        <a href="#">
          <i data-feather="archive"></i> <span>Prescriptions </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('patientprescription.viewallprescription') }}"><i class="ti-more"></i>View all prescription</a></li>
        </ul>
      </li>

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

      <li class="header nav-small-cap">Logoff</li>

		  
		<li>
          <a href="{{Route('userdashboard.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	
  </aside>

