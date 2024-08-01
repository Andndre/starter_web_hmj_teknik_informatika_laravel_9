<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a href="{{ route('guest.home.index') }}">
            <img src="{{ asset('assets/images/logo/hmj-ti-512.webp') }}" width="55" height="auto" alt="logo" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default"
            aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar mt-0"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#jadwal-kegiatan">Jadwal Kegiatan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
