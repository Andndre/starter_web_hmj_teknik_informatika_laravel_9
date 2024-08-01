<!-- Favicon icon-->
<link rel="shortcut icon" type="image/webp" href="{{ asset('assets/images/logo/hmj-ti-512.webp') }}">

<!-- Libs CSS -->
<link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

{{-- Plugin Here --}}
@yield('otherCssPlugin')

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

{{-- Custom Css Here --}}
@yield('otherCssQuery')
