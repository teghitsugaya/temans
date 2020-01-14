<nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
   <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand" href="index.html">
      <img src="{{ asset('assets/img/logo.svg') }}" class="navbar-brand-img 
         mx-auto" alt="...">
      </a>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">
         <!-- Form -->
         <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
               <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
               <div class="input-group-prepend">
                  <div class="input-group-text">
                     <span class="fe fe-search"></span>
                  </div>
               </div>
            </div>
         </form>
         <!-- Navigation -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="{{ url('home') }}">
               <i class="fe fe-home"></i> Dashboard
               </a>
            </li>
			<li class="nav-item">
               <a class="nav-link" href="{{ url('blank') }}">
               <i class="fe fe-file"></i> Blank Page
               </a>
            </li>
         </ul>
		 @role('Admin')
         <!-- Divider -->
         <hr class="navbar-divider my-3">
         <!-- Heading -->
         <h6 class="navbar-heading">
            Others
         </h6>
         <!-- Navigation -->
         <ul class="navbar-nav mb-md-4">
            <li class="nav-item">
               <a class="nav-link" href="{{ url('activity-log') }}">
               <i class="fe fe-activity"></i> Activity Log
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
               <i class="fe fe-users"></i> Management User
               </a>
               <div class="collapse " id="sidebarComponents">
                  <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                        <a href="{{ url('users') }}" class="nav-link">
                        Data User
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ url('role') }}" class="nav-link">
                        Role User
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('users.roles_permission') }}" class="nav-link">
                        Role Permission
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
         </ul>
		 @endrole
         <!-- Push content down -->
         <div class="mt-auto"></div>
         <!-- User (md) -->
         <div class="navbar-user d-none d-md-flex" id="sidebarUser">
            <!-- Dropup -->
            <div class="dropup">
               <!-- Toggle -->
               <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                     <img src="{{ asset('assets/img/avatars/profiles/icon-user.png') }}" class="avatar-img rounded-circle" alt="...">
                  </div>
               </a>
               <!-- Menu -->
               <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <p class="dropdown-item">
                     <a href="#" class="d-block">{{{ Auth::user()->name }}}</a>
                     <span class="text-muted">{{{ Auth::user()->roles->first()->name  }}}</span>
                  </p>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- / .navbar-collapse -->
   </div>
</nav>