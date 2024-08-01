<!-- Script -->

<!-- Libs JS -->
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>

{{-- Plugin Here --}}
@yield('otherJsPlugin')

<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

@include('generals._sweetalert')

@yield('otherJsQuery')
