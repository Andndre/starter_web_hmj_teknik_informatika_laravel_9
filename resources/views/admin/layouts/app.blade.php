<!DOCTYPE html>
<html lang="id">

{{-- Comment --}}

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- TODO: --}}
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('admin.layouts._css')

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>

    {{-- TODO: --}}
    <title>{{ config('app.name', 'LARAVEL 10') }} | @yield('title')</title>
</head>

<body>
    {{-- Sweet Alert --}}
    <div class="berhasil" data-berhasil="{{ ucWords(Session::get('success')) }}"></div>
    <div class="gagal" data-gagal="{{ ucWords(Session::get('error')) }}"></div>
    <div class="warning" data-warning="{{ ucWords(Session::get('warning')) }}"></div>

    <!-- Wrapper -->
    <div id="db-wrapper">
        @if (Route::is('admin.manajemen-detail-kegiatan.*'))
            @include('admin.layouts.components.sidebar._manajemen_kegiatan')
        @else
            @include('admin.layouts.components.sidebar._main')
        @endif
        <!-- Page Content -->
        <main id="page-content">
            @include('admin.layouts.components._navbar')
            @yield('content')
            <p>&nbsp;</p>
            @include('admin.layouts.components._footer')
        </main>
    </div>
    @include('admin.layouts._js')
</body>

</html>
