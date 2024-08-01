@extends('guest.layouts.app')

@section('title', 'Beranda')

@section('otherCssQuery')
    <style>
        body {
            scroll-behavior: smooth !important;
        }
    </style>
@endsection

@section('description', 'ETIKA merupakan sebuah sistem berbasis website yang digunakan untuk membantu dalam pelaksanaan E-Voting dilingkungan HMJ TI Undiksha.')

@section('content')
    <main>
        @include('generals.countdownAlert')
        <section class="py-lg-20 py-18 bg-white">
            <div class="py-4"></div>
            <div class="container">
                <!-- Hero Section -->
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="mb-4 mb-xl-0 text-center text-md-start">
                            <!-- Caption -->
                            <h1 class="display-2 fw-bold mb-3 ls-sm ">Electronic Voting System HMJ TI Undiksha</h1>
                            <p class="mb-4 lead ">
                                ETIKA merupakan sebuah sistem berbasis website yang digunakan untuk membantu dalam
                                pelaksanaan E-Voting dilingkungan HMJ TI Undiksha.
                            </p>
                            <!-- List -->
                            <div class="mb-6 mb-0">
                                <ul
                                    class="list-unstyled d-flex flex-wrap gap-4 fs-4 justify-content-center justify-content-md-start">
                                    <li class="mb-2 "><span class="me-2 "><i
                                                class="mdi mdi-check text-success "></i></span><span
                                            class="align-top">Langsung</span></li>
                                    <li class="mb-2 "><span class="me-2 "><i
                                                class="mdi mdi-check text-success "></i></span><span
                                            class="align-top">Umum</span></li>
                                    <li class="mb-2 "><span class="me-2 "><i
                                                class="mdi mdi-check text-success "></i></span><span
                                            class="align-top">Bebas</span></li>
                                    <li class="mb-2 "><span class="me-2 "><i
                                                class="mdi mdi-check text-success "></i></span><span
                                            class="align-top">Rahasia</span></li>
                                    <li class="mb-2 "><span class="me-2 "><i
                                                class="mdi mdi-check text-success "></i></span><span
                                            class="align-top">Jujur</span></li>
                                    <li class="mb-2 "><span class="me-2 "><i
                                                class="mdi mdi-check text-success "></i></span><span
                                            class="align-top">Adil</span></li>
                                </ul>
                            </div>
                            <a href="#jadwal-kegiatan" class="btn btn-success btn-lg fs-4">Lihat Kegiatan</a>
                        </div>
                    </div>
                    <div class="offset-xxl-1 col-xxl-5 col-lg-6 col-md-12">
                        <!-- Card -->
                        <div class="card smooth-shadow-md" style="z-index: 1;">
                            <!-- Card body -->
                            <div class="card-body p-xl-6 ">
                                <div class="mb-4">
                                    <h1 class="mb-4 lh-1 fw-bold h2">Cek Hak Pilih</h1>
                                    <p>Silahkan masukkan informasi berikut untuk memastikan Anda memiliki hak pilih pada
                                        kegiatan EVOTING yang berlangsung</p>
                                </div>
                                <!-- Form -->
                                <form action="#" method="POST">
                                    @csrf
                                    <!-- Username -->
                                    <div class="mb-3">
                                        <label for="nim" class="form-label visually-hidden">Email</label>
                                        <input type="number" id="nim" class="form-control" name="nim"
                                            placeholder="NIM" required autocomplete="nim" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="prodi_code" class="form-label visually-hidden">Prodi</label>
                                        <select id="prodi_code" name="prodi_code"
                                            class="form-control col-12 @error('prodi_code') is-invalid @enderror"
                                            placeholder="Masukkan Prodi" value="{{ old('prodi_code') }}">
                                            <option value="">-- Pilih Prodi --</option>
                                            {{-- @foreach ($prodis as $prodi)
                                                <option value="{{ $prodi->code }}"
                                                    {{ old('prodi_code') == $prodi->code ? 'selected' : '' }}>
                                                    {{ $prodi->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-grid mt-3">
                                        <button type="submit" class="btn btn-primary">Cari Saya</button>
                                    </div>
                                </form>
                                {{-- <script>
                                    $('#nim').on('input', function() {
                                        const nim = $(this).val();
                                        const prodi_code = nim.substring(2, 6);
                                        if (prodi_code.length == 4) {
                                            $('#prodi_code').val(prodi_code);
                                        }
                                    });
                                </script> --}}
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer px-6 py-4">
                                <p class="mb-0">Jika Hak Pilih Anda belum terdata, silahkan hubungi <a style="font-weight: bold"
                                        href="https://wa.me/6281999572163">Admin Website</a> atau dapat melalui Email Kami
                                </p>
                            </div>
                        </div>
                        <!-- Pattern -->
                        <div class="position-relative">
                            <div
                                class="position-absolute bottom-0 end-0 me-md-n3 mb-md-n6 me-lg-n4 mb-lg-n4 me-xl-n6 mb-xl-n8 d-none d-md-block ">
                                <img src="{{ asset('assets/images/pattern/dots-pattern.svg') }}" alt=""
                                    class="opacity-25">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-20 py-18 bg-white" id="tujuan">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="mb-6 mb-lg-8">
                            <h2 class="h1 fw-bold">Keunggulan <u class="text-warning"><span
                                        class="text-primary">ETIKA</span></u></h2>
                            <p class="mb-1 lead">
                                Sejak awal pengembangan, kami berkomitmen untuk mengembangkan suatu Sistem Informasi yang
                                mampu mendukung proses pemilihan dengan memiliki keunggulan, yakni
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                                <div class="image-box text-center icon-1 p-5">
                                    <div class="featured-img mb-3">
                                        <i class="mdi mdi-cellphone fs-2"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h3 fw-bold">Mudah Diakses</h3>
                                        <p class="mb-1 lead">
                                            Tanpa perlu mengunduh, Sistem ETIKA dapat diakses melalui browser pengguna
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                                <div class="image-box text-center icon-1 p-5">
                                    <div class="featured-img mb-3">
                                        <i class="mdi mdi-creation fs-2"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h3 fw-bold">Mudah Digunakan</h3>
                                        <p class="mb-1 lead">
                                            Cukup login dengan Username dan Token, Anda dapat memulai melakukan pemilihan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                                <div class="image-box text-center icon-1 p-5">
                                    <div class="featured-img mb-3">
                                        <i class="mdi mdi-shield-check fs-2"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h3 fw-bold">Aman dan Nyaman</h3>
                                        <p class="mb-1 lead">
                                            Hanya Anda yang mengetahui pilihan Anda, tidak ada yang lain diantaranya bahkan
                                            panitia
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                                <div class="image-box text-center icon-1 p-5">
                                    <div class="featured-img mb-3">
                                        <i class="mdi mdi-puzzle fs-2"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h3 fw-bold">Terintegrasi Teknologi</h3>
                                        <p class="mb-1 lead">
                                            Proses penginputan kandidat, pemilih, dan perhitungan suara dilakukan oleh
                                            sistem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                                <div class="image-box text-center icon-1 p-5">
                                    <div class="featured-img mb-3">
                                        <i class="mdi mdi-bullhorn fs-2"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h3 fw-bold">LUBERJUDIL</h3>
                                        <p class="mb-1 lead">
                                            Meskipun menggunakan Teknologi, sistem ETIKA tetap mengutamakan asas LUBERJUDIL
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                                <div class="image-box text-center icon-1 p-5">
                                    <div class="featured-img mb-3">
                                        <i class="mdi mdi-file-document fs-2"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h3 fw-bold">Multi Kegiatan</h3>
                                        <p class="mb-1 lead">
                                            Sistem ETIKA mendukung banyak kegiatan evoting secara bersamaan, sangat mudah
                                            kan?
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-20 py-18" id="syarat-ketentuan">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="service-thumb discover-thumb mx-auto pt-5 pt-lg-0">
                            <img src="{{ asset('assets/images/ti-bot/rev1.webp') }}" alt="" class="img-fluid"
                                width="364px" height="500px" style="max-width: 500px; max-height: 500px;" loading="lazy">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div class="mb-6 mb-lg-8">
                            <h2 class="h1 fw-bold">Ketentuan dan Syarat Melakukan <u class="text-warning"><span
                                        class="text-primary">EVOTING</span></u></h2>
                            <p class="mb-5 lead" style="color: var(--geeks-gray-dark)">
                                Agar Anda terdata pada sistem dan dapat melakukan EVOTING, ada beberapa ketentuan yang perlu
                                diperhatikan
                            </p>
                            <ul class="text-justify" style="font-size: 18px; color: var(--geeks-gray-dark) ">
                                <li class="py-1 list-unstyled">
                                    <div class="list-box media d-flex">
                                        <span class="mx-2 mt-2 fs-3"> <i class="mdi mdi-check-circle"></i></span>
                                        <span class="ps-2 mb-2">
                                            <p>
                                                Terdata sebagai Mahasiswa Aktif di SIAK Undiksha yang ditandai dengan
                                                penyusunan KRS Pada Semester Berlangsungnya kegiatan EVOTING
                                            </p>
                                        </span>
                                    </div>
                                </li>
                                <li class="py-1 list-unstyled">
                                    <div class="list-box media d-flex">
                                        <span class="mx-2 mt-2 fs-3"> <i class="mdi mdi-check-circle"></i></span>
                                        <span class="ps-2 mb-2" style="font-size: 18px; color: var(--geeks-gray-dark) ">
                                            <p>
                                                Mahasiswa Aktif Semester 2, 4, 6, 8 Wajib Melakukan EVOTING, Sedangkan
                                                Mahasiswa Aktif Semester Diatasnya, dapat melakukan pengusulan Hak Pilih
                                                untuk mendapatkan Hak Suaranya
                                            </p>
                                        </span>
                                    </div>
                                </li>
                                <li class="py-1 list-unstyled">
                                    <div class="list-box media d-flex">
                                        <span class="mx-2 mt-2 fs-3"> <i class="mdi mdi-check-circle"></i></span>
                                        <span class="ps-2 mb-2" style="font-size: 18px; color: var(--geeks-gray-dark) ">
                                            <p>
                                                Menggunakan Hak Pilih dengan sebagaimana mestinya, tidak melakukan
                                                kecurangan, atau tindakan yang tidak mencerminkan asas LUBERJUDIL
                                            </p>
                                        </span>
                                    </div>
                                </li>
                                <li class="py-1 list-unstyled">
                                    <div class="list-box media d-flex">
                                        <span class="mx-2 mt-2 fs-3"> <i class="mdi mdi-check-circle"></i></span>
                                        <span class="ps-2 mb-2" style="font-size: 18px; color: var(--geeks-gray-dark) ">
                                            <p>
                                                Menjaga selalu Username dan Token Hak Pilih yang diberikan pada kegiatan
                                                EVOTING
                                            </p>
                                        </span>
                                    </div>
                                </li>
                                <li class="py-1 list-unstyled">
                                    <div class="list-box media d-flex">
                                        <span class="mx-2 mt-2 fs-3"> <i class="mdi mdi-check-circle"></i></span>
                                        <span class="ps-2 mb-2" style="font-size: 18px; color: var(--geeks-gray-dark) ">
                                            <p>
                                                Jika Hak Pilih Anda belum terdata, Anda dapat mengusulkan Hak Pilih dengan
                                                cara menghubungi Admin Website atau melalui Email HMJ TI Undiksha
                                            </p>
                                        </span>
                                    </div>
                                </li>
                                <li class="py-1 list-unstyled">
                                    <div class="list-box media d-flex">
                                        <span class="mx-2 mt-2 fs-3"> <i class="mdi mdi-check-circle"></i></span>
                                        <span class="ps-2 mb-2" style="font-size: 18px; color: var(--geeks-gray-dark) ">
                                            <p>
                                                Akun yang Anda peroleh tidak akan bisa digunakan lagi ketika durasi kegiatan
                                                telah habis.
                                            </p>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex mt-3">
                                <div class="px-3">
                                    <a href="mailto:hmjtiundiksha@gmail.com" aria-label="Email" class="mdi mdi-email-outline fs-2"></a>
                                </div>
                                <div class="service-icon">
                                    <a href="https://www.instagram.com/hmj_ti.undiksha/" aria-label="Instagram" class="mdi mdi-instagram fs-2"></a>
                                </div>
                                <div class="service-icon px-3">
                                    <a href="https://www.facebook.com/hmj.ti.undiksha/?_rdc=2&_rdr" aria-label="Facebook" class="mdi mdi-facebook fs-2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-20 py-18 bg-white" id="alur-kegiatan">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="text-center">
                            <h2 class="h1 fw-bold">Alur kegiatan <u class="text-warning"><span
                                        class="text-primary">EVOTING</span></u></h2>
                            <p class="mb-5 lead">
                                Berikut Alur kegiatan EVOTING yang dapat diperhatikan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-4">
                        <div class="text-center p-3">
                            <div class="work-icon">
                                <i class="mdi mdi-file-document-check-outline fs-2"></i>
                            </div>
                            <h3 class="h3 fw-bold py-3">Cek Hak Pilih</h3>
                            <p class="lead">
                                Cek Hak Pilih Anda melalui sistem ETIKA, jika belum terdaftar, hubungi Operator. Operator
                                akan melakukan pengecekan terhadap data anda
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center p-3">
                            <div class="work-icon">
                                <i class="mdi mdi-check-circle-outline fs-2"></i>
                            </div>
                            <h3 class="h3 fw-bold py-3">Pilih Kegiatan PEMIRA</h3>
                            <p class="lead">
                                Pilih Kegiatan PEMIRA sesuai dengan dikegiatan apa Anda telah terdaftar. Untuk mengetahui
                                dikegiatan apa anda terdaftar, lakukan pengecekan Hak Pilih
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center p-3">
                            <div class="work-icon">
                                <i class="mdi mdi-file-lock-outline fs-2"></i>
                            </div>
                            <h3 class="h3 fw-bold py-3">Gunakan Hak Pilih</h3>
                            <p class="lead">
                                Lakukan Login dengan Username dan Token yang didapatkan. Jika Anda tidak memiliki, silahkan
                                lakukan Generate Token atau Hubungi Panitia
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="py-lg-14 py-6" id="jadwal-kegiatan">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="mb-6 mb-lg-8">
                            <a href="#jadwal-kegiatan">
                                <h2 id="jadwal-kegiatan" class="h1 fw-bold">Jadwal <u class="text-warning"><span
                                            class="text-primary">Kegiatan</span></u></h2>
                            </a>
                            <p class="mb-0 lead" style="color: var(--geeks-gray-dark)">Berikut merupakan beberapa jadwal kegiatan PEMIRA yang tersedia, silahkan
                                cek terlebih dahulu Hak Pilih Anda untuk mengetahui kegiatan yang dapat Anda Ikuti.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    {{-- @if ($kegiatans->count() == 0)
                        <div class="col-12 col-md-6 mx-auto">
                            <img class="img-fluid d-block mx-auto"
                                src="{{ asset('assets/images/svg/undraw_season_change.svg') }} " alt="img-kosong">
                            <h3 class="text-center pt-3">Tidak Ada Kegiatan Yang Bisa Diikuti :(</h3>
                        </div>
                    @endif
                    @foreach ($kegiatans as $kegiatan)
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <div class="card-body text-center p-5">
                                    <div id="kegiatan-{{ $kegiatan->id }}" class="alert alert-info" role="alert">
                                        Memuat status kegiatan..
                                    </div>
                                    <div class="my-2 my-sm-3">
                                        <h2 class="text-uppercase">{{ $kegiatan->name }}</h2>
                                    </div>
                                    <div class="mt-3">
                                        {!! $kegiatan->description !!}
                                    </div>
                                    <a href="{{ route('guest.home.detail', $kegiatan->slug) }}"
                                        class="btn btn-primary mt-4 mb-1 w-100" id="detail-{{ $kegiatan->id }}">
                                        Lihat Detail
                                    </a>
                                    <script>
                                        countDownAlert(
                                            "#kegiatan-{{ $kegiatan->id }}",
                                            "{{ $kegiatan->start_date }}",
                                            "{{ $kegiatan->end_date }}",
                                            (status) => {
                                                switch (status) {
                                                    case 'sudahBerakhir':
                                                    case 'belumDimulai':
                                                        $("#detail-{{ $kegiatan->id }}").hide();
                                                        break;
                                                    default:
                                                        $("#detail-{{ $kegiatan->id }}").show();
                                                }
                                            });
                                    </script>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                </div>
        </section>
        @if (old('allKegiatans') != null)
            <button type="button" hidden id="tampilkan-modal" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModalCenter">
                Tampilkan kegiatan
            </button>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalCenterTitle">Informasi</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body py-lg-13 py-8 bg-primary">
                            <div class="container">
                                <div class="row align-items-center">
                                    <!-- User info -->
                                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                                        <div class="text-center mb-6 px-md-6">
                                            <h1 class="text-white display-3 fw-semibold ">
                                                Anda Terdaftar di Kegiatan Berikut. Selamat Memilih!
                                            </h1>
                                            <p class="text-white lead mb-8" style="color: var(--geeks-gray-dark)">
                                                Berikut adalah daftar kegiatan yang bisa Anda ikuti. Silakan klik Detail
                                                apabila kegiatan sudah dimulai untuk mendapatkan token pemilihan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
        <section class="py-lg-20 py-18" id="faq">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="faq-content">
                            <span class="d-block text-center mt-5 lead" style="color: var(--geeks-gray-dark)">Masih Bingung? <br> <span class="fs-5">
                                Berikut Frequently Asked Question
                                    (FAQs) Sistem ETIKA
                            </span> </span>
                            <div class="accordion pt-5" id="faq-accordion">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="card my-2">
                                            <div class="card-header bg-white">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                        Apakah Mahasiswa Non-Aktif Memiliki Hak Pilih?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#apolo-accordion">
                                                <div class="card-body">
                                                    Agar terdaftar menjadi pemilih pada kegiatan pemilihan yang
                                                    dilaksanakan, Anda harus terdata sebagai mahasiswa aktif di SIAK
                                                    Undiksha pada semester saat kegiatan pemilihan berlangsung.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header bg-white">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                        Apa yang harus dilakukan jika hak pilih saya tidak terdaftar di
                                                        sistem?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#apolo-accordion">
                                                <div class="card-body">
                                                    Jika Anda yakin ini merupakan kesalahan dari panitia, Anda dapat
                                                    menghubungi panitia dengan menyertakan data-data yang diminta untuk
                                                    diinputkan ke sistem. Panitia akan melakukan pengecekan terhadap data
                                                    Anda, jika data Anda memenuhi persyaratan Pemilihan, maka Anda dapat
                                                    menggunakan Hak Pilih Anda
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header bg-white">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                                        Token Tidak Dapat Digunakan
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#apolo-accordion">
                                                <div class="card-body">
                                                    Jika Anda tidak dapat menggunakan Token Anda namun Anda belum melakukan
                                                    pemilihan, Anda dapat menghubungi operator, operator akan melakukan
                                                    Reset Terhadap token tersebut
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="card my-2">
                                            <div class="card-header bg-white">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                                        Apakah Semua Kegiatan Pemilihan dapat saya ikuti?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#apolo-accordion">
                                                <div class="card-body">
                                                    Tergantung kebijakan Panitia, mungkin saja ada pemilihan yang memiliki
                                                    syarat khusus untuk menjadi pemilih, sehingga Anda tidak terdaftar
                                                    didalamnya
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header bg-white">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                                        Darimanakah panitia mendapatkan data pemilih?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#apolo-accordion">
                                                <div class="card-body">
                                                    Data pemilih sepenuhnya berasal dari UPT TIK, data yang digunakan pada
                                                    pembuatan sistem akan sangat dijaga kerahasiaannya dan tidak akan
                                                    digunakan untuk hal-hal diluar dari kegiatan yang berlangsung.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header bg-white">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                                        Apakah boleh saya tidak melakukan pemilihan?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseSix" class="collapse" data-parent="#apolo-accordion">
                                                <div class="card-body">
                                                    Bagi pemilih yang telah terdaftar di sistem ETIKA, diwajibkan untuk
                                                    melakukan pemilihan sesuai kegiatan yang berlangsung. Mari gunakan hak
                                                    pilih Anda guna membangun Jurusan Teknik Informatika yang lebih baik
                                                    lagi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
