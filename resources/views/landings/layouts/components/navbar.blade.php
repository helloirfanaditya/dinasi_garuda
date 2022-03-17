 <!--Navbar Start-->
 <nav class="navbar navbar-expand-lg  navbar-custom sticky-dark" style="background-color: white;width:100%;">
     <div class="container-fluid">
         <!-- LOGO -->
         <a class="logo text-uppercase text-secondary semibold" href="/">
             <img src="{{ asset('assets/landings/asseting/' . $data_general['LOGO_ICON']) }}" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
             aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                 <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                     <a href="/" class="nav-link text-secondary">Home</a>
                 </li>
                 <li class="nav-item">
                     <a href="/kingdom"
                         class="nav-link text-secondary {{ request()->routeIs('kingdom') ? 'active' : '' }}">Kingdom</a>
                 </li>
                 <li class="nav-item">
                     <a href="/collection"
                         class="nav-link text-secondary {{ request()->routeIs('collection') ? 'active' : '' }}">Collection</a>
                 </li>
                 <li class="nav-item ">
                     <a href="/event"
                         class="nav-link text-secondary {{ request()->routeIs('event') ? 'active' : '' }}">Event</a>
                 </li>
                 <li class="nav-item ">
                     <a href="/news"
                         class="nav-link text-secondary {{ request()->routeIs('news') ? 'active' : '' }}">News</a>
                 </li>
                 <li class="nav-item ">
                     <a href="/about-us"
                         class="nav-link text-secondary {{ request()->routeIs('about-us') ? 'active' : '' }}">About
                         Us</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- Navbar End -->
