@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('otherJsQuery')
    <script>
        // Selamat Pagi, Siang, Sore, Malam
        const waktu = () => {
            const hour = new Date().getHours()
            if (hour < 12) return 'Pagi';
            if (hour < 14) return 'Siang';
            if (hour < 18) return 'Sore';
            return 'Malam';
        }
        $('#selamat-datang').text(`Selamat ${waktu()}`);

        // Waktu Server
        const waktuServer = () => new Date().toLocaleString('en-US', {
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: false,
            timeZone: "{{ config('app.timezone') }}"
        });
        setInterval(() => {
            $('#waktu-server').text(waktuServer());
        }, 1000);
    </script>
@endsection
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-12">
                <div class="border-bottom pb-3 mb-3">
                    <div class="mb-3 mb-lg-0">
                        <h1 id="selamat-datang" class="mb-0 h2 fw-bold">Selamat</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold">Jumlah Kegiatan</span>
                            </div>
                            <div>
                                <span class="fe fe-activity fs-3 text-primary"></span>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-1">
                            {{-- {{ $jumlahKegiatan }} --}}
                            5
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold">Waktu Server</span>
                            </div>
                            <div>
                                <span class=" fe fe-clock fs-3 text-primary"></span>
                            </div>
                        </div>
                        <h2 id="waktu-server" class="fw-bold mb-1">
                            xx:xx:xx
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card rounded-3">
                    <div class="card-header">
                        <h2 class="fw-bold mb-0 h3">Selamat Datang {{ Auth::user()->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p>Sistem Informasi Manajemen Satu Pintu (SSO) HMJ TI Undiksha, Berikut Informasi Anda :</p>
                        <ul>
                            <li>Username Anda Adalah : <span class="text-primary">{{ Auth::user()->email }}</span></li>
                            <li>No Telepon/WA Anda Adalah : <span class="text-primary"> @if (Auth::user()->whatsapp != null ) {{ Auth::user()->whatsapp }} @else Tidak Ada @endif </span></li>
                            <li>Anda Login Sebagai : <span class="text-primary"> @if (Auth::user()->is_admin == 1 )  Administrator @else User @endif</span></li>
                        </ul>
                        <p>Jaga Selalu Username dan Password Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
