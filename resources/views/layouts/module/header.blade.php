<!-- ========== HEADER ========== -->
<header id="header" class="u-header">
   <div class="u-header__section">
      <!-- Topbar -->
      <div class="container u-header__hide-content pt-2">
         <div class="d-flex align-items-center">
            <div class="ml-auto">
               <!-- Jump To -->
               <div class="d-inline-block d-sm-none position-relative mr-2">
                  <a id="jumpToDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button" aria-controls="jumpToDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#jumpToDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                  Jump to
                  </a>
                  <div id="jumpToDropdown" class="dropdown-menu dropdown-unfold u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="jumpToDropdownInvoker" style="animation-duration: 300ms;">
                     <a class="dropdown-item" href="#">Bantuan</a>
                     <a class="dropdown-item" href="#">Kontak</a>
                  </div>
               </div>
               <!-- End Jump To -->
               <!-- Links -->
               <div class="d-none d-sm-inline-block ml-sm-auto">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item mr-0">
                        <a class="u-header__navbar-link" href="#">Bantuan</a>
                     </li>
                     <li class="list-inline-item mr-0">
                        <a class="u-header__navbar-link" href="#">Kontak</a>
                     </li>
                  </ul>
               </div>
               <!-- End Links -->
            </div>
            <ul class="list-inline ml-2 mb-0">
               <!-- Account Login -->
               <li class="list-inline-item">
                  <!-- Account Sidebar Toggle Button -->
                  <a id="sidebarNavToggler" class="btn btn-xs btn-text-secondary u-sidebar--account__toggle-bg ml-1" href="javascript:;" role="button"
                     aria-controls="sidebarContent"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-hide-on-scroll="false"
                     data-unfold-target="#sidebarContent"
                     data-unfold-type="css-animation"
                     data-unfold-animation-in="fadeInRight"
                     data-unfold-animation-out="fadeOutRight"
                     data-unfold-duration="500">
                  <span class="position-relative">
                  <span class="u-sidebar--account__toggle-text">{{ Auth::user()->name }}</span>
                  <img class="u-sidebar--account__toggle-img" src="{{ asset('data_profile')}}/{{ $curriculumVitae->file_foto }}" alt="Image Description">
                  <span class="badge badge-sm badge-success badge-pos rounded-circle">3</span>
                  </span>
                  </a>
                  <!-- End Account Sidebar Toggle Button -->
               </li>
               <!-- End Account Login -->
            </ul>
         </div>
      </div>
      <!-- End Topbar -->
      <div id="logoAndNav" class="container">
         <!-- Nav -->
         <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space hs-menu-initialized hs-menu-horizontal">
            <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="index.php" aria-label="Front">
                  <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img mx-auto" alt="...">
            </a>
            <!-- End Logo -->
            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
            <span class="u-hamburger__inner"></span>
            </span>
            </button>
            <!-- End Responsive Toggle Button -->
            <!-- Navigation -->
            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
               <ul class="navbar-nav u-header__navbar-nav">
                  <!-- Home -->
                  <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                     <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="{{ url('home') }}" >Home</a>
                  </li>
                  <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                     <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="{{ url('curriculum-vitae') }}" >CV Profile</a>
                  </li>
                  <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                     <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="{{ url('performance') }}" >PMS Profile</a>
                  </li>
                  <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                     <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="{{ url('assessment') }}" >Assessment</a>
                  </li>
                  <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                     <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="{{ url('development') }}" >Development</a>
                  </li>
                  <!-- End Home -->
                  @role('Admin')
                  <!-- Pages -->
                  <li class="nav-item hs-has-sub-menu u-header__nav-item"
                     data-event="hover"
                     data-animation-in="slideInUp"
                     data-animation-out="fadeOut">
                     <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Admin Pages</a>

                     <!-- Pages - Submenu -->
                     <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                     <!-- Company -->
                     <li class="hs-has-sub-menu">
                        <a id="navLinkPagesCompany" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">User Control</a>

                        <ul id="navSubmenuPagesCompany" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                           <li><a class="nav-link u-header__sub-menu-nav-link" href="{{ url('users') }}">Data User</a></li>
                           <li><a class="nav-link u-header__sub-menu-nav-link" href="{{ url('role') }}">Role User</a></li>
                           <li><a class="nav-link u-header__sub-menu-nav-link" href="{{ route('users.roles_permission') }}">Role Permision</a></li>
                        </ul>
                     </li>
                     <!-- Company -->
                     <!-- End Pages - Submenu -->
                  </li>
                  <!-- End Pages -->
                  @endrole
               </ul>
            </div>
            <!-- End Navigation -->
         </nav>
         <!-- End Nav -->
      </div>
   </div>
</header>
<!-- ========== END HEADER ========== -->