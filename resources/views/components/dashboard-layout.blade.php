<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>OFFICE MVP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

  @stack('css')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets_dashboard/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_dashboard/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>

<body>
    <div id="app">
      @include('sweetalert::alert')
      <div class="main-wrapper main-wrapper-1">
          {{-- navs --}}
          <x-dashboard-nav/>
          {{-- sidebar --}}
          <x-dashboard-side/>

          <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    {{ $slot }}
                </section>
            </div>

        {{-- footer --}}
        <x-dashboard-footer/>
      </div>
    </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets_dashboard/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/popper.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/js/stisla.js') }}"></script>

  {{-- sweet alert cdn --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets_dashboard/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/chart.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/cleave-js/dist/cleave.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets_dashboard/js/page/index.js') }}"></script>
  <script src="{{ asset('assets_dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets_dashboard/js/page/forms-advanced-forms.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('assets_dashboard/js/scripts.js') }}"></script>
  <script src="{{ asset('assets_dashboard/js/custom.js') }}"></script>
  @stack('script')
</body>
</html>
