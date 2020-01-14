<!-- ========== FOOTER ========== -->
<footer>
<!-- Lists -->
<div class="border-bottom">
    <div class="container space-2">
        <div class="row justify-content-md-between">
            <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold">About</h4>
            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-0">
                <li><a class="list-group-item list-group-item-action" href="#">KMS Project</a></li>
                <li><a class="list-group-item list-group-item-action" href="#">KF Learning</a></li>
                <li><a class="list-group-item list-group-item-action" href="#">LMS Kimia Farma</a></li>
            </ul>
            <!-- End List Group -->
            </div>
            <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold">Link Portal</h4>
            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-0">
                <li><a class="list-group-item list-group-item-action" href="#">Kifest</a></li>
                <li><a class="list-group-item list-group-item-action" href="#">Kimiafarma</a></li>
                <li><a class="list-group-item list-group-item-action" href="#">KF Smart</a></li>
            </ul>
            <!-- End List Group -->
            </div>
            <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold">Resources</h4>
            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-0">
                <li><a class="list-group-item list-group-item-action" href="#">Bantuan</a></li>
                <li><a class="list-group-item list-group-item-action" href="#">Syarat & Ketentuan</a></li>
                <li><a class="list-group-item list-group-item-action" href="#">Privasi</a></li>
            </ul>
            <!-- End List Group -->
            </div>
            <div class="col-md-6 col-lg-4">
            <h4 class="h6 font-weight-semi-bold mb-4">Kami terdorong untuk memberikan hasil untuk semua personal development Anda.</h4>
            <!-- Button -->
            <button type="button" class="btn btn-xs btn-dark btn-wide transition-3d-hover text-left mb-2 mr-1">
            <span class="media align-items-center">
            <span class="fab fa-apple fa-2x mr-3"></span>
            <span class="media-body">
            <span class="d-block">Download on the</span>
            <strong class="font-size-1">App Store</strong>
            </span>
            </span>
            </button>
            <!-- End Button -->
            <!-- Button -->
            <button type="button" class="btn btn-xs btn-dark btn-wide transition-3d-hover text-left mb-2">
            <span class="media align-items-center">
            <span class="fab fa-google-play fa-2x mr-3"></span>
            <span class="media-body">
            <span class="d-block">Get it on</span>
            <strong class="font-size-1">Google Play</strong>
            </span>
            </span>
            </button>
            <!-- End Button -->
            </div>
        </div>
    </div>
</div>
<!-- End Lists -->
<!-- Copyright -->
<div class="container text-center space-1">
    <!-- Logo -->
   
        <span class="brand brand-primary">HaloTalent</span>
    </a>
    <!-- End Logo -->
    <p class="small text-muted">© HaloTalent. 2019 Kimia Farma. All rights reserved. Development with <i class="fas fa-heart"></i> <a href="#">IT Holding</a></p>
</div>
<!-- End Copyright -->
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--account__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex justify-content-between align-items-center pt-4 px-7">
            <h3 class="h6 mb-0">My Account</h3>

            <button type="button" class="close ml-auto"
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
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <!-- Holder Info -->
            <header class="d-flex align-items-center u-sidebar--account__holder mt-3">
              <div class="position-relative">
                <img class="u-sidebar--account__holder-img" src="{{ asset('data_profile')}}/{{ $curriculumVitae->file_foto }}" alt="Image Description">
                <span class="badge badge-xs badge-outline-success badge-pos rounded-circle"></span>
              </div>
              <div class="ml-3">
                <span class="font-weight-semi-bold">{{{ Auth::user()->name }}} <span class="badge badge-success ml-1">Pro</span></span>
                <span class="u-sidebar--account__holder-text">{{ Auth::user()->roles->first()->name  }}</span>
              </div>

              <!-- Settings -->
              <div class="btn-group position-relative ml-auto mb-auto">
                <a id="sidebar-account-settings-invoker" class="btn btn-xs btn-icon btn-text-secondary rounded" href="javascript:;" role="button"
                        aria-controls="sidebar-account-settings"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-toggle="dropdown"
                        data-unfold-event="click"
                        data-unfold-target="#sidebar-account-settings"
                        data-unfold-type="css-animation"
                        data-unfold-duration="300"
                        data-unfold-delay="300"
                        data-unfold-animation-in="slideInUp"
                        data-unfold-animation-out="fadeOut">
                  <span class="fas fa-ellipsis-v btn-icon__inner"></span>
                </a>

                <div id="sidebar-account-settings" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="sidebar-account-settings-invoker">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">History</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
                </div>
              </div>
              <!-- End Settings -->
            </header>
            <!-- End Holder Info -->

            <div class="u-sidebar__content--account">
              <!-- List Links -->
              <ul class="list-unstyled u-sidebar--account__list">
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="{{ url('home') }}">
                    <span class="fas fa-home u-sidebar--account__list-icon mr-2"></span>
                    Home
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="{{ url('curriculum-vitae') }}">
                    <span class="fas fa-user-circle u-sidebar--account__list-icon mr-2"></span>
                    CV Profile
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="{{ url('pms') }}">
                    <span class="fas fa-tasks u-sidebar--account__list-icon mr-2"></span>
                    PMS Profile
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="{{ url('assesment') }}">
                    <span class="fas fa-layer-group u-sidebar--account__list-icon mr-2"></span>
                    Assesment
                  </a>
                </li>
              </ul>
              <!-- End List Links -->
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="#">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="#">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="#">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="{{ asset('assets/svg/components/wave-bottom-with-dots.svg') }}" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
  <!-- ========== END SECONDARY CONTENTS ========== -->