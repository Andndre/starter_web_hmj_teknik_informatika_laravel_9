<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('auth.layouts._css')

    <title>{{ config('app.name') }} | @yield('title')</title>
</head>

<body>
    <main>
        <section class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center g-0 min-vh-100">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <div class="card shadow">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('auth.layouts._js')
</body>

</html>
