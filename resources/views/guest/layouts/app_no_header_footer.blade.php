<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="">
        <meta name="author" content="Web Developer HMJ TI Undiksha">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">

        @include('admin.layouts._css')

        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>

        <title>{{ config('app.name', 'ETIKA HMJ TI Undiksha') }} | @yield('title')</title>
    </head>

    <body>
        <div class="berhasil" data-berhasil="{{ ucWords(Session::get('success')) }}"></div>
        <div class="gagal" data-gagal="{{ ucWords(Session::get('error')) }}"></div>
        <div class="warning" data-warning="{{ ucWords(Session::get('warning')) }}"></div>

        <div>
            {{-- Content --}}
            <main>
                @yield('content')
            </main>
        </div>

        @include('guest.layouts._js')
    </body>
</html>
