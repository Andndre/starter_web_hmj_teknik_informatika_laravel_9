<script>
    // Render blocking JS:
    if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
</script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/webp" href="{{ asset('assets/images/logo/hmj-ti-512.webp') }}">

<!-- Libs CSS -->
<link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

@yield('otherCssPlugin')

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

@yield('otherCssQuery')
