<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Title -->
      <title>@yield('title') - {{ config('app.name') }}</title>
      <!-- Required Meta Tags Always Come First -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
      <!-- Google Fonts -->
      <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <!-- CSS Implementing Plugins -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/custombox/dist/custombox.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote-lite.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
      <!-- CSS Front Template -->
      <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
      <!--Custom CSS-->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
   </head>
   <body class="u-custombox-no-scroll" cz-shortcut-listen="true">

      <!--include header--->
      @include('layouts.module.header')

      <!--content--->
      <main id="content" role="main">
      @yield('content')
      </main>

      <!--include footer--->
      @include('layouts.module.footer')

<!-- Go to Top -->
<a class="js-go-to u-go-to animated" href="#" data-position="{&quot;bottom&quot;: 15, &quot;right&quot;: 15 }" data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown" style="display: inline-block; position: fixed; opacity: 0; bottom: 15px; right: 15px;">
<span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->
<!-- JS Global Compulsory -->
<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
<script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
<script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendor/custombox/dist/custombox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/custombox/dist/custombox.legacy.min.js') }}"></script>
<script src="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/vendor/appear.js') }}"></script>
<script src="{{ asset('assets/vendor/circles/circles.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
<!-- JS Front -->
<script src="{{ asset('assets/js/hs.core.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.unfold.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.malihu-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.focus-state.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.validation.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.modal-window.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.step-form.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.show-animation.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.range-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.chart-pie.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.progress-bar.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.svg-injector.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.datatables.js') }}"></script>

@stack('js')

<!-- JS Plugins Init. -->
<script>
   $(window).on('load', function () {
     // initialization of HSMegaMenu component
     $('.js-mega-menu').HSMegaMenu({
       event: 'hover',
       pageContainer: $('.container'),
       breakpoint: 767.98,
       hideTimeOut: 0
     });
   
     // initialization of HSMegaMenu component
     $('.js-breadcrumb-menu').HSMegaMenu({
       event: 'hover',
       pageContainer: $('.container'),
       breakpoint: 991.98,
       hideTimeOut: 0
     });
   
     // initialization of svg injector module
     $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
   });
   
   $(document).on('ready', function () {
     // initialization of header
     $.HSCore.components.HSHeader.init($('#header'));
   
     // initialization of unfold component
     $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
       afterOpen: function () {
         $(this).find('input[type="search"]').focus();
       }
     });
   
     // initialization of malihu scrollbar
     $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
   
     // initialization of forms
     $.HSCore.components.HSFocusState.init();
   
     // initialization of form validation
     $.HSCore.components.HSValidation.init('.js-validate');
   
     // initialization of autonomous popups
     $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
       autonomous: true
     });
   
     // initialization of step form
     $.HSCore.components.HSStepForm.init('.js-step-form');
   
     // initialization of show animations
     $.HSCore.components.HSShowAnimation.init('.js-animation-link');
   
     // initialization of range datepicker
     $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');
   
     // initialization of chart pies
     var items = $.HSCore.components.HSChartPie.init('.js-pie');
   
     // initialization of horizontal progress bars
     var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress', {
       direction: 'horizontal',
       indicatorSelector: '.js-hr-progress-bar'
     });
   
     var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress', {
       direction: 'vertical',
       indicatorSelector: '.js-vr-progress-bar'
     });
   
     // initialization of go to
     $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of datatables
      $.HSCore.components.HSDatatables.init('.js-datatable');
   });
</script>
</body>
</html>