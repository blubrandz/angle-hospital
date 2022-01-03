<!--active sidbar menu functionality -->
@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($route) --}}
<!--end active sidebar functionality here-->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
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
		  
		<li class="{{ ($route == 'doctordashboard')?'active':'' }}">
          <a href="{{Route('doctordashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  

        <li class="treeview {{ ($prefix == '/doctorprofile')?"active":"" }}">
          <a href="#">
            <i data-feather="users"></i>
            <span>Your Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ Route('doctorprofile.view') }} "><i class="ti-more"></i>Profile</a></li>
            <li><a href="{{ Route('doctorpassword.view') }} "><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li> 

        <li class="header nav-small-cap">Manage Your Schedule</li>

		
        <li class="treeview {{ ($prefix == '/doctorday')?"active":"" }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Date</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('doctorday.add') }}"><i class="ti-more"></i>Add Date</a></li>
            <li><a href="{{ Route('doctorday.view') }}"><i class="ti-more"></i>View Date</a></li>
            <li><a href="{{ Route('doctorday.viewupcomingdate') }}"><i class="ti-more"></i> Upcoming Appointment</a></li>
            <li><a href="{{ Route('doctorday.viewpasseddate') }}"><i class="ti-more"></i> Paased Appointment</a></li>
          </ul>
        </li> 

        <li class="treeview {{ ($prefix == '/doctortimeslots')?"active":"" }}">
          <a href="#">
            <i data-feather="clock"></i>
            <span>Manage Timeslot</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ Route('doctortimeslots.add') }} "><i class="ti-more"></i>Add Timeslot</a></li>
            <li><a href=" {{ Route('doctortimeslots.view') }} "><i class="ti-more"></i>View Timeslot</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Manage Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>
            <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Application</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>
            <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>
          </ul>
        </li> 

		  
		 
        <li class="header nav-small-cap">User Interface</li>
 
		  
		    <li>
          <a href="{{ route('doctordashboard.logout') }}">
            <i data-feather="lock"></i>
			     <span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
  </aside>
