 <!-- Topbar Start -->
 <div class="navbar-custom" style="background-color: white;">
     <ul class="list-unstyled topnav-menu float-right mb-0">
         <li class="dropdown notification-list">
             <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
                 role="button" aria-haspopup="false" aria-expanded="false" style="color: black;">
                 <img src="{{ asset('assets/admin/images/users/avatar-4.jpg') }}" alt="user-image"
                     class="rounded-circle">
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

                 @if (auth('admin')->user()->roles->roles == 'Admin Master')
                     <!--Item -->
                     <a href="{{ route('admin.list-admin') }}" class="dropdown-item notify-item">
                         <i class="fas fa-user-secret"></i>
                         <span>List Admin</span>
                     </a>
                 @endif

                 <!--Item -->
                 <a href="{{ route('admin.my-account') }}" class="dropdown-item notify-item">
                     <i class="dripicons-user"></i>
                     <span>My Account</span>
                 </a>

                 @if (auth('admin')->user()->roles->roles == 'Admin Master')
                     <!-- item -->
                     <a href="{{ route('admin.add-admin') }}" class="dropdown-item notify-item">
                         <i class="fas fa-users"></i>
                         <span>Add Admin</span>
                     </a>
                 @endif

                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                     <i class="dripicons-gear"></i>
                     <span>Settings</span>
                 </a>
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
                 <span class="logo-lg mt-2">
                     <h2 style="color: black">Dinasi Garuda</h2>
                 </span>
                 <span class="logo-sm mt-2">
                     <h2 style="color: black">DG</h2>
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
