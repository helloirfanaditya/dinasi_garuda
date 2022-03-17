 <!-- Topbar Start -->
 <div class="navbar-custom" style="background-color: white;">
     <ul class="list-unstyled topnav-menu float-right mb-0">
         <li class="dropdown notification-list">
             <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
                 role="button" aria-haspopup="false" aria-expanded="false" style="color: black;">
                 <span class="pro-user-name ml-1">
                     {{ auth('admin')->user()->fullname }} <i class="mdi mdi-chevron-down"></i>
                 </span>
             </a>
             <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                 <!-- item-->
                 <div class="dropdown-item noti-title">
                     <h6 class="m-0">
                         Welcome !
                     </h6>
                 </div>
                 <!--Item -->
                 <a href="{{ route('admin.my-account') }}" class="dropdown-item notify-item">
                     <i class="dripicons-user"></i>
                     <span>My Account</span>
                 </a>
                 <!-- item-->
                 <div class="dropdown-divider"></div>
                 <!-- item-->
                 <a href="/admin/logout" class="dropdown-item notify-item">
                     <i class="dripicons-power"></i>
                     <span>Logout</span>
                 </a>
             </div>
         </li>
     </ul>

     <ul class="list-unstyled menu-left mb-0">
         <li class="float-left">
             <a href="/admin/dashboard" class="logo">
                 <span class="logo-lg">
                     <img src="{{ asset('assets/landings/asseting/' . $data_general['LOGO_LIGHT']) }}" alt=""
                         height="22">
                 </span>
                 <span class="logo-sm mt-2">
                     <img src="{{ asset('assets/landings/asseting/' . $data_general['LOGO_DARK']) }}" alt=""
                         height="22">
                 </span>
             </a>
         </li>
         <li class="float-left">
             <a class="button-menu-mobile navbar-toggle">
                 <div class="lines">
                     <span style="background-color: black;"></span>
                     <span style="background-color: black;"></span>
                     <span style="background-color: black;"></span>
                 </div>
             </a>
         </li>
     </ul>
 </div>
 <!-- end Topbar -->
