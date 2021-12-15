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
            {{-- <div class="logo"><b>A<span>r</span>a<span>g</span>ma</b></div> --}}
            <div class="logo"><b><span></span><span>Aragma</span></b></div>

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
              <i data-feather="mail"></i> <span>Manage Your Profile</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=" {{ route('userprofile.view') }} "><i class="ti-more"></i>Your Profile</a></li>
              <li><a href=" {{ Route('userpassword.view') }} "><i class="ti-more"></i>Change Password</a></li>
            </ul>
          </li>
            




      {{-- <li class="treeview {{ ($prefix == '/usermessage')?"active":"" }} ">
        <a href="#">
          <i data-feather="mail"></i> <span>Chat Zone</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('usermessage.userchat') }}"><i class="ti-more"></i>Message Zone</a></li>
        </ul>
      </li> --}}


      {{-- <li class="treeview">
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
      </li> --}}
		  
		<li>
          <a href="{{Route('userdashboard.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	
  </aside>

  <style>
    @import url(//fonts.googleapis.com/css?family=Vibur);

.logo b{
  font: 400 5vh "Vibur";
  color: #fee;
  /* text-shadow: 0 -40px 100px, 0 0 2px, 0 0 1em #ff4444, 0 0 0.5em #ff4444, 0 0 0.1em #ff4444, 0 10px 3px #000; */
  text-shadow: 0 -40px 100px, 0 0 2px, 0 0 1em #5a1642, 0 0 0.5em #6e1b51, 0 0 0.1em #663756, 0 10px 3px #000;

}
.logo b span{
  animation: blink linear infinite 2s;
}
.logo b span:nth-of-type(2){
  animation: blink linear infinite 3s;
}
@keyframes blink {
  78% {
    color: inherit;
    text-shadow: inherit;
  }
  79%{
     color: #333;
  }
  80% {
    
    text-shadow: none;
  }
  81% {
    color: inherit;
    text-shadow: inherit;
  }
  82% {
    color: #333;
    text-shadow: none;
  }
  83% {
    color: inherit;
    text-shadow: inherit;
  }
  92% {
    color: #333;
    text-shadow: none;
  }
  92.5% {
    color: inherit;
    text-shadow: inherit;
  }
}


/* follow me @nodws */
#btn-twtr{
  clear:both;
  color:#fff;
  border:2px solid;
  border-radius:3px;
  text-align:center;
  text-decoration:none;
  display:block;
  font-family:sans-serif;
  font-size:14px;
  width:13em;
  padding:5px 10px;
  font-weight:600;
  position:absolute;
  bottom:20px;
  left:0;
  right:0;
  margin:0 auto;
  background:rgba(0,0,0,0.2);
  box-shadow:0 0 0px 3px rgba(0,0,0,0.2);
  opacity:0.4
}#btn-twtr:hover{color:#fff;opacity:1}
  </style>